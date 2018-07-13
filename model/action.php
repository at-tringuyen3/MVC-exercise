<?php
  $conn = mysqli_connect("localhost", "homestead", "secret", "book_manage");
  function viewBooks()
  {
    global $conn;
    $listBook = array();
    $sql = 'SELECT * FROM book';
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
      $obj = new Book($row['id'], $row['name'], $row['author'], $row['price']);
      array_push($listBook, $obj);
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    return $listBook;
  }

  function viewBook($id)
  {
    global $conn;
    $sql = 'SELECT * FROM book WHERE id = '.$id;
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $obj = new Book($row['id'], $row['name'], $row['author'], $row['price']);
    mysqli_free_result($result);
    mysqli_close($conn);
    return $obj;
  }
  
  function addBook($name, $author, $price)
  {
    global $conn;
    $sql = $conn->prepare("insert into book (name, author, price) values (?, ?, ?)");
    $sql->bind_param("ssi", $name, $author, $price);
    if($sql->execute()) {
      return 1;
    } else {
      return 0;
    }
    mysqli_close($sql);
    mysqli_close($conn);
  }
  
  function editBook($id, $name, $author, $price)
  {
    global $conn;
    $sql = $conn->prepare("update book set name = ?, author = ?, price = ? where id = ?");
    $sql->bind_param("ssii", $name, $author, $price, $id);
    if($sql->execute()) {
      return 1;
    } else {
      return 0;
    }
    mysqli_close($sql);
    mysqli_close($conn);
  }

  function delBook($id)
  {
    global $conn;
    $sql = "delete from book where id = ".$id;
    if(mysqli_query($conn, $sql)) {
      return 1;
    } else {
      return 0;
    }
  }

  function searchBook($keyword)
  {
    global $conn;
    $listBooks = array();
    $sql = "SELECT * from book where name LIKE '%$keyword%'";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {
      $obj = new Book($row['id'], $row['name'], $row['author'], $row['price']);
      array_push($listBooks, $obj);
    }
    mysqli_free_result($result);
    mysqli_close($conn);
    return $listBooks;
  }
?>