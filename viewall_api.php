<?php
    $r=array();
    $ServerName="localhost";
    $DbUserName="root";
    $DbPassword="";
    $DBName="library";
    $connection=new mysqli($ServerName,$DbUserName,$DbPassword,$DBName);
    $sql="SELECT  `book code`, `book title`, `auther`, 
    `book description`, `price`, `publisher` FROM `book`";
    $result=$connection->query($sql);
    if($result->num_rows>0)
    {
    while($row=$result->fetch_assoc())
    {
      $r["data"][]=$row;
      
    }
    echo json_encode($r);
    }
        else
        {
          echo"invalid ";
        }

    ?>