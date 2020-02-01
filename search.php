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
            <td>Book Name</td>
            <td><input type="text" class="form-control" name="getBook"></td>
        </TR>
        <tr>
        <td><button name="getSubmit" class="btn btn-danger">Search</button>
        </td>
        </tr>
        </table>
</form>
</body>
</html>
<?php
if(isset($_GET["getSubmit"]))
{
    $book=$_GET["getBook"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="library";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="SELECT  `book code`, `book title`, `auther`, 
    `book description`, `price`, `publisher` FROM `book` WHERE `book title`='$book'";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
      $code=$row["book code"];
      $title=$row["book title"];
      $auther=$row["auther"];
      $description=$row["book description"];
      $price=$row["price"];
      $publisher=$row["publisher"];
      echo "<table class='table'><tr><td>Book Code</td><td>$code</td></tr>
      <tr><td>Book Name</td><td>$title</td></tr>
      <tr><td>Auther</td><td>$auther</td></tr><tr><td>Description</td><td>$description</td></tr>
      <tr><td>Price</td><td>$price</td></tr><tr><td>Publisher</td><td>$publisher</td></tr>
      </table>";
    }
    }
        else
        {
          echo"invalid movie";
        }
    }
    ?>