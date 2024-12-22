
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploads</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label for="fileToUpload">Choose a file:</label>
        <input type="file" name="fileToUpload" id="fileToUpload">
        <button type="submit">Upload</button>
    </form>

</body>
</html>