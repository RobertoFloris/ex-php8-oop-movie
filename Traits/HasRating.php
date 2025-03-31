<?php 
trait HasRating{
  private $rating;

  public function getRating(){
    return $this->rating;
  }

  public function setRating($rating){
    $this->rating = $rating;
  }
}
?>