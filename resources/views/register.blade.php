<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</head>
<body>
    <h1>Halaman Register</h1>
    <form action="/welcome" method="POST">
        @csrf
        <label for="first_name">Nama Depan:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">Nama Belakang:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html>
