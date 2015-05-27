<?php

class Notice_board {

    private static $instance = NULL;
    public $board = array();

    public static function instance() {
        if (self::$instance == NULL) {
            self::$instance = new Notice_board();
        }
        return self::$instance;
    }

    public function addExp(Explanation $exp) {
        if (!($this instanceof Notice_board)) {
            die('Нельзя использовать этот метод в конструкторе классов');
        }
        $id = $exp->getId();
        $this->board[$id] = $exp;
    }

    public function getAllExpFromDB() {
        global $mysqli;
        $all = $mysqli->select('SELECT * FROM explanations ORDER BY id DESC');
        foreach ($all as $value) {
            if ($value['private'] == 0) {
                $exp = new PrivateExplanation($value);
            } else {
                $exp = new CorporateExplanation($value);
            }
            self::addExp($exp);
        }
        return self::$instance;
    }

    public function getListOfExplanations() {
        global $smarty;
        $row = '';
        foreach ($this->board as $value) {
            if ($value instanceof CorporateExplanation) {
                $smarty->assign('status', 'class="info"');
            } else {
                $smarty->assign('status', '');
            }
            $smarty->assign('exp', $value->getValue());
            $row.=$smarty->fetch('table_row.tpl.html');
        }
        $smarty->assign('exp_rows', $row);
        return self::$instance;
    }

    public function display($show = '') {
        global $smarty;
        global $mysqli;
        
        if ($show !== '') {
            $result = $mysqli->selectRow('SELECT * FROM explanations WHERE id=?d', $show);
            return $result;
        }

        if (isset($_GET['show']) && isset($this->board[$_GET['show']])) {
            $show = $_GET['show'];
            $name = $this->board[$show]->getValue();
            foreach ($name as &$value) {
                $value = htmlspecialchars($value);
            }
            $smarty->assign('header_tpl', 'header_exp');
            $smarty->assign('title', 'Объявление');
            $smarty->assign('show', $show);
            $smarty->assign('name', $name);
        } else {
            $smarty->assign('header_tpl', 'header');
            $smarty->assign('title', 'Доска объявлений');
        }

        $smarty->assign('cities', self::getCitiesList());
        $smarty->assign('categories', self::getCategoriesList());
        $smarty->display('index.tpl');
    }

    // Запрос списка городов для формы
    private function getCitiesList() {
        global $mysqli;
        $cities = $mysqli->selectCol("SELECT `index` AS ARRAY_KEY, city FROM cities_list");
        return $cities;
    }

    // Запрос списка категорий для формы
    private function getCategoriesList() {
        global $mysqli;
        $result = $mysqli->select("SELECT t2.index, t2.category AS cat, t1.category AS groupe
                        FROM categories_list AS t1
                        LEFT JOIN categories_list AS t2 ON t2.parent_id = t1.index
                        WHERE t2.parent_id is not null");
        foreach ($result as $row) {
            $categories [$row['groupe']][$row['index']] = $row['cat'];
        }
        return $categories;
    }

}
