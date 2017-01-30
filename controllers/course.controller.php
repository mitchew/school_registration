<?php
require_once("models/course.model.php");
if(isset($_POST["action"]))
{
    switch($_POST["action"])
    {
        case "delete_course":
            $course_id = filter_input(INPUT_POST, "course_id", FILTER_VALIDATE_INT);
            Course::deleteCourse($course_id);
            $courses = Course::getCourses();
            require_once("views/course.view.php");
            break;
        case "add_course":
            $course_name = filter_input(INPUT_POST, "course_name");
            $course_dept = filter_input(INPUT_POST, "course_dept");
            $course_code = filter_input(INPUT_POST, "course_code");
            $course_credits = filter_input(INPUT_POST, "course_credits");
            $course_teacher_email = filter_input(INPUT_POST, "course_teacher_email");
            Course::addCourse($course_name, $course_dept, $course_code, $course_credits, $course_teacher_email);
            $courses = Course::getCourses();
            require_once("views/course.view.php");
            break;
        case "edit_course":
            $course_id = filter_input(INPUT_POST, "course_id");
            $course = Course::getCourse($course_id);
            require_once("views/edit.course.view.php");
            break;
        case "update_course";
            $course_id = filter_input(INPUT_POST, "course_id");
            $course_name = filter_input(INPUT_POST, "course_name");
            $course_dept = filter_input(INPUT_POST, "course_dept");
            $course_code = filter_input(INPUT_POST, "course_code");
            $course_credits = filter_input(INPUT_POST, "course_credits");
            $course_teacher_email = filter_input(INPUT_POST, "course_teacher_email");
            Course::updateCourse($course_id, $course_name, $course_dept, $course_code, $course_credits,
                $course_teacher_email);
            $courses = Course::getCourses();
            require_once("views/course.view.php");
            break;
        default:
            break;
    }
}
else if(isset($_GET["course_id"]))
{
    $course_id = filter_input(INPUT_GET, "course_id", FILTER_VALIDATE_INT);
    $course = Course::getCourse($course_id);
    $students = Course::getRegisteredStudents($course_id);
    require_once("views/one.course.view.php");
}
else if(empty($_POST))
{
    $courses = Course::getCourses();
// this file will control data from the models to the views specifically for the courses page
    require_once("views/course.view.php");
}
else
{
    header("Location: .");
}