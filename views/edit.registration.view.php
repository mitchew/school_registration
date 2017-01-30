<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Edit Registration</h1>
    <form action="?page=registration" method="post">
        <input type="hidden" name="action" value="update_registration">
        <input type="hidden" name="registration_id" value="<?php echo $registration["registration_id"];?>">
        <input type="hidden" name="student_id" value="<?php echo $registration["student_id"];?>">
        <input type="hidden" name="course_id" value="<?php echo $registration["course_id"];?>">
        <label><?php echo $registration["student_firstname"] . " " . $registration["student_lastname"]; ?></label>
        <br>
<!--        <input type="submit">-->
    </form>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>