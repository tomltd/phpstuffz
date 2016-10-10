<?php require('partials/header.php'); ?>


    <h1>Hello</h1>
    <ul>
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php if ($task->completed) : ?>
                    <strike><?= $task->description; ?></strike>
                <?php else: ?>
                    <?= $task->description; ?>
                <?php endif; ?>
            </li>
        <?php endforeach; ?>

    </ul>

<?php

class Post
{
    public $title;
    public $published;

    public function __construct($title, $published)

    {
        $this->title = $title;
        $this->published = $published;
    }
}

$posts = [
        new Post('My First Post', true),
        new Post('My Second Post', true),
        new Post('My Third Post', true),
        new Post('My Fourth Post', false),

    ];

    $modified = array_map(function($post) {
        $post->published = true;
        return $post;
    }, $posts);

var_dump($modified);

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




?>

    <?php require('partials/footer.php'); ?>
