<?php 
class NewChampion {
  protected $champion = null;

  public function __construct(){
  }
  public function getHTML() {
    return "<span class='lol-characters $this->champion'></span>";
  }
  public function walk(){
    echo 'Walk';
  }
}

class Veigar extends NewChampion {
  public function __construct(){
    $this->champion = "veigar";
  }
  public function jump(){
    echo 'Jump';
  }
}

class Zyra extends NewChampion {
  public function __construct(){
    $this->champion = "zyra";
  }
  public function swim(){
    echo 'Swim';
  }
}

class Warwick extends NewChampion {
  public function __construct(){
    $this->champion = "warwick";
  }
}
?>