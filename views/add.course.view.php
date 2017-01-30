<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Add New Course</h1>
    <form action="?page=course" method="post">
        <input type="hidden" name="action" value="add_course">
        <label for="course_name">Course Name</label><br>
        <input type="text" name="course_name" id="course_name"><br>
        <label for="course_dept">Course Department</label><br>
        <input type="text" name="course_dept" id="course_dept"><br>
        <label for="course_code">Course Code</label><br>
        <input type="text" name="course_code" id="course_code"><br>
        <label for="course_credits">Course Credits (integer)</label><br>
        <input type="text" name="course_credits" id="course_credits"><br>
        <label for="course_teacher_email">Course Teacher Email</label><br>
        <input type="text" name="course_teacher_email" id="course_teacher_email"><br>
        <input type="submit">
    </form>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>