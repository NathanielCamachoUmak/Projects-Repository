<?php 
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Darrel & Ayien's Five Star Hotel</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 0; background-color: #f4f4f4; }
        .sidebar { width: 220px; float: left; background: #2c3e50; height: 100vh; color: white; padding: 20px; position: fixed; }
        .sidebar a { color: #ecf0f1; display: block; padding: 12px; text-decoration: none; border-bottom: 1px solid #34495e; }
        .sidebar a:hover { background: #34495e; color: #3498db; }
        .content { margin-left: 260px; padding: 40px; background: white; min-height: 100vh; box-shadow: -5px 0 10px rgba(0,0,0,0.1); }
        .header { background: #ffffff; padding: 30px; text-align: center; border-bottom: 4px solid #2c3e50; margin-left: 260px; }
        h1 { margin: 0; color: #2c3e50; letter-spacing: 2px; }
        h3 { margin: 5px 0 0; color: #7f8c8d; font-weight: 300; }
    </style>
</head>
<body>
    <div class="header">
        <h1>DARREL & AYIEN'S FIVE STAR HOTEL</h1>
        <h3>ON-LINE RESERVATION</h3>
    </div>
    
    <div class="sidebar">
        <h2 style="font-size: 1.2em; border-bottom: 2px solid #3498db; padding-bottom: 10px;">NAVIGATION</h2>
        <a href="?page=home">Home</a>
        <a href="?page=profile">Company's Profile</a>
        <a href="?page=reservation">Reservation</a>
        <a href="?page=contacts">Contacts</a>
        <br>
        <h2 style="font-size: 1.1em; color: #95a5a6;">LAB EXERCISES</h2>
        <a href="?page=lab_exercises">View All Labs</a>
    </div>

    <div class="content">
        <?php 
            switch($page) {
                case 'home': 
                    echo "<h2>Welcome to Our Hotel</h2><p>Experience world-class service and unparalleled luxury in the heart of the city.</p>";
                    break;
                case 'profile': 
                    echo "<h2>Company Profile</h2><p>Established in 2026, Darrel & Ayien's Hotel has been the premier choice for travelers seeking excellence.</p>"; 
                    break;
                case 'contacts': 
                    echo "<h2>Contact Us</h2><p>Address: West Rembo, Taguig City<br>Email: stay@dahotel.com<br>Phone: 0917-8051962</p>"; 
                    break;
                case 'reservation': 
                    include('reservation_form.php'); 
                    break;
                case 'lab_exercises':
                    echo "<h2>Redesigned Lab Exercises</h2><p>Select a lab from the sidebar or dashboard.</p>";
                    break;
                default: 
                    echo "<h2>Welcome</h2><p>Experience world-class service.</p>"; 
                    break;
            }
        ?>
    </div>
</body>

</html>
