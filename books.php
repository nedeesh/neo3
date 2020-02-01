<!DOCTYPE html>
<html lang="en">
<head>
    <nav class="navbar navbar-expand-sm bg-danger navbar-dark">
        <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="books.php">BOOKS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="search.php">BOOK SEARCH</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="edit.php">BOOK EDIT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="delete.php">BOOK DELETE</a>
            </li>
          </ul>
    </nav>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method=GET>
    <table class="table">
        <TR>
            <td>Book Code</td>
            <td><input type="text" class="form-control" name="getBook"></td>
        </TR>
        <tr>
            <td>Book Ttile</td>
            <td><input type="text" class="form-control" name="getTitle"></td>
        </tr>
        <tr>
            <td>Auther Name</td>
            <td><input type="text" class="form-control" name="getAuther"></td>
        </tr>
        <tr>
            <td>Discription</td>
            <td><input type="text" class="form-control"name="getDescription"></td>
        </tr>
        <tr>
            <td>Book Price</td>
            <td><input type="text" class="form-control"name="getPrice"></td>
        </tr>
        <tr>
            <td>Publisher</td>
            <td><input type="text" class="form-control"name="getPublisher"></td>
        </tr>
        <tr>
            <td><button class="btn btn-danger"name="getReset">Reset</button></td>
            <td><button class="btn btn-danger"name="getSubmit">Submit</button></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_GET["getSubmit"]))
{
    $book=$_GET["getBook"];
    $title=$_GET["getTitle"];
    $auther=$_GET["getAuther"];
    $description=$_GET["getDescription"];
    $price=$_GET["getPrice"];
    $publisher=$_GET["getPublisher"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="library";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="INSERT INTO `book`( `book code`, `book title`, `auther`, `book description`,
     `price`, `publisher`) VALUES ($book,'$title','$auther','$description',$price,'$publisher')";
      $result=$connection->query($sql);
      if($result===TRUE)
      {
          echo"successfull";
      }
      else
      {
          echo $connection->error;
      }
  }
  ?>