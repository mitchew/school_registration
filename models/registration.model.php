<?php
class Registration
{
    public static function registerStudent($student_id, $course_id)
    {
        $db = Database::connect();

        $query= "INSERT INTO registration (registration_id, registration_date, student_student_id, course_course_id)
                  VALUES (NULL, DEFAULT, :student_id, :course_id)";

        $statement = $db->prepare($query);
        $statement->bindValue(":student_id", $student_id);
        $statement->bindValue(":course_id", $course_id);
        $statement->execute();

        $registration = $statement->fetchAll();

        $statement->closeCursor();

        return $registration;
    }

    public static function getRegistrations()
    {
        $db = Database::connect();

        $query= "SELECT * FROM registration
                 JOIN student
                   ON student.student_id = registration.student_student_id
                 JOIN course
                   ON course.course_id = registration.course_course_id
                 ORDER BY course_name";

        $statement = $db->prepare($query);
        $statement->execute();

        $registrations = $statement->fetchAll();

        $statement->closeCursor();

        return $registrations;
    }

    public static function getRegistration($registration_id)
    {
        $db = Database::connect();

        $query= "SELECT * FROM registration
                 JOIN student
                   ON student.student_id = registration.student_student_id
                 JOIN course
                   ON course.course_id = registration.course_course_id
                 WHERE registration_id = :registration_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":registration_id", $registration_id);
        $statement->execute();

        $registration = $statement->fetch();

        $statement->closeCursor();

        return $registration;
    }

    public static function deleteRegistration($registration_id)
    {
        $db = Database::connect();

        $query = "DELETE FROM registration WHERE registration_id = :registration_id";

        $statement = $db->prepare($query);
        $statement->bindValue(":registration_id", $registration_id);
        $statement->execute();

        $statement->closeCursor();

        return 1;
    }
}