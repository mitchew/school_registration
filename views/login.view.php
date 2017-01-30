<h1>Login to course registration</h1>
<p>Username: mitch</p>
<p>password: mitch</p>

<form action="." method="post">
    <label for="username">Username</label><input type="text" id="username" name="username">
    <label for="password">Password</label><input type="text" id="password" name="password">
    <input type="submit" value="Login">
</form>

<?php if (isset($error)): ?>
<p style="color:red;">
    <?php echo $error; ?>
</p>
<?php endif; ?>
