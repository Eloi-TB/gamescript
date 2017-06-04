<?php namespace App\Dto {
     class  GameScores {

       protected $gameName;
       protected $scores;

       public function setGameName($val)
       {
          $this->gameName = $val;
          return $this;
       }

       public function setScores($val)
       {
          $this->scores = $val;
          return $this;
       }

       public function getGameName()
       {
          return $this->gameName;
       }

       public function getScores()
       {
          return $this->scores;
       }
    }
}
?>
