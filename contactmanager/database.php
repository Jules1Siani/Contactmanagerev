<?php
    session_start();
    $dsn = 'mysql:host=localhost;dbname=contact_manager';
    $username = 'root';
    $password = '38wYTc8k@p8PNxR';

    try{
        $db = new PDO($dsn, $username, $password); // creates the connection
    }
    catch (PDOException $e){
         $_SESSION["database_error"] = $e->getMessage();
         $url = "databasse_error.php";
         header("Location: " . $url);
         exit();
    }

?>