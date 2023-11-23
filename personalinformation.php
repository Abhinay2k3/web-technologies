<!DOCTYPE html>
<html>
<head>
    <title>Personal Information Form</title>
</head>
<body>
    <h1>Personal Information Form</h1>
    <form action="process.php" method="POST">
        <label for="first_name">First Name:</label>
        <input type="text" name="first_name" id="first_name" required><br><br>

        <label for="last_name">Last Name:</label>
        <input type="text" name="last_name" id="last_name" required><br><br>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" name="gender" value="Male" id="gender-male" required>
        <label for="gender-male">Male</label>
        <input type="radio" name="gender" value="Female" id="gender-female" required>
        <label for="gender-female">Female</label><br><br>

        <label for="city">City:</label>
        <select name="city" id="city" required>
            <option value="Guntur">Guntur</option>
            <option value="Tenali">Tenali</option>
            <option value="Mangalagiri">Managalagiri</option>
            <option value="Vijayawada">Vijayawada</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>

Process.php:
<!DOCTYPE html>
<html>
<head>
    <title>Form Data Retrieval</title>
</head>
<body>
    <h1>Form Data Retrieval</h1>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];

        echo "<h2>Submitted Data (Using POST)</h2>";
        echo "First Name: $first_name<br>";
        echo "Last Name: $last_name<br>";
        echo "Email: $email<br>";
        echo "Gender: $gender<br>";
        echo "City: $city<br>";
    } else {
        echo "No data submitted.";
    }
    ?>
</body>
</html>
