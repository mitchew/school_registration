<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student View</title>
</head>
<body>
    <h1><?php echo $student["student_firstname"] . " " . $student["student_lastname"] . "'s registered courses" ; ?></h1>
    <table>
        <tr>
            <th>Course ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Course Code</th>
            <th>Credit Hours</th>
            <th>Instructor</th>
        </tr>
        <?php foreach($courses as $course): ?>
        <tr>
            <td><?php echo $course['course_id']; ?></td>
            <td><?php echo $course['course_name']; ?></td>
            <td><?php echo $course['course_dept']; ?></td>
            <td><?php echo $course['course_code']; ?></td>
            <td><?php echo $course['course_credits']; ?></td>
            <td><?php echo $course['course_teacher_email']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>