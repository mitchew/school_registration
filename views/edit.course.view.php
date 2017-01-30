<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Courses</h1>
    <form action="?page=course" method="post">
        <input type="hidden" name="action" value="update_course">
        <input type="hidden" name="course_id" value="<?php echo $course["course_id"];?>">
        <p>
            <label>Original Course Name</label>
            <br>
            <label><?php echo $course["course_name"]; ?></label>
            <br>
            <label for="course_name">New Course Name</label>
            <br>
            <input type="text" name="course_name" value="<?php echo $course["course_name"];?>" id="course_name">
        </p>
        <p>
            <label>Original Course Department</label>
            <br>
            <label><?php echo $course["course_dept"]; ?></label>
            <br>
            <label for="course_dept">New Course Department</label>
            <br>
            <input type="text" name="course_dept" value="<?php echo $course["course_dept"];?>" id="course_dept">
        </p>
        <p>
            <label>Original Course Code</label>
            <br>
            <label><?php echo $course["course_code"]; ?></label>
            <br>
            <label for="course_code">New Course Code</label>
            <br>
            <input type="text" name="course_code" value="<?php echo $course["course_code"];?>" id="course_code">
        </p>
        <p>
            <label>Original Course Credits</label>
            <br>
            <label><?php echo $course["course_credits"]; ?></label>
            <br>
            <label for="course_credits">New Course Credits (Integer)</label>
            <br>
            <input type="text" name="course_credits" value="<?php echo $course["course_credits"];?>" id="course_credits">
        </p>
        <p>
            <label>Original Course Teacher Email</label>
            <br>
            <label><?php echo $course["course_teacher_email"]; ?></label>
            <br>
            <label for="course_teacher_email">New Course Teacher Email</label>
            <br>
            <input type="text" name="course_teacher_email" value="<?php echo $course["course_teacher_email"];?>" id="course_teacher_email">
        </p>
        <input type="submit">
    </form>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>