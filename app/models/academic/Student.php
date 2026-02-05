<?php
    class Student {
    
        protected $name;
        protected $age;
        private $gradeLevel;

        public function __construct($name, $age, $gradeLevel) {
            $this->name = $name;
            $this->age = $age;
            $this->gradeLevel = $gradeLevel;
        }

        public function getGradeLevel() {
            return $this->gradeLevel;
        }

        public function setGradeLevel($gradeLevel) {
            $this->gradeLevel = $gradeLevel;
        }

        public function getNames() {
            return "get names " . $this->name;
        }
        
    }