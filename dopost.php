
<?php
include('db.php');
echo "<h3>View posted data:</h3>";
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo "<hr>";
echo "<h3>View individual data:</h3>";
echo $_POST['fullname'] . "<br />";
echo $_POST['email'] . "<br />";
echo $_POST['address'] . "<br />";
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$sex = $_POST['sex'];
$intr1 = $_POST['intr1'];
$intr2 = $_POST['intr2'];
$address = $_POST['address'];
$provinces = $_POST['provinces'];
if (isset($_POST['submit'])) {
    $sql = "INSERT INTO register (fullname,email,sex,intr1,intr2,address,provinces) VALUES ('$fullname','$email','$sex','$intr1','$intr2','$address',$provinces)";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
<html>
<head>
<meta charset="utf-8">
<title>ผลการลงทะเบียน</title>

</head>
<body>
<br>
<button class="button" style="vertical-align:middle" name="info" onclick="linkto();"><span>Info</span></button>
<script>
    function linkto() {
        window.location='http://angsila.cs.buu.ac.th/~58160412/887371/lab07/show_register.php';
    }
</script>
</body>
</html>