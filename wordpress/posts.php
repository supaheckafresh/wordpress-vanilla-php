<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Posts!</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container">

        <div class="row">
            <h1 class="col-xs-12">Neil's Wordpress Blog</h1>
        </div>

        <?php foreach ($posts as $index => $post): ?>
        <!-- This post panel should repeat for each post. -->
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <?php if (!is_single_page()): ?>
                            <a href="index.php?id=<?php $post->get_id() ?>">
                                <?php $post->get_the_title('<h5>', '</h5>') ?>
                            </a>

                            <?php else: ?>
                            <?php $post->get_the_title('<h5>', '</h5>') ?>

                        <?php endif ?>

                    </div>
                    <div class="panel-body">
                        <?php $post->the_content() ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>

        <?php if (!has_posts($posts)): ?>
            <h3>No Posts Found</h3>
        <?php endif ?>

        <?php if (has_comments($post->id)): ?>

            <div class="panel-group">
                <?php foreach ($comments as $comment): ?>

                    <div class="panel panel-info">
                        <div class="panel-body" style="background-color: #bfffc1;"><?php echo $comment['comment'] ?>
                    </div>

                <?php endforeach ?>
            </div>

        <?php endif ?>

        <?php  if (is_single_page() && has_posts($posts)): ?>
            <?php include "comments.php"; ?>
        <?php endif ?>



    </div>

</body>
</html>