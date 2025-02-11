<?php
include 'connect.php';
session_start();
if ($_SESSION['log'] == '') {
    header("location:sindex.php");
    exit;
}
include 'header.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['gender']) && isset($_POST['dob']) && isset($_POST['phone'])) {
       
        $_SESSION['name'] = $_POST['name'];
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['Gender'] = $_POST['gender'];
        $_SESSION['dob'] = $_POST['dob'];
        $_SESSION['phone'] = $_POST['phone'];

        ?>
        <script>
            window.location.href = 'myprofile.php';
        </script>
        <?php
        exit;
    } else {
       
        echo "กรุณากรอกข้อมูลให้ครบทุกช่อง";
    }
}
?>
<head>
    <style>
      *{
        font-weight:300;
      }
.table {
    width: 90%;
    margin: 0 auto;
    border-collapse: collapse;
}

.table th, .table td {
    padding: 10px;
    border: 1px solid #ddd;
}

.table th {
   font-size:20px;
   font-weight:400;
    text-align: left    ;
    background-color: #f2f2f2;
}

/* CSS for form */
form {
    text-align: center;
    margin-top: 20px;
}

/* CSS for submit button */
input[type="submit"] {
    padding: 10px 20px;
    background-color: #333;
    color: white;
    border: none;
    border-radius: 4px;
    width: auto;
    cursor: pointer;
    font-size: 16px;
}

input[type="submit"]:hover {
    background-color: gray;
}

/* CSS for centering the form */
h2 {
    text-align: center;
}

    </style>
</head>
<h2><center><img src="https://img.icons8.com/dusk/50/000000/edit-user-male.png"/><b>แก้ไขข้อมูลโปรไฟล์ผู้ใช้</b></center></h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <table class="table table-striped">
        <tr>
            <th>ชื่อ</th>
            <td><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
        </tr>
        <tr>
            <th>อีเมล์</th>
            <td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"></td>
        </tr>
        <tr>
            <th>เพศ</th>
            <td>
                <select name="gender">
                    <option value="Male" <?php if($_SESSION['Gender'] == 'Male') echo 'selected'; ?>>ชาย</option>
                    <option value="Female" <?php if($_SESSION['Gender'] == 'Female') echo 'selected'; ?>>หญิง</option>
                    <option value="Other" <?php if($_SESSION['Gender'] == 'Other') echo 'selected'; ?>>อื่นๆ</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>วันเกิด</th>
            <td><input type="date" name="dob" value="<?php echo $_SESSION['dob']; ?>"></td>
        </tr>
        <tr>
            <th>เบอร์โทร</th>
            <td><input type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align:center;"><input type="submit" value="บันทึก"></td>
        </tr>
    </table>
</form>


