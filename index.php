<?php include 'header.php'; ?>

<div id="blog" class="blog">
    <?php
        // Include the file responsible for reading in blog posts
        include './plugins/Markdown/Parsedown.php';
        $files = glob("./blog-posts/*.md");
        $Parsedown = new Parsedown();
        // For each blog post file, print out the blog post on the website
        foreach($files as $file){
            echo "<div class='blog-item'>";
                $text = file_get_contents($file);
                echo Parsedown::instance()
                   ->setBreaksEnabled(true)
                   ->text($text);
            echo "<hr/></div class='blog-item'>";
        }
    ?>
</div>

<?php include 'footer.php'; ?>
