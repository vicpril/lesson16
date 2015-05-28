<?php

include 'config.php';
include 'notice_board.php';
include 'explanation.php';

//$instance = Notice_board::instance()->getAllExpFromDB();
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $result = Explanation::deleteExp($id);
    echo json_encode($result);
}

if (isset($_GET['show'])) {
    $id = (int) $_GET['show'];
    $result = Notice_board::instance()->display($id);
    echo json_encode($result);
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    if ($_POST['private'] == 0) {
        $exp = new PrivateExplanation(Explanation::prepareQuery($_POST, $id));
    } else {
        $exp = new CorporateExplanation(Explanation::prepareQuery($_POST, $id));
        $smarty->assign('status', 'class="info"');
    }
    $result = $exp->save();
    $smarty->assign('exp', $exp->getValue());
    $result['row'] = $smarty->fetch('table_row.tpl.html');
    echo json_encode($result);
}
?>