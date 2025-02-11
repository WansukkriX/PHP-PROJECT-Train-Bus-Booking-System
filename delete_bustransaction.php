<?php

include 'connect.php';


session_start();


if ($_SESSION['log'] == '') {
    header("location:sindex.php"); 
}


if(isset($_POST['bustransaction_id'])) {
    $bustransaction_id = $_POST['bustransaction_id'];

   
    $sql_delete = "DELETE FROM `bustransactions` WHERE `T_No.` = '$bustransaction_id' AND `email`='" . $_SESSION['email'] . "'";

  
    if($connect->query($sql_delete) === TRUE) {
       
        header("Location: busbookings.php");
        exit();
    } else {
      
        echo "Error: " . $sql_delete . "<br>" . $connect->error;
    }
} else {
  
    echo "Transaction ID not provided.";
}


$connect->close();
?>
