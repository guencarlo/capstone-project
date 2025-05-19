<?php
session_start();
require("Database.php");

$loginError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $stmt = $connection->prepare("SELECT id, first_name, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['first_name'];
            header("Location: front.php"); // Redirect to dashboard
            exit();
        } else {
            $loginError = true;
        }
    } else {
        $loginError = true;
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Business Login</title>
    <link rel="stylesheet" href="stylelogin.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgba(193, 140, 48, 0.62);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .login-button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .login-button:hover {
            background-color: #0056b3;
        }

        .error-message {
            color: #ff4d4d;
            background-color:rgb(255, 244, 230);
            padding: 10px;
            border: 1px solid #ff4d4d;
            border-radius: 4px;
            margin-top: 15px;
            text-align: center;
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        /* Animation for invalid login */
        .shake {
            animation: shake 0.3s ease-in-out;
        }

        @keyframes shake {
            0%, 100% {
                transform: translateX(0);
            }
            25% {
                transform: translateX(-5px);
            }
            50% {
                transform: translateX(5px);
            }
            75% {
                transform: translateX(-5px);
            }
        }
    </style>
</head>
<body>
    <form id="loginForm" action="login.php" method="POST" class="<?php echo $loginError ? 'shake' : ''; ?>">
        <h2 style="text-align: center; margin-bottom: 20px;">Login</h2>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>

        <button type="submit" class="login-button">Log In</button>

        <?php if ($loginError): ?>
            <div class="error-message">Invalid email or password. Please try again.</div>
        <?php endif; ?>
    </form>

    <script>
        // Optional: Add a timeout to remove the shake class after the animation
        document.addEventListener('DOMContentLoaded', () => {
            const form = document.getElementById('loginForm');
            if (form.classList.contains('shake')) {
                setTimeout(() => {
                    form.classList.remove('shake');
                }, 300);
            }
        });
    </script>
</body>
</html>
