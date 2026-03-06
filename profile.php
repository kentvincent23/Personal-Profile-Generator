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
<body>
    <h1> - - PROFILE - - </h1>

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

<form action="index.php" method="post">
  <button type="submit">Reset Creation</button>
</form>

</body>
</html>