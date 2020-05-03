<?php
    class Main{
        protected $host = "localhost";
        protected $user = "root";
        protected $pass = "";
        protected $db = "fpi-crud";
        protected $con;
        protected $sql;
        protected $result;
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if(!$this->con){
                    echo "db connected.".$this->con->connect_error;
                }
            }
            return $this->con;
        }
        public function insert($name,$roll,$reg,$dept,$shift,$mobile){
            $name = $name;
            $roll = $roll;
            $reg = $reg;
            $dept = $dept;
            $shift = $shift;
            $mobile = $mobile;
            $this->sql = "INSERT INTO `st_information`(`name`, `roll`, `reg`, `dept`, `shift`, `mobile`) VALUES ('$name','$roll','$reg','$dept','$shift','$mobile')";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return true;
            }else{
                return false;
            }
        }
        public function show(){
            $this->sql = "SELECT * FROM `st_information`";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return $this->result;
            }else{
                return false;
            }
        }
        public function delete($id){
            $id = $id;
            $this->sql = "DELETE FROM `st_information` WHERE id = '$id'";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return true;
            }else{
                return false;
            }
        }
        public function retrive($user){
            $user = $user;
            $this->sql = "SELECT * FROM `login` WHERE username = '$user'";
            $this->result = $this->con->query($this->sql);
            if($this->result){
                return $this->result;
            }else{
                return false;
            }
        }
        public function __destruct(){
            $this->con->close();
        }
    }


    //$obj = new Main(); 










?>