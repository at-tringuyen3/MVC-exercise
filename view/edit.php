<?php
    include '../model/action.php';
    include '../model/book.php';
    if($_GET) {
        $id = $_GET['id'];
    } else {
        $id = '';
    }
    $itemBook = viewBook($id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>
    <form method="post" action="../controller/bookController.php?action=edit">
        <input type="hidden" name="id" id="id" value="<?php echo $itemBook->getId()?>">
        <div class="row">
            <label>Name <span class="req">*</span></label>
            <input type="text" name="name" id="name" value="<?php echo $itemBook->getName()?>" required>
        </div>
        <div class="row">
            <label>Author <span class="req">*</span></label>
            <input type="text" name="author" id="author" value="<?php echo $itemBook->getAuthor()?>" required>
        </div>
        <div class="row">
            <label>Price <span class="req">*</span></label>
            <input type="text" name="price" id="price" value="<?php echo $itemBook->getPrice()?>" required>
        </div>
        <div class="center">
            <input type="submit" id="submitbtn" name="submitbtn" value="Edit">
        </div>
    </form>
</body>
</html>