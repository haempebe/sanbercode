<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="">
        <label for="fname">First name:</label><br><br>
        <input type="text" id="fname"><br><br>
        <label for="lname">Last name:</label><br><br>
        <input type="text" id="lname"><br><br>
        <label for="gender">Gender:</label><br><br>
        <input type="radio" name="gender" id="male" value="male">
        <label for="male">male</label><br>
        <input type="radio" name="gender" id="female" value="female">
        <label for="female">female</label><br>
        <input type="radio" name="gender" id="hide" value="hide">
        <label for="hide">hide</label><br><br>
        <label for="nationality">Nationality:</label><br><br>
        <select name="nationality" id="nationality">
            <option value="english">English</option>
            <option value="indonesia">Indonesia</option>
        </select><br><br>
        <label for="lang">language used:</label><br><br>
        <input type="checkbox" name="lang" id="lang1">
        <label for="lang1">Bahasa Indonesia</label><br>
        <input type="checkbox" name="lang" id="lang2">
        <label for="lang2">English</label><br>
        <input type="checkbox" name="lang" id="lang3">
        <label for="lang3">Other</label><br><br>
        <label for="bio">Bio:</label><br><br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
        <button type="submit"><a href="{{route('welcome')}}">Sign Up</a></button>
    </form>
</body>
</html>
