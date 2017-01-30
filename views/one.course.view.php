<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Students registered for <?php echo $course["course_name"] . " " . $course["course_code"];?></h1>
    <table>
        <tr>
            <th>Course ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Course Code</th>
            <th>Credit Hours</th>
            <th>Instructor</th>
        </tr>
        <tr>
            <td><?php echo $course['course_id']; ?></td>
            <td><?php echo $course['course_name']; ?></td>
            <td><?php echo $course['course_dept']; ?></td>
            <td><?php echo $course['course_code']; ?></td>
            <td><?php echo $course['course_credits']; ?></td>
            <td><?php echo $course['course_teacher_email']; ?></td>
        </tr>
    </table>
    <table>
        <tr>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
        </tr>
        <?php foreach($students as $student): ?>
        <tr>
            <td><?php echo $student["student_id"]; ?></td>
            <td><?php echo $student["student_firstname"] . " " . $student["student_lastname"]; ?></td>
            <td><?php echo $student["student_email"]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>