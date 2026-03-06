<!DOCTYPE html>
<html lang = 'en'>
<title>Profile Generator Website</title>
<head> 
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form action="profile.php" method="post" enctype="multipart/form-data">
        <label for="fname">Full Name:</label>
        <input type="text" id="fname" name="fname"> <br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age"> <br><br>
        <label for="course">Course/Program:</label>
        <input type="text" id="course" name="course"> <br><br>
        <label for="mail">E-mail Address:</label>
        <input type="email" id="mail" name="mail"> <br><br>
        
        <label for="gender">Gender:</label>
        <input type="radio" id="gender" name="gender" value="Male">
        <label for="male"> Male </label>
        <input type="radio" id="gender" name="gender" value="Female">
        <label for="female"> Female </label> <br>

        <h3>Hobbies: </h3>
        <input type="checkbox" id="hobbies1" name="hobbies1" value="gaming">
        <label for="gaming">Gaming</label>
        <input type="checkbox" id="hobbies2" name="hobbies2" value="reading">
        <label for="reading">Reading</label>
        <input type="checkbox" id="hobbies3" name="hobbies3" value="hiking">
        <label for="hiking">Hiking</label>
        <input type="checkbox" id="hobbies4" name="hobbies4" value="singing">
        <label for="singing">Singing</label>
        <input type="checkbox" id="hobbies5" name="hobbies5" value="dancing">
        <label for="dancing">Dancing</label>

        <h3>Profile Picture: </h3>
        <label for="ppf">Upload a profile picture:</label>
        <input type="file" id="ppf" name="ppf" accept="image/png, image/jpeg">
        <input type="submit" value="Upload">
        </form>

</body>
</html>
