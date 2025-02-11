<?php
include 'connect.php';
// include 'head2.php';
?>
<html>

<head>
     <link rel='stylesheet' href='index.css'>
     <title>Mh-Ticket</title>
</head>


<body>
     <div class="form">
     <div>
     <center><img src="https://img.icons8.com/bubbles/300/000000/user.png" /></center>
</div>

<h2>
     <center><b>เข้าสู่ระบบผู้ใช้งาน</center></b>
</h2>
     <form method='post' action='authenticate.php'>
          <div class="input">
               <table align="center" class="table">
                    <tr>
                         <td>
                              <h2><b>อีเมล์: </b></h2>
                         </td>
                         <td><input type="email" name="email" maxlength='50'></td>
                    </tr>
                    <tr>
                         <td>
                              <h2><b> รหัสผ่าน: </b></h2>
                         </td>
                         <td><input type="password" name="password" maxlength='50'></td>
                         </td>
                    </tr>
                    <tr>
                         <td colspan='2'>
                              <center><button type='Submit' style="background-color:black; border-color:black"
                                        name='login_submit'><b>เข้าสู่ระบบ </b> </button></center>
                         </td>
                    </tr>
               </table>
          </div>
          <div align="center">
               <h3><a href='register.php' style="color: black"><b>ลงทะเบียน</b></a></h3>
               <br>

          </div>

          </table>
          
     </form>
    
     </div>
     <center>
          <h3><a href='adminindex.php' style="color: black"><b>เข้าสู่ระบบแอดมิน ?</b></a></h3>
     </center>

</body >



</html>