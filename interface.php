<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <style>
        /* General body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #e6f0ff; /* Light blue background */
            margin: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        /* Header styling */
        h1 {
            color: #1f4e79; /* Dark blue */
            margin-bottom: 30px;
            font-size: 2.5rem;
            text-align: center;
        }

        /* Container for login boxes */
        .container {
            display: flex;
            justify-content: center;
            gap: 40px;
            flex-wrap: wrap; /* Allows responsiveness */
        }

        /* Styling for each login box */
        .login-box {
            background: #ffffff;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            width: 220px;
            cursor: pointer;
        }

        /* Hover effects for login boxes */
        .login-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .login-box img {
            width: 80px;
            height: 80px;
            margin-bottom: 15px;
            border-radius: 50%;
            object-fit: cover;
        }

        .login-box h3 {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }

        /* Media Query for smaller screens */
        @media (max-width: 600px) {
            .container {
                flex-direction: column;
                gap: 20px;
            }

            h1 {
                font-size: 2rem;
            }

            .login-box {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <h1>Student Management System</h1>
    <div class="container">
        <!-- Admin Login Box -->
        <div class="login-box" onclick="redirectToSignIn('admin')">
            <img src="WhatsApp Image 2024-12-16 at 07.24.31_935c3d82.jpg" alt="Admin Icon">
            <h3>Admin Login</h3>
        </div>

        <!-- Student Login Box -->
        <div class="login-box" onclick="redirectToSignIn('student')">
            <img src="WhatsApp Image 2024-12-16 at 07.24.24_e0905936.jpg" alt="User Icon">
            <h3>User Login</h3>
        </div>
    </div>

    <script>
        function redirectToSignIn(role) {
            if(role === 'admin') {
                window.location.href = 'login.php';  // Admin sign-in page
            } else if(role === 'student') {
                window.location.href = 'login.php';  // Student sign-in page
            }
        }
    </script>
</body>
</html>
