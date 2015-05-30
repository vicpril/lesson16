<?php

include 'config.php';

//
// Main block
//

// Работа скрипта
include 'notice_board.php';
include 'explanation.php';

$instance = Notice_board::instance()->getAllExpFromDB()->getListOfExplanations()->display();
