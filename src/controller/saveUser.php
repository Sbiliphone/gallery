<?php


    global $db;
     $username=$_REQUEST['username'];
     $password1=md5($_REQUEST['password1']);
     $password2=md5($_REQUEST['password2']);
     $firstname=$_REQUEST['firstname'];
     $lastname=$_REQUEST['lastname'];
     $email=$_REQUEST['email'];
     $role=$_REQUEST['roles']; 

     if($role=='false'){
        $role=0;
     }else{
         $role=1;
     }

     if($password1==$password2){
        $sql="INSERT INTO app_user (username, password, isAdmin, email, name, lastname) VALUES ('$username', '$password2', '$role', '$email', '$firstname', '$lastname')";
        $rs = $db->execute($sql);
     }

     header('Location:index.php?action=users-list');
     
?>