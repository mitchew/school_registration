<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student View</title>
</head>
<body>
    <h1>Edit Student</h1>
    <form action="?page=student" method="post">
        <input type="hidden" name="action" value="update_student">
        <input type="hidden" name="student_id" value="<?php echo $student["student_id"]; ?>">
        <p>
            <label>Original First Name</label>
            <br>
            <label><?php echo $student["student_firstname"]; ?></label>
            <br>
            <label for="">New First Name</label>
            <br>
            <input type="text" name="firstname" value="<?php echo $student["student_firstname"];?>">
        </p>
        <p>
            <label>Original Last Name</label>
            <br>
            <label><?php echo $student["student_lastname"]; ?></label>
            <br>
            <label for="">New Last Name</label>
            <br>
            <input type="text" name="lastname" value="<?php echo $student["student_lastname"];?>">
        </p>
        <p>
            <label>Original email</label>
            <br>
            <label><?php echo $student["student_email"]; ?></label>
            <br>
            <label for="">New Email Address</label>
            <br>
            <input type="text" name="email" value="<?php echo $student["student_email"];?>">
        </p>
        <input type="submit">
    </form>
    <p>
        <a href=".">Back to Main Page</a>
    </p>

</body>
</html>