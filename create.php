<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Blog Formulaire</title>
</head>

<body>
    <?php
        include_once("header.php");
    ?>
    <form action="create_file.php" method="POST">
        <label for="title">Article title:</label>
        <input type="text" name="title">
        <label for="text">Text:</label>
        <textarea name="text" id="text" cols="30" rows="10"></textarea>
        <input type="submit">
    </form>
</body>

</html>