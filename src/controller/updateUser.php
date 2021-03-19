<?php
    global $db;
    $username=$_REQUEST['username'];
    $firstname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $role=$_REQUEST['roles']; 
    $id=$_REQUEST['id'];

    if($role=='false'){
       $role=0;
    }else{
        $role=1;
    }
       $sql="UPDATE app_user SET email= '$email', name='$firstname', lastname='$lastname', isAdmin='$role' WHERE id='$id';";
       $rs = $db->execute($sql);

    header('Location:index.php?action=users-list');
?>