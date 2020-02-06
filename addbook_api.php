<?php
if(isset($_POST["getBook"]))
{
    $book=$_POST["getBook"];
    $title=$_POST["getTitle"];
    $auther=$_POST["getAuther"];
    $description=$_POST["getDescription"];
    $price=$_POST["getPrice"];
    $publisher=$_POST["getPublisher"];
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
          $r["status"]="success";
      }
      else
      {
          $r["status"]="error";
      }
      echo json_encode($r);
  }
  ?>