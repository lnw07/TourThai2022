<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Image Slider</title>
    
    <link rel="stylesheet" href="home.css">
  </head>
  <body style="background-image: url('pm.jpg');">
    <div>
        <div>
        <?php
        include('navbar.php');
    ?>
        </div>
        <div><br><br><br><br><br><br><br>
        <?php
        include('sl1.php');
    ?>
        </div>
        <div>
            <tr>
                <th>
                <br><br><td><select name="ภูมิภาค" id="select">
                        <option value="0">กรุณาเลือกภูมิภาค</option>
                        <option value="1">ภาคเหนือ</option>
                        <option value="2">ภาคกลาง</option>
                        <option value="3">ภาคใต้</option>
                        <option value="4">ภาคตะวันออก</option>
                        <option value="5">ภาคตะวันออกเฉียงเหนือ</option>
                        <option value="6">ภาคตะวันตก</option>
                    </select></td>
                    <td>
                        <input type="text" name="code" placeholder="รหัสทัวร์">
                    </td>
                    <td>
                    <label for="birthday">วันที่เริ่มเดินทาง:</label>
                    <input type="date" id="birthday" name="birthday">
                    <label for="birthday">วันทีกลับ:</label>
                    <input type="date" id="day" name="day">
                    </td>
                </th>
            </tr>
        </div>
        <div>
            <center>
            <br><br><h2>โปรโมชั่น<h2>
            </center>
        </div>
    </div>


   
  </body>
</html>
