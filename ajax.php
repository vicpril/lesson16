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
?>