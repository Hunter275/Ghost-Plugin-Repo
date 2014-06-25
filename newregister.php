<?php 
require("common.php"); 
    if(empty($_SESSION['user'])) 
    { 
      
    } 
    else {
      header("Location: index.php");
    }
    require("common.php"); 
    if(!empty($_POST)) 
    { 
        if(empty($_POST['username'])) 
        { 
            die("Please enter a username."); 
        } 
        if(empty($_POST['password'])) 
        { 
            die("Please enter a password."); 
        } 
        if($_POST['email'] !== $_POST['email2']) 
        { 
            die("Emails do not match."); 
        } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { 
            //die("Invalid E-Mail Address"); 
        } 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( 
            ':username' => $_POST['username'] 
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 

            die("Failed to run query: " . $ex->getMessage()); 
        } 
        $row = $stmt->fetch(); 
        if($row) 
        { 
            header("Location: register.php?failed=Yes");
            die("This username is already in use"); 
        } 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
         
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        $row = $stmt->fetch(); 
         
        if($row) 
        { 
            header("Location: register.php?failed=Yes");
            die("This email address is already registered"); 
        } 
        $query = " 
            INSERT INTO users ( 
                username, 
                password,
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++) 
        { 
            $password = hash('sha256', $password . $salt); 
        } 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'],
        ); 
         
        try 
        { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex) 
        { 
            die("Failed to run query: " . $ex->getMessage()); 
        } 
         
        header("Location: signin.php"); 
         
        //die("Redirecting to login.php"); 
    } 
     
?> 