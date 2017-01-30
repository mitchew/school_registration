<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Courses</h1>
    <table>
        <tr>
            <th>Course ID</th>
            <th>Name</th>
            <th>Department</th>
            <th>Course Code</th>
            <th>Credit Hours</th>
            <th>Instructor</th>
            <th>Actions</th>
        </tr>
        <?php foreach($courses as $course): ?>
        <tr>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_id']; ?></a></td>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_name']; ?></a></td>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_dept']; ?></a></td>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_code']; ?></a></td>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_credits']; ?></a></td>
            <td><a href="?page=course&course_id=<?php echo $course["course_id"];?>"><?php echo $course['course_teacher_email']; ?></a></td>
            <td>
                <form action="?page=course" method="post">
                    <input type="hidden" name="action" value="delete_course">
                    <input type="hidden" name="course_id" value="<?php echo $course["course_id"]; ?>">
                    <input type="submit" value="Delete Course">
                </form>
                <form action="?page=course" method="post">
                    <input type="hidden" name="action" value="edit_course">
                    <input type="hidden" name="course_id" value="<?php echo $course["course_id"]; ?>">
                    <input type="submit" value="Edit Course">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="?page=add_course">Add new course</a>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>