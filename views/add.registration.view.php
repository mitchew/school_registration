<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Registration</title>
</head>
<body>
    <h1>Add New Registration</h1>
    <form action="?page=registration" method="post">
        <input type="hidden" name="action" value="register_student">
        <p>
            <label for="student">Student</label>
            <br>
            <select name="student_id" id="student">
                <?php foreach($students as $student): ?>
                    <option value="<?php echo $student["student_id"];?>">
                        <?php echo $student["student_firstname"] . " " . $student["student_lastname"];?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label for="course">Course</label>
            <br>
            <select name="course_id" id="course">
                <?php foreach($courses as $course): ?>
                    <option value="<?php echo $course["course_id"];?>">
                        <?php echo $course["course_name"] . " " . $course["course_code"]; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </p>
        <input type="submit">
    </form>
    <a href=".">Back to main page</a>
</body>
</html>