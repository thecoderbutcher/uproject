<?php 
    class Users  {
        private $users;

        public function __construct(){
            $this->users = [
                'name' => 'hola',
                'lastname' => 'anda',
                'id' => 1234
            ];
        }

        public function index(){
            return "lololo";
            //$this->view('index', $this->users);
        }
    }
?>