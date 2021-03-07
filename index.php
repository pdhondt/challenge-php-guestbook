<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './classes/Post.php';
require './classes/PostLoader.php';

$currentGuestbook = new PostLoader();

$currentGuestbookArray = $currentGuestbook->getGuestbookPosts();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $new_post = new Post(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['date']), htmlspecialchars($_POST['content']),
        htmlspecialchars($_POST['author']));

    $new_post_array = $new_post->getProperties();

    $currentGuestbookArray[] = $new_post_array;

    $json = json_encode($currentGuestbookArray, JSON_PRETTY_PRINT);
    file_put_contents('./data/guestbook.json', $json);

}

require './templates/homepage.php';
