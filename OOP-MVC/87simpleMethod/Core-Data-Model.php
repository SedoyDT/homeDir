<?php
	namespace Core\Data;
	
	class Model
	{
        private $name;

        public function __construct($name)
        {
            $this->name=$name;
        }
        public function getName(){
            return $this->name;
        }
	}