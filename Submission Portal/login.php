<?php include "assets/header.php"; ?>
<div class="container">
    <h2>Login</h2>
    <form method="POST" action="process_login.php">
    <label for="username">Username:</label>
    <input type="text" name="username" required>
    
    <label for="password">Password:</label>
    <input type="password" name="password" required>
    
    <button type="submit"class="btn btn-primary">Login</button>
    </form>
<a href="register.php" class="btn btn-secondary">Register here </a>
</div>

</body>
</html>
