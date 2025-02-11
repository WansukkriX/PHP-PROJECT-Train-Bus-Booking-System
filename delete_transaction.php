<?php

include 'connect.php';


session_start();

if ($_SESSION['log'] == '') {
    header("location:sindex.php"); 
}


if(isset($_POST['transaction_id'])) {
    $transaction_id = $_POST['transaction_id'];

 
    $sql_delete = "DELETE FROM `transactions` WHERE `T_No.` = '$transaction_id' AND `email`='" . $_SESSION['email'] . "'";


    if($connect->query($sql_delete) === TRUE) {
       
        header("Location: trainbookings.php");
        exit();
    } else {
       
        echo "Error: " . $sql_delete . "<br>" . $connect->error;
    }
} else {
    
    echo "Transaction ID not provided.";
}


$connect->close();
?>
