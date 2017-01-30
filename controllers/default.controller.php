<?php
// main controller for the web app
require_once("models/database.model.php");
require_once("models/login.model.php");
$loguser = checkLogin();

if ($loguser == "mitch")
{
    // branching conditions for each view
    if (empty($_GET) && empty($_POST)) {
        // show the main view
        require_once("views/main.view.php");
    }
    else if (isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case "course":
                require_once("controllers/course.controller.php");
                break;
            case "student":
                require_once("controllers/student.controller.php");
                break;
            case "registration":
                require_once("controllers/registration.controller.php");
                break;
            case "logout":
                $action = "logout";
                require_once("controllers/login.controller.php");
                break;
            case "add_course":
                require_once("views/add.course.view.php");
                break;
            case "add_student":
                require_once("views/add.student.view.php");
                break;
            case "add_registration":
                require_once("models/student.model.php");
                require_once("models/course.model.php");
                $students = Student::getStudents();
                $courses = Course::getCourses();
                require_once("views/add.registration.view.php");
                break;
            default:
                header("Location: .");
                break;
        }
    }
}
else
{
    require_once("controllers/login.controller.php");
}

/**
 * different views are..
 * 0. main view, shows links to each other view
 * 1. showing all courses + also has a form to add a new course
 * 2. edit course view
 * 3. showing all the students and a form to add new students
 * 4. editing students
 * 5. showing all registrations and a form to add a new registration
 * 6. editing registrations
 * 7. showing all registrations in a specific course
 * 8. showing a student's schedule
 */