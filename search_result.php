<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาด้วยเลขบัตรประชาชน</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">ค้นหาด้วยเลขบัตรประชาชน</h2>
        <form action="" method="GET">
            <div class="mb-3">
                <label for="id_card" class="form-label">เลขบัตรประชาชน:</label>
                <input type="text" class="form-control" id="id_card" name="id_card">
            </div>
            <button type="submit" class="btn btn-primary">ค้นหา</button>
        </form>
        <?php
        if(isset($_GET['id_card'])) {
            $id_card = $_GET['id_card'];
            $conn = mysqli_connect("localhost","root","", "crudwithimages");
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
            $query = "SELECT * FROM users WHERE id_card = '$id_card'";
            $result = mysqli_query($conn, $query);
            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="card mt-4">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row["title_name"]; ?> <?php echo $row["name"]; ?> <?php echo $row["lastname"]; ?></h5>
                            <p class="card-text">เลขบัตรประชาชน: <?php echo $row["id_card"]; ?></p>
                            <p class="card-text">หมายเลข bib: <?php echo $row["bib"]; ?></p>
                        </div>
                    </div>
        <?php
                }
            } else {
                echo "<p class='mt-4 text-danger'>ไม่พบข้อมูลสำหรับเลขบัตรประชาชน: $id_card</p>";
            }
            mysqli_close($conn);
        }
        ?>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
