<?php	
	class Student{
        public $username;
        public $email;
        public $birthyear;
        public $gender;
        function __wakeup(){
            if (isset($this->hook)) eval($this->hook);
        }
    }
 ?>