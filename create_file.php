<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create article</title>
</head>
<body>
    <?php
        $title = htmlspecialchars($_POST['title']);
        $text = htmlspecialchars($_POST['text']);

        if (!isset($title) && !isset($text)) {
            $file = fopen("$title.txt", "w");
            fwrite($file, $text);
        }
    ?>
</body>
</html>