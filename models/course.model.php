<?php
class Course
{
    public static function getCourses()
    {
        // set $db to the Database class running method connect()
        $db = Database::connect();

        $query= "SELECT * FROM course";

        $statement = $db->prepare($query);
        $statement->execute();

        $courses = $statement->fetchAll();

        $statement->closeCursor();

        return $courses;
    }

    public static function deleteCourse($course_id)
    {
        $db = Database::connect();

        $query = "DELETE FROM course WHERE course_id = :course_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":course_id", $course_id);
        $statement->execute();

        $statement->closeCursor();

        return 1;
    }

    public static function addCourse($course_name, $course_dept, $course_code, $course_credits, $course_teacher_email)
    {
        $db = Database::connect();

        $query = "INSERT INTO course (course_id, course_name, course_dept,
                    course_code, course_credits, course_teacher_email)
                  VALUES (NULL, :course_name, :course_dept, :course_code,
                    :course_credits, :course_teacher_email)";

        $statement = $db->prepare($query);
        $statement->bindValue(":course_name", $course_name);
        $statement->bindValue(":course_dept", $course_dept);
        $statement->bindValue(":course_code", $course_code);
        $statement->bindValue(":course_credits", $course_credits);
        $statement->bindValue(":course_teacher_email", $course_teacher_email);
        $statement->execute();

        $course = $statement->fetchAll();

        $statement->closeCursor();

        return $course;
    }

    public static function getCourse($course_id)
    {
        // set $db to the Database class running method connect()
        $db = Database::connect();

        $query= "SELECT * FROM course WHERE course_id = :course_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":course_id", $course_id);
        $statement->execute();

        $course = $statement->fetch();

        $statement->closeCursor();

        return $course;
    }

    public static function updateCourse($course_id, $course_name, $course_dept, $course_code, $course_credits,
                                        $course_teacher_email)
    {
        $db = Database::connect();

        $query = "UPDATE course SET course_name = :course_name, course_dept = :course_dept, course_code = :course_code,
                    course_credits = :course_credits, course_teacher_email = :course_teacher_email
                  WHERE course_id = :course_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":course_id", $course_id);
        $statement->bindValue(":course_name", $course_name);
        $statement->bindValue(":course_dept", $course_dept);
        $statement->bindValue(":course_code", $course_code);
        $statement->bindValue(":course_credits", $course_credits);
        $statement->bindValue(":course_teacher_email", $course_teacher_email);
        $statement->execute();

        $course = $statement->fetchAll();

        $statement->closeCursor();

        return $course;
    }

    public static function getRegisteredStudents($course_id)
    {
        $db = Database::connect();

        $query= "SELECT student_id, student_firstname, student_lastname, student_email, course_name
                 FROM student
                 INNER JOIN registration
                   ON registration.student_student_id = student.student_id
                 INNER JOIN course
                   ON course_id = 2
                 WHERE registration.course_course_id = :course_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":course_id", $course_id);
        $statement->execute();

        $students = $statement->fetchAll();

        $statement->closeCursor();

        return $students;
    }
}