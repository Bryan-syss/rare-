<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Enrollment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        #course-list {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            padding: 20px;
        }

        .course {
            width: 300px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .course span {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .course button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .course button:hover {
            background-color: #0056b3;
        }

        .course:hover {
            transform: translateY(-5px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .registered {
            background-color: #d3d3d3;
            color: #888;
            cursor: not-allowed;
        }

        .search-box {
            padding: 10px;
            font-size: 16px;
            width: 250px;
            margin-right: 10px;
        }

        .search-button {
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 5px;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .back-button {
            font-size: 20px;
            background-color: #fff;
            color: #007BFF;
            border: 1px solid #007BFF;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Find a Course</h1>
        <input type="text" id="courseInput" class="search-box" placeholder="Enter course name">
        <button class="search-button" onclick="searchCourse()">Search</button>
    </div>

    <h2>Available Courses</h2>
    <div id="course-list">
        <div class="course" data-course="COMPUTER SCIENCE">
            <span>COMPUTER SCIENCE</span>
            <button onclick="enrollCourse(this, 'COMPUTER SCIENCE')">Enroll</button>
        </div>
        <div class="course" data-course="NETWORKING">
            <span>NETWORKING</span>
            <button onclick="enrollCourse(this, 'NETWORKING')">Enroll</button>
        </div>
        <div class="course" data-course="COMPUTER ENGINEERING">
            <span>COMPUTER ENGINEERING</span>
            <button onclick="enrollCourse(this, 'COMPUTER ENGINEERING')">Enroll</button>
        </div>
        <div class="course" data-course="BUSINESS">
            <span>BUSINESS</span>
            <button onclick="enrollCourse(this, 'BUSINESS')">Enroll</button>
        </div>
        <div class="course" data-course="TELECOM ENGINEERING">
            <span>TELECOM ENGINEERING</span>
            <button onclick="enrollCourse(this, 'TELECOM ENGINEERING')">Enroll</button>
        </div>
        <div class="course" data-course="WEB APPLICATION DEVELOPMENT">
            <span>WEB APPLICATION DEVELOPMENT</span>
            <button onclick="enrollCourse(this, 'WEB APPLICATION DEVELOPMENT')">Enroll</button>
        </div>
        <div class="course" data-course="MOBILE APPLICATION DEVELOPMENT">
            <span>MOBILE APPLICATION DEVELOPMENT</span>
            <button onclick="enrollCourse(this, 'MOBILE APPLICATION DEVELOPMENT')">Enroll</button>
        </div>
        <div class="course" data-course="DATA SCIENCE">
            <span>DATA SCIENCE</span>
            <button onclick="enrollCourse(this, 'DATA SCIENCE')">Enroll</button>
        </div>
        <div class="course" data-course="CLOUD COMPUTING">
            <span>CLOUD COMPUTING</span>
            <button onclick="enrollCourse(this, 'CLOUD COMPUTING')">Enroll</button>
        </div>
        <div class="course" data-course="CYBERSECURITY">
            <span>CYBERSECURITY</span>
            <button onclick="enrollCourse(this, 'CYBERSECURITY')">Enroll</button>
        </div>
        <div class="course" data-course="AI & MACHINE LEARNING">
            <span>AI & MACHINE LEARNING</span>
            <button onclick="enrollCourse(this, 'AI & MACHINE LEARNING')">Enroll</button>
        </div>
    </div>

    <button class="back-button" onclick="goBack()">&#60; Back</button>

    <script>
        // Enroll function with button state change
        function enrollCourse(button, courseName) {
            // Disable the button and change text to 'Registered'
            button.textContent = 'Registered';
            button.classList.add('registered');
            button.disabled = true;  // Disable the button so it can't be clicked again

            // Show a confirmation alert
            alert(`You have enrolled in the ${courseName} course.`);
        }

        // Search function to filter courses
        function searchCourse() {
            const input = document.getElementById('courseInput').value.toLowerCase();  // Get the search input
            const courses = document.querySelectorAll('.course');  // Get all course elements

            // Loop through each course and hide those that don't match the search
            courses.forEach(course => {
                const courseName = course.getAttribute('data-course').toLowerCase();  // Get course name in lowercase
                if (courseName.includes(input)) {
                    course.style.display = '';  // Show the course if it matches
                } else {
                    course.style.display = 'none';  // Hide the course if it doesn't match
                }
            });
        }

        // Go back function to reload the page
        function goBack() {
            window.location.reload();  // Reload the page to go back to the current state
        }
    </script>
</body>
</html>
