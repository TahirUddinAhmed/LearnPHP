<?php

class Article {
    public $title;
    public $content;
    private $published = false;

    public function __construct($title, $content)
    {   
        $this->title = $title;
        $this->content = $content;
    }

    public function publish() {
        $this->published = true;
    }

    public function isPublished() {
        return $this->published;
    }

}

$article1 = new Article('How to earn Money', 'Content 1');
$article2 = new Article('How to Learn code', 'Content 2');

$article1->publish();

var_dump($article1->isPublished()); 
echo "<br>";
var_dump($article2->isPublished()); 