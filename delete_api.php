<?php
if(isset($_GET["getSubmit"]))
{
    $book=$_GET["getCode"];
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="library";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="DELETE FROM `book` WHERE `book code`='$book'";
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