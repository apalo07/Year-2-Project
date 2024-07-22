<?php

class LoginPanel {
    private $username = 'admin';
    private $password = '123456789';
    private $error = '';

    public function handleLogin() {
        if(isset($_POST['username']) && isset($_POST['password'])) {
            $enteredUsername = $_POST['username'];
            $enteredPassword = $_POST['password'];

            if ($enteredUsername === $this->username && $enteredPassword === $this->password) {
            
                header('Location: admin.php');
                exit();
            } else {
              
                $this->error = 'Invalid username or password';
            }
        }
    }

    public function showError() {
        if (!empty($this->error)) {
            echo '<p style="color: red;">' . $this->error . '</p>';
        }
    }

    public function showLoginForm() {
        echo '
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Login</title>
            </head>
            <body>
                <h2>Login</h2>
                ' . $this->showError() . '
                <form action="" method="POST">
                    <label for="username">Username:</label><br>
                    <input type="text" id="username" name="username" required><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" id="password" name="password" required><br><br>
                    <input type="submit" value="Login">
                </form>
            </body>
            </html>
        ';
    }
}

$loginPanel = new LoginPanel();
$loginPanel->handleLogin();
$loginPanel->showLoginForm();
?>
