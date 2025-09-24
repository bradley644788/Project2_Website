<?php
$form_html = '
    <form action="submit.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <input type="submit" value="Submit">
    </form>
';

//example of escaping quotes in a string
$form = "<form action=\"\"></form>";

echo $form_html;
?>