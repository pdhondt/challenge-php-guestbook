<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require './classes/Post.php';
require './classes/PostLoader.php';

//header('Content-Type: application/json');


$currentGuestbook = new PostLoader();
//echo gettype($currentGuestbook) . PHP_EOL;
//var_dump($currentGuestbook);
//var_dump($currentGuestbook->guestbookPosts);
//echo $currentGuestbook->guestbookPosts[0]['content'];
$currentGuestbookArray = $currentGuestbook->getGuestbookPosts();
//var_dump($currentGuestbookArray);
//var_dump($currentGuestbookArray[0]['date']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $new_post = new Post(htmlspecialchars($_POST['title']), htmlspecialchars($_POST['date']), htmlspecialchars($_POST['content']),
        htmlspecialchars($_POST['author']));

    //echo $new_post->getTitle();
    //echo $new_post->getDate();
    //echo $new_post->getContent();
    //echo $new_post->getAuthor();

    $new_post_array = $new_post->getProperties();
    //var_dump($new_post_array);

    $currentGuestbookArray[] = $new_post_array;

    //var_dump($currentGuestbookArray);

    $json = json_encode($currentGuestbookArray, JSON_PRETTY_PRINT);
    file_put_contents('./data/guestbook.json', $json);

    //$updatedGuestbook = new PostLoader();
    //$updatedGuestbookArray = $updatedGuestbook->getGuestbookPosts();
    //var_dump($updatedGuestbookArray);




}







require './templates/homepage.php';
