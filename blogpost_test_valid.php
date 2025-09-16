<?php
    // Test blog post with valid HTML tags
    // $blogPost = "<h2>Article Title: Test Blog</h2>This is a test blog post with <b>bold text</b> and <i>italic text</i>.";

    // $blogpost = $_POST['blogpost'];
    // $sanitizedPost = htmlentities(string: $blogpost)

    $title = $_POST['title'];
    $content = $_POST['post_txt'];

    echo $title;
?>
<br>
<?php
    echo $content;
?>
