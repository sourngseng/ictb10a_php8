<?php 
    include_once('cls_students.php');

    $objStu = new Students;

    // ចាប់យកទិន្នន័យពី Form
    $id=$_POST['stuid'];
    $full_name=$_POST['full_name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    

    $objStu->initialData($id,$full_name,$gender,$age);
    $objStu->getStudentData();

?>