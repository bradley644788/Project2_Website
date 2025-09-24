<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body class="flex column">
        <?php
        include 'connectdb.php';

        $SQL = "SELECT * FROM posts";

        $result = $conn->query(query: $SQL);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<section class="card flex column">';
                echo '<header class="flex ai-base">';
                echo '<h2><a href="retrieve_post.php?id=' . $row['id'] . '">' . $row['title'] . '</a>' . '<span class="author">' . '' . $row['description'] . '</span>' . '</h2>';
                echo '</header>';
                echo '<hr>';
                echo '<p>' . $row['post_txt'] . '</p>';
                echo "</section>";
            }
        } else {
            echo "Sorry 0 Results Returned";
        }

        echo '<style>
        @import url("https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --dark-1: #1c1b22;
            --dark-2: hsl(from var(--dark-1) h s calc(l + 6));
            --dark-3: hsl(from var(--dark-2) h s calc(l + 6));
            --light-1: #f0f0f4;
            --light-2: hsl(from var(--light-1) h s calc(l + 8));
            --accent: springgreen;
        }

        body {
            max-width: 1280px;
            margin-inline: auto;
            padding: 20px;
            font-family: "Inter", sans-serif;
            font-size: 1.125rem;
            line-height: 1.6;
            background: var(--dark-1);
            color: var(--light-1);
        }

        :is(h1, h2) {
            color: var(--light-2);
        }

        a {
            color: var(--accent);
            text-decoration-thickness: 2px;

            &:not(:hover) {
                text-decoration: none;
            }
        }

        .flex {
            --space: 20px;
            display: flex;
            flex-flow: row wrap;
            gap: var(--space);

            &.column {
                flex-direction: column;
            }

            &.ai-base {
                align-items: baseline;
            }
        }

        img {
            height: 200px;
            width: 400px;
            object-fit: cover;
            display: block;
        }

        section.card {
            background:var(--dark-2);
            padding: 20px;
            border-radius: 10px;

            & hr {
                border: 1px solid var(--dark-3);
            }

            & .author {
                font-size: .75em;

                &::before {
                    content: "//";
                    margin-inline: 20px;
                    color: var(--dark-3);
                    font-weight: bold;
                    font-size: 1.125em;
                }
            }
        }
        ';
        ?>
    </body>
</html>