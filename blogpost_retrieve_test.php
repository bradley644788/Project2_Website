<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles/style.css">
        <title>Document</title>
    </head>

    <body>
        <?php
        include 'connectdb.php';

        $SQL = "SELECT * FROM posts";

        $result = $conn->query(query: $SQL);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<h2>" . $row['title'] . "</h2>";
                echo "<p>" . $row['post_txt'] . "</p>";
            }
        } else {
            echo "Sorry 0 Results Returned";
        }
        ?>
    </body>
</html>