<?php
  class Paint
  {
    private $imgName;
    private $title;
    private $artist;
    private $year;
    private $genre;
    private $paintID;
    public static $id = 100;

    function __construct($imgName, $title, $artist, $year, $genre)
    {
      $this->imgName = $imgName;
      $this->title = $title;
      $this->artist = $artist;
      $this->year = $year;
      $this->genre = $genre;
      $this->paintID = self::$id;
      self::$id++;
    }

    //Getter functions
    public function getImgName() { return $this->imgName; }
    public function getTitle()   { return $this->title; }
    public function getArtist()  { return $this->artist; }
    public function getYear()    { return $this->year; }
    public function getGenre()  { return $this->genre; }
    public function getPaintID() { return $this->paintID;}

    //Setter functions
    public function setImgName($imgName) {$this->imgName = $imgName;}
    public function setTitle($title) {$this->title = $title;}
    public function setArtist($artist) {$this->artist = $artist;}
    public function setYear($year) {$this->year = $year;}
    public function setGenre($genre) {$this->genre = $genre;}

    public function __toString()
    {
      $stringValue = $this->getPaintID() . '<br>' . $this->getImgName() . '<br>' . $this->getTitle() . '<br>' . $this->getArtist() . '<br>' . $this->getYear();
      return $stringValue;
    }
  }
 ?>
