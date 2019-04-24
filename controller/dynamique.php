<?php
switch ($_GET['action']) {
    case 'home':
        include_once "./view/home.php";
        break;
    case 'event':
        include_once "./view/event.php";
        break;
    case 'group':
        include_once "./view/groupes.php";
        break;
    case 'notification'
    default:
        include_once "./view/home.php";
        break;
}
