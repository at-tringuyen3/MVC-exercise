<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>    
    <form method="post" action="../controller/bookController.php?action=add">
        <p class="note"><span class="req">*</span>Fill the information of book in the form</p>
        <div class="row">
            <label>Name <span class="req">*</span></label>
            <input type="text" name="name" id="name" placeholder="Số đỏ" required>
        </div>
        <div class="row">
            <label>Author <span class="req">*</span></label>
            <input type="text" name="author" id="author" placeholder="Vũ Trọng Phụng" required>
        </div>
        <div class="row">
            <label>Price <span class="req">*</span></label>
            <input type="text" name="price" id="price" placeholder="100000" required>
        </div>
        <div class="center">
            <input type="submit" id="submitbtn" name="submitbtn" value="Add book">
        </div>
    </form>
</body>
</html>