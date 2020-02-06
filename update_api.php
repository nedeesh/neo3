<?php
if(isset($_POST["book title"]))
{
    
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="library";
    $update=$_POST["book title"];
    $code=$_POST["code1"];
    $auther=$_POST["auther1"];
    $description=$_POST["description1"];
    $price=$_POST["price1"];
    $publisher=$_POST["publisher1"];
    $connection1=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql1="UPDATE `book` SET `book code`=$code,`auther`='$auther',
    `book description`='$description',`price`=$price,`publisher`='$publisher' WHERE `book title`='$update'";
     $result1=$connection1->query($sql1);
     if($result1===TRUE)
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