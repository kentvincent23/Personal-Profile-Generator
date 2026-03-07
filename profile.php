<?php 
session_start();    
?>

<!DOCTYPE html>
<html lang = 'en'>
<title>Profile Generation</title>
<head> 
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
body{
    background-color: pink;
    padding-top: 50px;
}
form, h1 {
    padding-left: 50px;
    align-content: center;
    text-align: center;
   
}
.body{
    line-height: 35px;
    background-color: paleturquoise;
    font-family: Arial, Helvetica, sans-serif;
    margin-top:30px;
    border: solid 2px black;
    padding-top:20px;
    padding-bottom:20px;
    padding-left:5px;
    margin-left: 350px;
    margin-right: 350px;
    padding-bottom: 30px;
}
.submit-btn{
    background-color: hotpink;
    color: white;
    border: none;
    padding: 12px 25px;
    font-size: 16px;
    border-radius: 10px;
    cursor: pointer;
}
.submit-btn:hover{
    background-color: deeppink;
}
.ppf{
    align-content: center;
    text-align: center;
}
</style>
<body>
    <h1> - - PROFILE - - </h1>
<div class="body">
Name: <?php echo $_POST["fname"]; ?> <br>
Age: <?php echo $_POST["age"]; ?> <br>
Course: <?php echo $_POST["course"]; ?> <br>
Mail: <?php echo $_POST["mail"]; ?> <br>
Biography: <?php echo $_POST["bio"]; ?> <br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['gender'])) {
        $gender = $_POST['gender'];
        echo "Your gender is: " . htmlspecialchars($gender) . "<br>";
    } else {
        echo "No gender was selected.<br>";
    }
if (isset($_POST['hobbies']) && is_array($_POST['hobbies'])) {
        $interests = $_POST['hobbies'];
        echo "You selected the following interests: ";
        foreach ($interests as $interest) {
            echo htmlspecialchars($interest) . " ";
        }
        echo "<br>";
    } else {
        echo "You didn't select any of 5 hobbies.<br>";
    }
}
?>
 <div class="ppf">
<?php
if(isset($_FILES['ppf']) && $_FILES['ppf']['error'] == 0){

    $filename = $_FILES['ppf']['name'];
    $tempname = $_FILES['ppf']['tmp_name'];
    $folder = "uploads/" . $filename;

    // move uploaded file to uploads folder
    move_uploaded_file($tempname, $folder);

    echo "<h3>Profile Picture:</h3>";
    echo "<img src='$folder' width='200'>";
}
?>
</div>
</div>
<br>
<div class="submitbtn">
<form action="index.php" method="post">
  <button type="submit">Reset</button>
</form>
</div>

</body>
</html>