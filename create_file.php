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
        if (!is_dir("source")) {
            mkdir("source", 0777) or die("Unable to create folder");
        }
        if (is_dir("source") && isset($title) && isset($text) && $title != "") {
            $file = fopen("source/$title.txt", "w") or die("Unable to open file!");
            fwrite($file, $text);
            fclose($file);
        }
    ?>
</body>
</html>