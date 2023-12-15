<?php
$conn = mysqli_connect("localhost","root","", "crudwithimages"); //database

if(isset($_POST["submit"])){
	if($_POST["submit"] == "Register"){
		Register();
	}
	else if($_POST["submit"] == "edit"){
		edit();
	}
	else{
		delete();
	}
}

	function Register(){
	global $conn;
	$title_name = $_POST["title_name"];
	$name = $_POST["name"];
	$lastname = $_POST["lastname"];
	$gender = $_POST["gender"];
	$nation = $_POST["nation"];
	$id_card = $_POST["id_card"];
	$dob = $_POST["dob"];
	$age = $_POST["age"];
	$age_range = $_POST["age_range"];
	$med = $_POST["med"];
	$blood = $_POST["blood"];
	$tel = $_POST["tel"];
	$ems_con = $_POST["ems_con"];
	$ems_tel = $_POST["ems_tel"];
	$size_shirt = $_POST["size_shirt"];
	$address = $_POST["address"];
	$bib = $_POST["bib"];
	$fileName = $_FILES["file"]["name"];
	$tmpName = $_FILES["file"]["tmp_name"];

	$newfilename = uniqid() . "-" . $fileName;

	move_uploaded_file($tmpName, 'uploads/' .$newfilename);
	$query = "INSERT INTO users VALUES('', '$title_name', '$name', '$lastname', '$gender', '$nation', '$id_card', '$dob', '$age', '$age_range', '$med', '$blood', '$tel', '$ems_con', '$ems_tel', '$size_shirt', '$address', '$bib','$newfilename')";
	mysqli_query($conn, $query);

	echo
	"
	<script> alert('สมัครเข้าร่วมกิจกรรมเรียบร้อยแล้ว'); document.location.href = 'rikhai.html'; </script>
	";
	}


	function edit(){
		global $conn;


		$id = $_GET["id"];
		$title_name = $_POST["title_name"];
		$name = $_POST["name"];
		$lastname = $_POST["lastname"];
		$gender = $_POST["gender"];
		$nation = $_POST["nation"];
		$id_card = $_POST["id_card"];
		$dob = $_POST["dob"];
		$age = $_POST["age"];
		$age_range = $_POST["age_range"];
		$med = $_POST["med"];
		$blood = $_POST["blood"];
		$tel = $_POST["tel"];
		$ems_con = $_POST["ems_con"];
		$ems_tel = $_POST["ems_tel"];
		$size_shirt = $_POST["size_shirt"];
		$address = $_POST["address"];
		$bib = $_POST["bib"];

		if($_FILES["file"]["error"] != 4){
			$filename = $_FILES["file"]["name"];
			$tmpName = $_FILES["file"]["tmp_name"];

			$newfilename = uniqid() . "-" . $filename;

			move_uploaded_file($tmpName, 'uploads/' . $newfilename);
			$query = "UPDATE users SET image = '$newfilename' WHERE id = $id";
			mysqli_query($conn, $query);
		}
		
		$query = "UPDATE users SET title_name = '$title_name' , name = '$name' , lastname = '$lastname' , gender = '$gender' , nation = '$nation' , id_card = '$id_card'
		, dob = '$dob' , age = '$age' , age_range = '$age_range' , med = '$med' , blood = '$blood' , tel = '$tel' , ems_con = '$ems_con' , ems_tel = '$ems_tel'
		, size_shirt = '$size_shirt'  , address = '$address' , bib = '$bib'  WHERE id = $id";
		mysqli_query($conn, $query);
		echo
		"
		
		<script> alert('User Edited Successfully'); document.location.href = 'user_data.php'; </script>
		";
	}
	
	function delete(){
		global $conn;
	
		$id = $_POST["submit"];
	
		// JavaScript confirm dialog
		echo "
			<script>
				var confirmation = confirm('คุณต้องการลบข้อมูลนี้ใช่หรือไม่?');
				if(confirmation){
					// If user confirms, proceed with deletion
					window.location.href = 'delete_confirm.php?id=$id'; // Redirect to confirmation script
				} else {
					alert('การลบถูกยกเลิก');
				}
			</script>
		";
	}

	

