<?php

include 'config.php';

//
// Main block
//

// Работа скрипта
include 'notice_board.php';
include 'explanation.php';

$id = (isset($_GET['id'])) ? $_GET['id'] : '';

if (isset($_POST['button_add'])) {
    if ($_POST['private'] == 0) {
                $exp = new PrivateExplanation(Explanation::prepareQuery($_POST, $id));
            } else {
                $exp = new CorporateExplanation(Explanation::prepareQuery($_POST, $id));
            }
    $exp->save();
}

$instance = Notice_board::instance()->getAllExpFromDB()->getListOfExplanations()->display();
