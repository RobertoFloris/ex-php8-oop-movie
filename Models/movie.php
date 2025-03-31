<?php
class Movie {
  private $title;
  private $author;
  private $yearPublication;
  private $url;

  function __construct($title, $author,  $yearPublication, $url){
    $this->title = $title;
    $this->author = $author;
    $this->yearPublication = $yearPublication;
    $this->url = $url;
  }

  public function getTitle() {
    return $this->title;
  }

  public function setTitle($title) {
    $this->title = $title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function setAuthor($author) {
    $this->author = $author;
  }

  public function getYearPublication() {
    return $this->yearPublication;
  }

  public function setYearPublication($yearPublication) {
    $this->yearPublication = $yearPublication;
  }

  public function getUrl() {
    return $this->url;
  }

  public function setUrl($url) {
    $this->url = $url;
  }
}

?>