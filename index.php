<!DOCTYPE html>
<html lang = 'en'>
<title>Profile Generator Website</title>
<head> 
    <meta charset = 'UTF-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1> Kent's Profile Generator!</h1>
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
        <input type="radio" id="Male" name="gender" value="Male">
        <label for="male"> Male </label>
        <input type="radio" id="Female" name="gender" value="Female">
        <label for="female"> Female </label> <br>

        <h3>Hobbies: </h3>
        <input type="checkbox" id="gaming" name="hobbies[]" value="Gaming">
        <label for="gaming">Gaming</label>
        <input type="checkbox" id="reading" name="hobbies[]" value="Reading">
        <label for="reading">Reading</label>
        <input type="checkbox" id="hiking" name="hobbies[]" value="Hiking">
        <label for="hiking">Hiking</label>
        <input type="checkbox" id="singing" name="hobbies[]" value="Singing">
        <label for="singing">Singing</label> 
        <input type="checkbox" id="dancing" name="hobbies[]" value="Dancing">
        <label for="dancing">Dancing</label> <br>


        <label for="bio"><h3>Short biography</h3></label>
        <textarea id="bio" name="bio" rows="4" cols="50"> Add your biography here! (erase this text)</textarea> 

        <h3>Profile Picture: </h3>
        <label for="ppf">Upload a profile picture:</label>
        <input type="file" id="ppf" name="ppf"> <br>
        <input type="submit" value="Upload" name="submit">
        </form>

</body>
</html>
