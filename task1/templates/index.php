<DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>table</title>
</head>
<body>
    <h1>hello world</h1>
    <form action="index.php" method="post" enctype="multipart/form-data">
    <input type="file" name="load">
    <input type="submit" name="send-request" value="upload">
    </form>
</body>
</html>
<?php 
    if (isset($_POST['send-request']))
    {
        move_uploaded_file($_FILES['load']['tmp_name'],
        '/usr/home/user8/public_html/MYPHP/upload/ '.$_FILES['load']['name']);
    }
?>
