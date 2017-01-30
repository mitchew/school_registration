<?php
class Student
{
    public static function getStudents()
    {
        // set $db to the Database class running method connect()
        $db = Database::connect();

        $query = "SELECT * FROM student";

        $statement = $db->prepare($query);
        $statement->execute();

        $students = $statement->fetchAll();

        $statement->closeCursor();

        return $students;
    }

    public static function getStudent($student_id)
    {
        // set $db to the Database class running method connect()
        $db = Database::connect();

        $query = "SELECT * FROM student WHERE student_id = :student_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":student_id", $student_id);
        $statement->execute();

        $student = $statement->fetch();

        $statement->closeCursor();

        return $student;
    }

    public static function addStudent($firstname, $lastname, $email)
    {
        $db = Database::connect();

        $query = "INSERT INTO student (student_id, student_firstname,
                    student_lastname, student_email)
                  VALUES (NULL, :firstname, :lastname, :email)";

        $statement = $db->prepare($query);
        $statement->bindValue(":firstname", $firstname);
        $statement->bindValue(":lastname", $lastname);
        $statement->bindValue(":email", $email);
        $statement->execute();
        $student = $statement->fetch();

        $statement->closeCursor();

        return $student;
    }

    public static function updateStudent($student_id, $firstname, $lastname,
                                         $email)
    {
        $db = Database::connect();

        $query = "UPDATE student SET student_firstname = :firstname,
            student_lastname = :lastname, student_email = :email
            WHERE student_id = :student_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":firstname", $firstname);
        $statement->bindValue(":lastname", $lastname);
        $statement->bindValue(":email", $email);
        $statement->bindValue(":student_id", $student_id);
        $statement->execute();

        $student = $statement->fetchAll();

        $statement->closeCursor();

        return $student;
    }

    public static function deleteStudent($student_id)
    {
        $db = Database::connect();
        $query = "DELETE FROM student WHERE student_id = :student_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":student_id", $student_id);
        $statement->execute();

        $statement->closeCursor();

        return 1;
    }

    public static function getStudentCourses($student_id)
    {
        $db = Database::connect();

        $query = "SELECT course_id, course_name, course_dept, course_code, course_credits, course_teacher_email
                 FROM course
                 INNER JOIN registration
                   ON registration.course_course_id = course.course_id
                 INNER JOIN student
                   ON student.student_id = registration.student_student_id
                 WHERE registration.student_student_id = :student_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":student_id", $student_id);
        $statement->execute();

        $courses = $statement->fetchAll();

        $statement->closeCursor();

        return $courses;
    }
}