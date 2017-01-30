<?php
require_once("models/student.model.php");

if(isset($_GET["student_id"])) {
    $student_id = filter_input(INPUT_GET, "student_id", FILTER_VALIDATE_INT);
    $student = Student::getStudent($student_id);
    $courses = Student::getStudentCourses($student_id);

    require_once("views/one.student.view.php");
}
else if(isset($_POST["action"]))
{
    switch ($_POST["action"])
    {
        case "update_student":
            $student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
            $student_firstname = filter_input(INPUT_POST, "firstname");
            $student_lastname = filter_input(INPUT_POST, "lastname");
            $student_email = filter_input(INPUT_POST, "email");
            Student::updateStudent($student_id, $student_firstname, $student_lastname, $student_email);
            $students = Student::getStudents();
            require_once("views/student.view.php");
            break;
        case "add_student":
            $student_firstname = filter_input(INPUT_POST, "firstname");
            $student_lastname = filter_input(INPUT_POST, "lastname");
            $student_email = filter_input(INPUT_POST, "email");
            Student::addStudent($student_firstname, $student_lastname, $student_email);
            $students = Student::getStudents();
            require_once("views/student.view.php");
            break;
        case "delete_student":
            $student_id = filter_input(INPUT_POST, "student_id");
            Student::deleteStudent($student_id);
            $students = Student::getStudents();
            require_once("views/student.view.php");
            break;
        case "edit_student":
            $student_id = filter_input(INPUT_POST, "student_id", FILTER_VALIDATE_INT);
            $student = Student::getStudent($student_id);
            require_once("views/edit.student.view.php");
            break;
        default:
            header("Location: .");
            break;
    }
}
else if(empty($_POST))
{
    $students = Student::getStudents();
// this file will control data from the models to the views specifically for the student page
    require_once("views/student.view.php");
}
else
{
    echo "New student form has been submitted";
}
