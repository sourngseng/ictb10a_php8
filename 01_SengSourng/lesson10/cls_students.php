<?php 
// create class
    class Students
    {
        public $stu_id=0;
        public $stu_name="";
        public $gender="";
        public $age=null;

        public function initialData($id,$name,$gender,$age)
        {
            $this->stu_id=$id;
            $this->stu_name=$name;
            $this->gender=$gender;
            $this->age=$age;
        }
        public function getStudentData()
        {
            echo "<h3>ID = $this->stu_id</h3>";
            echo "<h3>Name= $this->stu_name</h3>";
            echo "<h3>Gender= $this->gender</h3>";
            echo "<h3>Age = $this->age</h3>";
        }
    }
    
?>
