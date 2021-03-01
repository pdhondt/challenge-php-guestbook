<?php
declare(strict_types=1);

class PostLoader
{
    public array $guestbookPosts;

    public function __construct()
    {
        $this->guestbookPosts = json_decode(file_get_contents('./data/guestbook.json'), true);
    }

    public function getGuestbookPosts()
    {
        foreach($this->guestbookPosts as $i => $post){
            $postsArray[] = $post;
        }
        return $postsArray;
    }
}



