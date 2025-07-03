<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
    <?php 
    echo "<br> <br>";
    if($_FILES["fileToUpload"]){
        $path = $_FILES["fileToUpload"]["name"];
        echo "File Name: " . $path . "<br>";
        $upload_path = "./Upload/". $path;
        echo "File Path: " . $upload_path . "<br>";
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $upload_path) || die("File upload failed");
    }

    ?>
</body>
</html>