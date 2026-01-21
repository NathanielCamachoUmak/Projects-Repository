<?php
// Function for Submit Reservation Logic
function processReservation() {
    // Check if the form was submitted using POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        // Validation: Ensure necessary information is supplied [cite: 1462]
        if (empty($_POST['txtName']) || empty($_POST['rdoCapacity']) || 
            empty($_POST['rdoType']) || empty($_POST['rdoPayment'])) {
            
            // Prompt user if room capacity, type, or payment is missing [cite: 1463]
            echo "<script>alert('Incomplete information! Please select all fields.');</script>";
        } else {
            // If valid, redirect to the billing calculation page [cite: 1461]
            // We can pass the POST data via Session to the next page
            session_start();
            $_SESSION['reservation_data'] = $_POST;
            header("Location: billing_output.php");
            exit();
        }
    }
}

// Call the function to execute the logic
processReservation();
?>

<div class="reservation-box">
    <form method="post" action="">
        <p>Customer Name: <input type="text" name="txtName" placeholder="Enter Full Name"></p>
        <p>Contact Number: <input type="text" name="txtContact" placeholder="e.g. 09170000000"></p>
        
        <h4>Reservation Date</h4>
        <p>From: <input type="date" name="dateFrom"> To: <input type="date" name="dateTo"></p>

        <div style="display: flex; justify-content: space-between;">
            <div>
                <h4>Room Capacity</h4>
                <input type="radio" name="rdoCapacity" value="Single"> Single<br>
                <input type="radio" name="rdoCapacity" value="Double"> Double<br>
                <input type="radio" name="rdoCapacity" value="Family"> Family
            </div>

            <div>
                <h4>Room Type</h4>
                <input type="radio" name="rdoType" value="Regular"> Regular<br>
                <input type="radio" name="rdoType" value="De Luxe"> De Luxe<br>
                <input type="radio" name="rdoType" value="Suite"> Suite
            </div>

            <div>
                <h4>Payment Type</h4>
                <input type="radio" name="rdoPayment" value="Cash"> Cash<br>
                <input type="radio" name="rdoPayment" value="Cheque"> Cheque<br>
                <input type="radio" name="rdoPayment" value="Credit"> Credit Card
            </div>
        </div>

        <br><br>
        <input type="submit" value="Submit Reservation" style="width: auto; padding: 10px 20px;">
        <input type="reset" value="Clear Entry" style="width: auto; padding: 10px 20px; background-color: #7f8c8d;">
    </form>
</div>