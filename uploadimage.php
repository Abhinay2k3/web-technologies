<!DOCTYPE html>
<html>
<head>
    <title>Image Upload and Display</title>
    <style>
        body{
    background-image: url("https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6GzQl_PqdPQlSw2MlUyI4plP01B4xITVVYQ&usqp=CAU");   
    height: 100%;
     background-position: center;
     background-repeat: no-repeat;
     background-size: cover;
     border:10px solid black;
     border-radius:10px;
     
}
        </style>
</head>
<body>
    <h1>Upload and Display Image</h1>

    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" id="image" accept="image/*" required>
        <br>
        <input type="submit" name="upload" value="Upload">
    </form>

    <?php
    if (isset($_GET['image'])) {
        $image = $_GET['image'];
        echo "<h2>Uploaded Image</h2>";
        echo "<img src='images/$image' alt='Uploaded Image'>";
    }
    ?>
</body>
</html>

Upload.php
<?php
if (isset($_POST['upload'])) {
    if (isset($_FILES['image'])) {
        $file_name = $_FILES['image']['name'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $upload_folder = 'images/';

        if ($file_type == 'image/jpeg' || $file_type == 'image/png') {
            move_uploaded_file($file_tmp, $upload_folder . $file_name);
            header("Location: index.php?image=$file_name");
        } else {
            echo "Only JPEG and PNG images are allowed.";
        }
    }
}
?>
