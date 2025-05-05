<?php


include_once('config1.php');


if(isset($_POST['submit']))
{


    
    $name = $_POST['name'];
    $password = $_POST['passwords'];
    
    



        $sql = "INSERT INTO loginform(name,passwords) VALUES ( :name, :passwords)";


        $insertSql = $conn->prepare($sql);


       
        $insertSql->bindParam(':name', $name);
        $insertSql->bindParam(':passwords' , $password);
        
       $insertSql->execute();


        echo "The user has been added successfully";




}

?>