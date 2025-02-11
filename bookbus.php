<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';
?>


<head>
  <style>
 
  
  body {
    font-family: "Noto Sans Thai", sans-serif;
    background-color: #f8f9fa;
  }

  .container {
    
 
    background-color: #fff;
    padding: 50px 10px;
    border-radius: 5px;
    border: 2px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  form{
   width: 600px;
   margin:auto;
   color:black;
  }

  .form-control{
   height:50px;
   font-size:20px;
   color:black;
  }

  h1 {
    text-align: center;
    color: #333;
    margin-bottom: 30px;
  }

  .form-group {
    margin-bottom: 20px;
  }


  label {
    font-size:20px;
    display:flex;
    font-weight: bold;
    margin-bottom: 5px;
  }

  select,
  option,
  input[type="number"] {
    width: 100%;
    padding: 14px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    color:black;
    font-weight:400;
    
  }

  .button {
    background-color:rgb(240, 192, 2);
    color: white;
    padding: 15px 30px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    color:#fff;
    font-size:22px;
    margin-right:50px;
    font-weight:500;
  }

  .button:hover {
    background-color:  #2d2d30;
  }

  @media (max-width: 576px) {
    .container {
      padding: 15px;
    }
  }
</style>
   

</head>
<body>
  <h1><img src="https://img.icons8.com/bubbles/80/000000/bus.png" alt="Bus Icon" /> จองตั๋วรถบัส &nbsp <img src="https://img.icons8.com/officel/54/000000/road.png" alt="Road Icon" /></h1>
  <div class="container">
    <form method="post" action="busaction.php" align="center">
      <section id="form" class="formborder">
        <div class="container2">
          <div class="form-row row justify-content-around" name="source">
            <div class="form-group col-md-5" name="source">
              <label for="inputEmail4">สถานีต้นทาง :</label>
              <select id="inputState" class="form-control" name="source">
                <option>หาดใหญ่</option>
              </select>
            </div>
            <div class="form-group col-md-5" name="dest">
              <label for="inputPassword4"> สถานีปลายทาง :</label>
              <select id="inputState" class="form-control" name="dest">
                <option>กระบี่</option>
                <option>ชุมพร</option>
                <option>ตรัง</option>
                <option>นครศรีธรรมราช</option>
                <option>นราธิวาส</option>
                <option>ปัตตานี</option>
                <option>พังงา</option>
                <option>พัทลุง</option>
                <option>ภูเก็ต</option>
                <option>ยะลา</option>
                <option>ระนอง</option>
                <option>สงขลา</option>
                <option>สตูล</option>
                <option>สุราษฎ์ธานี</option>
              </select>
            </div>
          </div>
          <div class="form-row row justify-content-around">
            <div class="form-group col-md-5">
              <label for="inputState">จำนวนผู้โดยสาร:</label>
              <input type="number" class="form-control" name="number" required min="1" max="5">
            </div>
          </div>
          <div class="form-row justify-content-center">
            <button type="submit" class="button" name="login_submit">ดำเนินการ</button>
          </div>
        </div>
      </section>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <?php include 'footer.php'; ?>
</body>

 
</html>