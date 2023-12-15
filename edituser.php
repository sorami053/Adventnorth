<?php
require 'function.php';
$id = $_GET["id"];
$user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id = $id"));
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
     <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
			background: linear-gradient(to top left, purple, pink, lightblue); /* สร้าง linear gradient จากมุมขวาล่างไปมุมซ้ายบน *//* สร้าง linear gradient จากสีม่วงไปสีชมพูไปสีฟ้า */
            padding-top: 50px;
 
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px;
            margin: auto;
        }
        button[type="submit"] {
            width: 100%;
        }

		img {
        max-width: 100%; /* ทำให้รูปภาพไม่เกินขนาดของกล่อง */
        height: auto; /* รักษาอัตราส่วนของรูปภาพ */
    }
    </style>
</head>
<body>
<div class="container">
    <form class="" action="" method="post" enctype="multipart/form-data">
    <h2 class="mb-4">กรอกข้อมูลเพื่อสมัครเข้าร่วมกิจกรรม</h2>
    <div class="mb-3">
    <label for="title_name" class="form-label">คำนำหน้าชื่อ</label>
    <select class="form-select" id="title_name" name="title_name"  required>
                    <option value="" disabled selected>เลือกคำนำหน้าชื่อ</option>
                    <option value="เด็กชาย">เด็กชาย</option>
                    <option value="เด็กหญิง">เด็กหญิง</option>
                    <option value="นาย">นาย</option>
                    <option value="นางสาว">นางสาว</option>
                    <option value="นาง">นาง</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">ชื่อ</label>
                <input type="text" name="name" value= "<?php echo $user['name']; ?>" required> <br>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">นามสกุล</label>
                <input type="text" name="lastname" value= "<?php echo $user['lastname']; ?>" required> <br>
            </div>
            <div class="mb-3">
                <label for="gender" class="form-gender">เพศ</label>
                <select class="form-select" id="gender" name="gender" title="กรุณาเลือกเพศ" required>
                    <option value="" disabled selected >เลือกเพศ </option>
                    <option value="ชาย">ชาย</option>
                    <option value="หญิง">หญิง</option>
                    <option value="ไม่ระบุ">ไม่ระบุ</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="nation" class="form-label">สัญชาติ</label>
                <input type="text" name="nation" value= "<?php echo $user['nation']; ?>" required> <br>
            </div>
            <div class="mb-3">
            <label for="id_card" class="form-label">เลขบัตรประชาชน 13 หลัก</label>
				<input value= "<?php echo $user['id_card']; ?>" type="text" class="form-control" id="id_card" name="id_card" pattern="[0-9]{13}" maxlength="13" title="กรุณากรอกเลขบัตรประชาชน 13 หลัก" required>
			</div>
            <div class="mb-3">
			<label for="dob" class="form-label">วันเดือนปีเกิด</label>
			<input  class="form-control  type="date" name="dob" value= "<?php echo $user['dob']; ?>" required> 
			</div>
              <div class="mb-3">
                <label for="age" class="form-label">อายุ</label>
                <input class="form-control type="number" name="age" value= "<?php echo $user['age']; ?>"required> <br>
            </div>
            <div class="mb-3">
                <label for="age_range" class="form-label">ช่วงอายุ</label>
                <select class="form-select" id="age_range" name="age_range" title="กรุณาเลือกช่วงอายุ" required>
                    <option value="" disabled selected>เลือกช่วงอายุ</option>
                    <option value="5 - 8 ปี ">5 - 8 ปี</option>
                    <option value="8 - 10 ปี">8 - 10 ปี</option>
                    <option value="10 - 12 ปี">10 - 12 ปี</option>
					<option value="ผู้ปกครอง">ผู้ปกครอง</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="med" class="form-label">โรคประจำตัว</label>
                <input type="text" class="form-control" id="med" name="med" value= "<?php echo $user['med']; ?>" title="กรุณากรอกโรคประจำตัว" required>
            </div> 
            <div class="mb-3">
                <label for="blood" class="form-label">หมู่เลือด</label>
                <select class="form-select" id="blood" name="blood" required>
                    <option value="" disabled selected>เลือกหมู่เลือด</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="O">O</option>
					<option value="AB">AB</option>
                </select>
            </div>
            <div class="mb-3">
				<label for="tel" class="form-label">เบอร์โทร</label>
				<input type="text" class="form-control" id="tel" name="tel" pattern="[0-9]{10}" maxlength="10" value= "<?php echo $user['tel']; ?>" title="กรุณากรอกเบอร์โทร 10 หลัก" required>
			</div>
             <div class="mb-3">
                <label for="ems_con" class="form-label">ผู้ติดต่อฉุกเฉิน</label>
                <input type="text" class="form-control" id="ems_con" name="ems_con" value= "<?php echo $user['ems_con']; ?>"  required>
            </div>
             <div class="mb-3">
                <label for="ems_tel" class="form-label">เบอร์โทรผู้ติดต่อฉุกเฉิน</label>
                <input type="text" class="form-control" id="ems_tel" name="ems_tel" pattern="[0-9]{10}" maxlength="10" title="กรุณาเบอร์โทรผู้ติดต่อฉุกเฉิน 10 หลัก"  value= "<?php echo $user['ems_tel']; ?>" required>
            </div>           
            <div class="mb-3">
                <label for="size_shirt" class="form-label">ไซต์เสื้อ</label>
				<select class="form-select" id="size_shirt" name="size_shirt" title="กรุณาเลือกไซต์เสื้อ" required>
                    <option value="" disabled selected>เลือกไซต์เสื้อ</option>
					<option value="3XS">3XS - 32" x 24" </option>
                    <option value="2XS">2XS - 34" x 25"</option>
                    <option value="XS">XS - 36" x 26"</option>
                    <option value="S">S - 38" x 27"</option>
                    <option value="M">M - 40" x 28"</option>
                    <option value="L">L - 42" x 29"</option>
                    <option value="XL">XL - 44" x 30"</option>
                    <option value="2XL">2XL - 46" x 31"</option>
                    <option value="3XL">3XL - 48" x 32"</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">ที่อยู่</label>
                <input type="text" class="form-control" id="address" name="address" title="กรุณากรอกที่อยู่" value= "<?php echo $user['address']; ?>" required>
            </div>
            <div class="mb-3">
            <label for="bib" class="form-label">หมายเลขbib</label>
             <input type="text" name="bib" value= "<?php echo $user['bib']; ?>" required> <br>
            </div>
			<div class="mb-3 text-center">
            <label class="form-label">QR Code โอนเงิน</label>
            <img src="img/money.jpg" alt="QR Code Image" class="img-fluid mx-auto d-block" style="max-width: 500px; height: auto;">
        </div>
        <div class="mb-3">
        <label for="file" class="form-label">แนบหลักฐานการโอนเงิน</label>
         <input type="file" name="file" ><br>
         </div>
        <button type="submit" name="submit" value="edit">Edit</button>
    </form>
        <a href="user_data.php">Index Page</a>
        </div>
</body>
</html>