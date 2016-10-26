<?php require('partials/header.php'); ?>

<h1>Home Page</h1>

    <!-- <ul>
        <?php foreach ($users as $user) : ?>

            <li><?= $user->name; ?></li>

        <?php endforeach; ?>
    </ul>

    <h1>Submit Your Name</h1>

    <form method="POST" action="/names">

        <input name="name"></input>

        <button type="submit">Submit</button>

    </form>
 -->










    <!-- <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

    </ul> -->

<!--
//     $modified = array_map(function($post) {
//         $post->published = true;
//         return $post;
//     }, $posts);
//
// var_dump($modified);

//var_dump($posts);

// $unpublishedPosts = array_filter($posts, function($post) {
//     return ! $post->published;
// });
//
// var_dump($unpublishedPosts);
//
// $publishedPosts = array_filter($posts, function($post) {
//     return $post->published;
// });

// var_dump($publishedPosts);
-->


    <?php require('partials/footer.php'); ?>
