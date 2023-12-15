<?php 
require 'function.php';
$per_page = 10; // จำนวนข้อมูลต่อหน้า 
 

// หาจำนวนข้อมูลทั้งหมดในฐานข้อมูล
$total_results = mysqli_query($conn, "SELECT COUNT(*) AS total FROM users");
$total_row = mysqli_fetch_array($total_results);
$total_users = $total_row['total'];

// หาจำนวนหน้าทั้งหมด
$total_pages = ceil($total_users / $per_page);

// ตรวจสอบหน้าปัจจุบัน
$current_page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) {
    $current_page = 1;
}
if ($current_page > $total_pages) {
    $current_page = $total_pages;
}

// คำนวณ offset สำหรับ query
$offset = ($current_page - 1) * $per_page;

// query ข้อมูลแบ่งหน้า
$users = mysqli_query($conn, "SELECT * FROM users LIMIT $offset, $per_page");
?>
<!DOCTYPE html>
<html">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User infomation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* เพิ่มสไตล์ที่คุณต้องการที่นี่ */
        body {
            padding: 20px;
            background: linear-gradient(to left top, #aed9e0, #6f9eab); /* สีพื้นหลัง */
        }
        .table {
        font-size: 0.9rem; /* ลองปรับขนาดฟอนต์ของตาราง */
    }

    .table th,
    .table td {
        padding: 0.5rem; /* ปรับขนาดของพื้นที่รอบข้อความ */
        white-space: nowrap; /* ป้องกันข้อความตกบรรทัด */
    }

    /* สำหรับแสดงผลในทุกขนาดของอุปกรณ์ */
/* Mobile devices (portrait and landscape) */
@media only screen and (max-width: 767px) {
  /* Your CSS for mobile devices goes here */
}

/* Tablets and iPads (portrait and landscape) */
@media only screen and (min-width: 768px) and (max-width: 1024px) {
  /* Your CSS for tablets goes here */
}

/* Laptops, desktops and larger */
@media only screen and (min-width: 1025px) {
  /* Your CSS for larger screens goes here */
}

    
        
    </style>
</head>
<body>
    
<div class="container-fluid">
        <h1>ข้อมูลผู้สมัคร</h1>  <a href="adduser.php" class="btn btn-success mr-2 mb-2">เพิ่มผู้สมัครเอง (สำหรับ Admin)</a> <a href="search_result.php" class="btn btn-primary mr-2 mb-2">ค้นหาผู้สมัคร (สำหรับ Admin)</a> <a href="rikhai.html" class="btn btn-warning mr-2 mb-2">กลับหน้าหลัก</a>              
        <table class="table table-striped table-bordered">
        <thead>
    <tr>
    <th>#</th>
    <th>คำนำหน้าชื่อ</th>
    <th>ชื่อ</th>
    <th>นามสกุล</th>
    <td>เพศ</td>
    <td>สัญชาติ</td>
    <td>เลขปชช 13 หลัก</td>
    <td>วันเดือนปีเกิด</td>
    <td>อายุ</td>
    <td>ช่วงอายุ </td>
    <td>โรคประจำตัว</td>
    <td>หมู่เลือด</td>
    <td>เบอร์โทร</td>
    <td>ผู้ติดต่อฉุกเฉิน</td>
    <td>เบอร์โทรผู้ติดต่อฉุกเฉิน</td>
    <td>ไซต์เสื้อ</td>
    <td>ที่อยู่</td>
    <td>bib</td>
    <td>Image</td>
    <td>Action</td>
    </tr>
    </thead>
    <tbody>
    <?php 
  
    $i =1;
 
    foreach($users as $user) :
        
    ?>
    <tr>    
    <td> <?php echo ++$offset ?> </td>                   <!-- ลำดับ !-->
    <td> <?php echo $user["title_name"]; ?> </td>   <!-- คำนำหน้าชื่อ !-->
    <td> <?php echo $user["name"]; ?> </td>         <!-- ชื่อ       !-->
    <td> <?php echo $user["lastname"]; ?> </td>     <!-- นามสกุล !-->
    <td> <?php echo $user["gender"]; ?> </td>       <!-- เพศ !-->
    <td> <?php echo $user["nation"]; ?> </td>       <!-- สัญชาติ !-->
    <td> <?php echo $user["id_card"]; ?> </td>      <!-- เลขปชช 13 หลัก !-->
    <td> <?php echo $user["dob"]; ?> </td>          <!-- วันเดือนปีเกิด !-->
    <td> <?php echo $user["age"]; ?> </td>          <!-- อายุ !-->
    <td> <?php echo $user["age_range"]; ?> </td>    <!-- ช่วงอายุ ในอนาคตสามารถเปลี่ยนเป็นประเภทของระยะการวิ่งได้ !-->
    <td> <?php echo $user["med"]; ?> </td>          <!-- โรคประจำตัว !-->
    <td> <?php echo $user["blood"]; ?> </td>        <!-- หมู่เลือด !-->
    <td> <?php echo $user["tel"]; ?> </td>          <!-- เบอร์โทร !-->
    <td> <?php echo $user["ems_con"]; ?> </td>      <!-- ผู้ติดต่อฉุกเฉิน !-->
    <td> <?php echo $user["ems_tel"]; ?> </td>      <!-- เบอร์โทรผู้ติดต่อฉุกเฉิน !-->
    <td> <?php echo $user["size_shirt"]; ?> </td>   <!-- ไซต์เสื้อ !-->
    <td> <?php echo $user["address"]; ?> </td>      <!-- ที่อยู่ !--> 
    <td> <?php echo $user["bib"]; ?> </td>          <!-- bib !--> 

    <td> <img src="uploads/<?php echo $user["image"]; ?>" width= "50"> </td>   <!-- รูปแนบสลิปโอนเงิน !-->
    <td>
    <a href="edituser.php?id=<?php echo $user['id']; ?>" class="btn btn-primary mr-2 mb-2">Edit</a>

<form class="" action="" method="post">
    <button type="submit" name="submit" value= <?php echo $user['id']; ?> class="btn btn-danger mb-2">Delete</button>
</form>

        </form>
    </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>   
<!-- สร้างปุ่มเปลี่ยนหน้า -->
<div class="d-flex justify-content-center mt-4">
    <nav aria-label="Page navigation">
        <ul class="pagination">
            <?php for ($page = 1; $page <= $total_pages; $page++) : ?>
                <li class="page-item <?php if ($current_page === $page) echo 'active'; ?>">
                    <a class="page-link" href="index.php?page=<?= $page; ?>"><?= $page; ?></a>
                </li>
            <?php endfor; ?>
        </ul>
    </nav>
</div>

    
    
   
</div>
</body>
</html>