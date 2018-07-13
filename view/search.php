<?php
    $keyword = $_POST['keyword'];
    $listBook = searchBook($keyword);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../layout/css/style.css">
</head>
<body>
    <div id="wrapper">
        <div class="panel-body">
            <p class="pull-right">
                <a class="btn btn-danger" href="/view/add.php"><img src="../layout/images/add.png" alt="">Add book</a>      
            </p>
            <table border="1px" cellpadding="30px">
                <tr>
                    <th style="width:50px">#</th>
                    <th style="width:150px"><a href="" data-sort="max_people">Name</a></th>
                    <th style="width:150px"><a href="" data-sort="max_people">Author</a></th>
                    <th style="width:150px"><a href="" data-sort="max_people">Price</a></th>
                    <th>Option</th>
                </tr>
                <?php
                    foreach($listBook as $itemBook) {
                ?>
                <tr class="info">
                    <td style="width:50px"><?php echo $itemBook->getId(); ?></td>
                    <td style="width:150px"><?php echo $itemBook->getName(); ?></td>
                    <td style="width:150px"><?php echo $itemBook->getAuthor(); ?></td>
                    <td style="width:150px"><?php echo $itemBook->getPrice(); ?></td>
                    <td><a href="/view/edit.php?action=getBook&id=<?php echo $itemBook->getId(); ?>"><img  class="image" src="../layout/images/edit.png" alt=""></a> <a class="icon" href="../controller/bookController.php?action=del&id=<?php echo $itemBook->getId(); ?>" onclick="return confirm('Are you sure?')" data-method="post"><img src="../layout/images/delete.png" alt=""></a></td>
                </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>
</html>