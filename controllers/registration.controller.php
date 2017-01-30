<?php
require_once("models/course.model.php");
require_once("models/student.model.php");
require_once("models/registration.model.php");
// this file will control data from the models to the views specifically for the registration page
if(empty($_POST))
{
    $registrations = Registration::getRegistrations();
    require_once("views/registration.view.php");
}
else if(isset($_POST["action"]))
{
    switch($_POST["action"])
    {
        case "register_student":
            $student_id = filter_input(INPUT_POST, "student_id");
            $course_id = filter_input(INPUT_POST, "course_id");
            $student = Student::getStudent($student_id);
            $course = Course::getCourse($course_id);
            Registration::registerStudent($student_id, $course_id);
            echo $student["student_firstname"] . " " . $student["student_lastname"] . " registered for " . $course["course_name"];
            $students = Student::getStudents();
            $courses = Course::getCourses();
            $registrations = Registration::getRegistrations();
            require_once("views/registration.view.php");
            break;
        case "edit_registration":
            $registration_id = filter_input(INPUT_POST, "registration_id", FILTER_VALIDATE_INT);
            $registration = Registration::getRegistration($registration_id);
            require_once("views/edit.registration.view.php");
            break;
        case "delete_registration":
            $registration_id = filter_input(INPUT_POST, "registration_id");
            Registration::deleteRegistration($registration_id);
            $registrations = Registration::getRegistrations();
            require_once("views/registration.view.php");
            break;
        default:
            header("Location: .");
            break;
    }
}
else
{
    header("Location: .");
}
