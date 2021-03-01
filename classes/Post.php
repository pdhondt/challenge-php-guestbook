<?php
declare(strict_types=1);



class Post
{
    private string $title;
    private string $date;
    private string $content;
    private string $author_name;

    public function __construct($title, $date, $content, $author_name)
    {
        $this->title = $title;
        $this->date = $date;
        $this->content = $content;
        $this->author_name = $author_name;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getAuthor(): string
    {
        return $this->author_name;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getProperties(): array
    {
        return array(
            'title' => $this->getTitle(),
            'date' => $this->getDate(),
            'content' => $this->getContent(),
            'author_name' => $this->getAuthor()
            );
    }
}