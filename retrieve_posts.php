<?php
include 'connectdb.php';

$post_id = $_GET['id'];

$SQL = "SELECT title, post_txt FROM posts WHERE id = '$post_id'";

$result = $conn->query(query:$SQL);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo '<section>';
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<p>" . $row['post_txt'] . "</p>";
        echo "</section>";
    }
} else {
    echo "Sorry 0 Results Returned";
}
?>