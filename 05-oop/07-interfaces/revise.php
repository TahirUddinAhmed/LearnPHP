<?php
 interface ContentInterface {
    public function display();
    public function edit();
 }

 class Article implements ContentInterface {
    private $title;
    private $content;

    // construct 
    public function __construct($title, $content)
    {
        $this->title = $title;
        $this->content = $content;
    }

    public function display() {
        echo "<h2>{$this->title}</h2>";
        echo "<p>{$this->content}</p>";
    }

    public function edit() {
        echo "Editing the article {$this->title}";
    }
 }

 class Video implements ContentInterface {
    private $title;
    private $url;

    // constructor 
    public function __construct($title, $url)
    {
        $this->title = $title;
        $this->url = $url;
    }

    public function display()
    {
        echo "<h2>{$this->title}</h2>";
        echo "<iframe width='70%' height='450'
src='{$this->url}'>
</iframe>";
    }

    public function edit() {
        echo "Video {$this->title} is editing";
    }
 }

 $article01 = new Article("How to learn anything", "Content of the article");
 $video01 = new Video("Learn PHP for beginners", "https://www.youtube.com/embed/zZ6vybT1HQs?si=kwIGS34OFm4inbvB");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?php $article01->display(); ?>
    </div>
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <?php $video01->display(); ?>
    </div>
    
  </div>
</body>

</html>