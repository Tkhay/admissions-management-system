<?php include "assets/header.php"; ?>
<div class="container">
    <h2>Register</h2>
    <form action="process_register.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" required><br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" required><br><br>

        <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>
