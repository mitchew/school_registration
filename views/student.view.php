<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student View</title>
</head>
<body>
    <h1>Student</h1>
    <table>
        <tr>
            <th>Student ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
        <?php foreach($students as $student): ?>
            <tr>
                <td><a href="?page=student&student_id=<?php echo $student["student_id"]; ?>"><?php echo $student["student_id"]; ?></a></td>
                <td><a href="?page=student&student_id=<?php echo $student["student_id"]; ?>"><?php echo $student["student_firstname"]; ?></a></td>
                <td><a href="?page=student&student_id=<?php echo $student["student_id"]; ?>"><?php echo $student["student_lastname"]; ?></a></td>
                <td><a href="?page=student&student_id=<?php echo $student["student_id"]; ?>"><?php echo $student["student_email"]; ?></a></td>
                <td>
                    <form action="?page=student" method="post">
                        <input type="hidden" name="action" value="delete_student">
                        <input type="hidden" name="student_id" value="<?php echo $student["student_id"];?>">
                        <input type="submit" value="Delete Student">
                    </form>
                    <form action="?page=student" method="post">
                        <input type="hidden" name="action" value="edit_student">
                        <input type="hidden" name="student_id" value="<?php echo $student["student_id"];?>">
                        <input type="submit" value="Edit Student">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="?page=add_student">Add new student</a>
    <p>
        <a href=".">Back to Main Page</a>
    </p>

</body>
</html>