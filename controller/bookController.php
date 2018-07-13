<?php
    include '../model/action.php';
    include '../model/book.php';
    if($_GET) {
        $action = $_GET["action"];
    } else {
        $action = "";
    }
    switch($action) {
        case 'add':
            $name = $_POST['name'];
            $author = $_POST['author'];
            $price = $_POST['price'];
            addBook($name, $author, $price);
            include '../view/index.php';
            break;
        case 'edit':
            $id = $_POST['id'];
            $name = $_POST['name'];
            $author = $_POST['author'];
            $price = $_POST['price'];
            editBook($id, $name, $author, $price);
            include '../view/index.php';
            break;
        case 'del':
            $id = $_GET['id'];
            delBook($id);
            include '../view/index.php';
            break;
        case 'search':
            $keyword = $_POST['keyword'];
            include '../view/search.php';
            break;
        default :
            include '../view/index.php';
            break;
    }
?>