<?php 
// Members

/* 
Arnie Tricia Sta Ana
Acabaddo, Melky
Serrano, Angelica
Gabrang, Arvin
Enrique Andres
Charles Del Rosario


*/



//manager
//developer
// using inheritance and encapsulation
//private properties: name and salary
//constructor and public getters methods of these properties

class Employee {

    private $name;
    private $salary;


        public function _construct ($name, $salary)       {

            $this->name = $name;
            $this->salary = $salary;

        }

        public function getName(){
            return $this->name;

        }

        public function getSalary(){
            return $this->salary;

        }


    }
    

        class Manager extends Employee {
            protected $department;

            public function __construct($name, $salary, $department){

                parent::_construct($name, $salary);
                $this->department = $department;
            
            }

                public function getManager(){

                    return "Name:" . $this->getName(). " " .  "Salary:" .  " ". $this->getSalary() . " " .  "Department :" . $this->department;
            
            
                }

                


        }

        class Developer extends Employee {
            protected $language;

            public function __construct($name, $salary, $language){

                parent::_construct($name, $salary);
                $this->language = $language;
            
            }

                public function getMan(){

                    return "Name: " . $this->getName(). " " .  "Salary : " .  " ". $this->getSalary() . " " .  "Language: " . $this->language;
            
            
                }


        }
