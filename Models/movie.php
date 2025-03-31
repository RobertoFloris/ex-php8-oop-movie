<?php
class Movie {
  private $title;
  private $author;
  private $yearPublication;
  private $url;
  private $description;
  private Genre $genre;

  use HasRating;

  function __construct($title, $author,  $yearPublication, $url, $description, Genre $genre){
    $this->title = $title;
    $this->author = $author;
    $this->yearPublication = $yearPublication;
    $this->url = $url;
    $this->description = $description;
    $this->genre = $genre;
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

  public function getDescription() {
    return $this->description;
  }

  public function setDescription($description) {
    $this->description = $description;
  }

  public function getGenreName(){
    return $this->genre->getName();
  }

}

?>