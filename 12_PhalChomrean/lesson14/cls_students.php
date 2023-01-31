<?php 
    class students{
        public $stu_id=0;
        public $stu_name="";
        public $gender="";
        public $age=null;

        public function initialData($id,$name,$gender,$age){
            $this->stu_id=$id;
            $this->stu_name=$name;
            $this->gender=$gender;
            $this->age=$age;
        }

        public function getStudentData(){
            echo "<h4>ID of student: $this->stu_id </h4>";
            echo "<h4>Name of student: $this->stu_name </h4>";
            echo "<h4>Gender of student: $this->gender </h4>";
            echo "<h4>Age of student: $this->age </h4>";
        }

    }

?>