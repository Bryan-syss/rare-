<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
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

        /* Button container */
        .button-container {
            display: flex;
            gap: 30px;
            flex-wrap: wrap;
            justify-content: center;
        }

        /* Button styling */
        .dashboard-btn {
            background-color: #1f4e79;
            color: #fff;
            border: none;
            padding: 15px 30px;
            border-radius: 8px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .dashboard-btn:hover {
            background-color: #14537c;
            transform: translateY(-5px);
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            .dashboard-btn {
                font-size: 1rem;
                padding: 12px 20px;
            }
        }
    </style>
</head>
<body>
    <h1>Welcome</h1>
    <div class="button-container">
        <!-- Register Course Button -->
        <button class="dashboard-btn" onclick="navigate('course.html')">Register Course</button>
        <!-- View Results Button -->
        <button class="dashboard-btn" onclick="navigate('view_results.html')">View Results</button>
    </div>

    <script>
        function navigate(page) {
            window.location.href = page; // Navigate to respective pages
        }
    </script>
</body>
</html>
