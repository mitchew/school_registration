<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration View</title>
</head>
<body>
    <h1>Registrations</h1>
    <table>
        <tr>
            <th>Registration Date</th>
            <th>Student ID</th>
            <th>Student Name</th>
            <th>Student Email</th>
            <th>Course Name</th>
            <th>Course Department</th>
            <th>Course Code</th>
            <th>Course Credits</th>
            <th>Teacher Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($registrations as $registration): ?>
        <tr>
            <td><?php echo $registration["registration_date"]; ?></td>
            <td><?php echo $registration["student_id"]; ?></td>
            <td><?php echo $registration["student_firstname"] . " " . $registration["student_lastname"]; ?></td>
            <td><?php echo $registration["student_email"]; ?></td>
            <td><?php echo $registration["course_name"]; ?></td>
            <td><?php echo $registration["course_dept"]; ?></td>
            <td><?php echo $registration["course_code"]; ?></td>
            <td><?php echo $registration["course_credits"]; ?></td>
            <td><?php echo $registration["course_teacher_email"]; ?></td>
            <td>
                <form action="?page=registration" method="post">
                    <input type="hidden" name="action" value="edit_registration">
                    <input type="hidden" name="registration_id" value="<?php echo $registration["registration_id"];?>">
                    <input type="submit" value="Edit registration">
                </form>
                <form action="?page=registration" method="post">
                    <input type="hidden" name="action" value="delete_registration">
                    <input type="hidden" name="registration_id" value="<?php echo $registration["registration_id"];?>">
                    <input type="submit" value="Delete Registration">
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="?page=add_registration">Add new registration</a>
    <p><a href=".">Back to main page</a></p>

</body>
</html>