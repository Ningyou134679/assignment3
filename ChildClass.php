<?php 
	// this file will extend PArentClass.php

	class ChildClass extends ParentClass {
		private $foodArray;

    public function __construct($newName, $foodArray){
      parent::__construct($newName);
      $this->foodArray = $foodArray;
    }

    public function __toString(){
      $str = "";
      if(isset($this->foodArray) && is_array($this->foodArray)){
        $str = "This person is called ". parent::getName() . ", he likes ";
        foreach($this->foodArray as $food){
          $str = $str . "$food, ";
        }
      }else{
        foreach($this->foodArray as $food){
          echo $food . "<br>";
        }
        $str = "This person is called " . parent::getName();
      }
      return $str;
      
    }
	}
