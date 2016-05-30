<?php include("database.php"); ?>
   <?php session_start(); ?>
   <?php
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = $_POST['username'];
      $mypassword = $_POST['password'];
      
      $sql = "SELECT * FROM USERS WHERE STU_ID = '$myusername' and USER_PWD = '$mypassword'";
      $result = $db->query($sql);
      $row=$result->fetch_assoc();
      $id=$row['STU_ID'];
      if($result->num_rows>0) {

         
      }else {
         echo "Your Login Name or Password is invalid";

        }
      if($row['ROLE'] =='student')
      
         header("location:../main.php?id=$id");
      
      else if($row['ROLE']=='admin'){
         header("location:../admin.php");
   
     }

  }


?>