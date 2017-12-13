<?php
class Article{
    private $name = '';
    private static $countArticles = 0;

    public function __construct($name){
        $this->name = $name;
        ++static::$countArticles;
    }

    public function getArticleInfo(){
        return "Article: " . $this->name . "<br> Article count: " . static::$countArticles;
    }
}
?>