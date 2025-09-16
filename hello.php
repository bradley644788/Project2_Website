<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <title>Blog</title>
    </head>

    <body>
        <h2>Method 1</h2>

        <?php
            echo "Hello World!";
        ?>

        <br>

        <h2>Method 2</h2>

        <?php
            $words = array("Hello", "World", "This", "Is", "A", "Test", "Script");

            foreach ($words as $word) {
                echo "$word | ";
            }
        ?>
    </body>
</html>