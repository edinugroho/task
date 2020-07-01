<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Account Baru</title>
</head>
<body>
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <form action="/register" method="POST">
        @csrf
        <p>First Name:</p>
        <p><input type="text" name="first_name"></p>
        <p>Last Name:</p>
        <p><input type="text" name="last_name"></p>
        <p>Gender:</p>
        <input type="radio" name="gender">Male <br>
        <input type="radio" name="gender">Female <br>
        <input type="radio" name="gender">Other <br>
        <p>Nationality:</p>
        <select name="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="malaysian">Malaysian</option>
            <option value="singapore">Singapore</option>
            <option value="Australian">Australian</option>
        </select>
        <p>Language Spoken:</p>
        <input type="checkbox" value="bahasa_indonesia" name="bahasa_indonesia">Bahasa Indonesia <br>
        <input type="checkbox" value="english" name="english">English <br>
        <input type="checkbox" value="Other" name="Other">Other <br>
        <p>Bio:</p>
        <textarea name="bio" cols="30" rows="6"></textarea><br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>