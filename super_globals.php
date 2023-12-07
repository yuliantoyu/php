<?php
session_start();

// Handle form submission with POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and validate user input
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    // Check credentials (this is a basic example, in a real-world scenario, use proper authentication)
    $validCredentials = ($username === 'user' && $password === 'pass');

    if ($validCredentials) {
        // Set session variable upon successful login
        $_SESSION['user'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $loginError = "Invalid username or password";
    }
}

// Handle logout with GET
if (isset($_GET['logout'])) {
    // Unset and destroy the session upon logout
    session_unset();
    session_destroy();
    header('Location: index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login System</title>
</head>
<body>

<?php if (isset($_SESSION['user'])) : ?>
    <p>Welcome, <?php echo $_SESSION['user']; ?>! <a href="?logout">Logout</a></p>
<?php else : ?>
    <?php if (isset($loginError)) : ?>
        <p style="color: red;"><?php echo $loginError; ?></p>
    <?php endif; ?>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <input type="submit" value="Login">
    </form>
<?php endif; ?>

</body>
</html>
