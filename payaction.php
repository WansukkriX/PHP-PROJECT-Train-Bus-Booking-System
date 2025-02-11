<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
}

$name = $_POST['name'];
$thaiID = $_POST['cno'];
$Pin = $_POST['Pin'];


$target_dir = "photo/"; 
$target_file = $target_dir . basename($_FILES["bank_slip"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";

} else {
    if (move_uploaded_file($_FILES["bank_slip"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["bank_slip"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$sql_transactions = "INSERT INTO transactions(email, source, dest, Name, Class, Type, NoOfpass, thaiID, pin, Amt, Route, bank_slip) VALUES ('".$_SESSION['email']."','".$_SESSION['source']."','".$_SESSION['dest']."','" . $_SESSION['name'] . "','".$_SESSION['Class']."' ,'".$_SESSION['Type']."','".$_SESSION['NoOfpass']."','$thaiID', '$Pin', '".$_SESSION['final']."','".$_SESSION['Route']."', '$target_file')";

if(mysqli_query($connect, $sql_transactions)) {
    echo "<h1><center>จองตั๋วสำเร็จแล้ว<center></h1><br>";
} else {
    echo "Error: " . $sql_transactions . "<br>" . mysqli_error($connect);
}

header("location: bookdone.php");
?>
<?php include 'footer.php'; ?>
