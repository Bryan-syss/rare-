<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Records and Courses</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 450px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .button-box {
            margin-bottom: 20px;
            text-align: center;
        }

        .button {
            width: 100px;
            height: 100px;
            display: inline-block;
            background-color: #4CAF50;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            line-height: 100px;
        }

        .button img {
            width: 50px;
            height: 50px;
        }

        .button:hover {
            background-color: #45a049;
        }

        .link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }

        .button-box:last-child {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h2>Manage Student Records and Courses</h2>

        <div class="button-box">
            <div class="button" onclick="updateRecord()">
                <img src="we.jpg" alt="Update Icon">
            </div>
            <p>Update/Delete Student</p>
        </div>
        
        <div class="button-box">
            <div class="button" onclick="deleteRecord()">
                <img src="WhatsApp Image 2024-12-16 at 08.24.36_fa09adf3.jpg" alt="Delete Icon">
            </div>
            <p>Record</p>
        </div>
        
        <div class="button-box">
            <div class="button" onclick="viewCourses()">
                <img src="me.jpg" alt="Courses Icon">
            </div>
            <p>View All Courses</p>
        </div>
        
        <div class="link">
            <a href="javascript:void(0)" onclick="window.location.href = 'interface.php'">Log Out</a>
        </div>
    </div>

    <script>
        function updateRecord() {
            alert("Redirect to update student record page (functionality not implemented).");
        }

        function deleteRecord() {
            alert("Redirect to delete student record page (functionality not implemented).");
        }

        function viewCourses() {
            alert("Redirect to view all courses page (functionality not implemented).");
        }
    </script>

</body>
</html>
