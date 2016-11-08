<?php
	// This is the file for the parent class

	class ParentClass {
		private $name;

    public function __construct($newName){
      $this->name = $newName;
    }

    public final function setName($newName){
      $this->name = $newName;
    }

    public function getName(){
      return $this->name;
    }

    public function __toString(){
      return "This person is called " . $this->name;
    }

	}


?>