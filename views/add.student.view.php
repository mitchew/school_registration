<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Course View</title>
</head>
<body>
    <h1>Add New Student</h1>
    <form action="?page=student" method="post">
        <input type="hidden" name="action" value="add_student">
        <p>
            <label for="">First Name</label>
            <input type="text" name="firstname">
        </p>
        <p>
            <label for="">Last Name</label>
            <input type="text" name="lastname">
        </p>
        <p>
            <label for="">Email Address</label>
            <input type="text" name="email">
        </p>
        <input type="submit">
    </form>
    <p>
        <a href=".">Back to main page</a>
    </p>
</body>
</html>