<?php
session_start();

// Redirect back if no data is found
if (!isset($_POST['txtName']) && !isset($_SESSION['reservation_data'])) {
    header("Location: reservation_form.php");
    exit();
}

// Get data from POST or SESSION
$data = $_POST; 

// Simple Pricing Logic
$rates = ["Single" => 100, "Double" => 150, "Family" => 250];
$multipliers = ["Regular" => 1.0, "De Luxe" => 1.2, "Suite" => 1.5];

$basePrice = $rates[$data['rdoCapacity']] ?? 0;
$multiplier = $multipliers[$data['rdoType']] ?? 1.0;
$totalPerNight = $basePrice * $multiplier;

// Calculate Nights
$date1 = new DateTime($data['dateFrom']);
$date2 = new DateTime($data['dateTo']);
$nights = $date1->diff($date2)->days;
$nights = ($nights <= 0) ? 1 : $nights; // Ensure at least 1 night

$grandTotal = $totalPerNight * $nights;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reservation Billing Summary</title>
    <style>
        body { font-family: sans-serif; background: #f4f7f6; padding: 40px; }
        .billing-card { max-width: 600px; background: white; margin: auto; padding: 20px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0,0,0,0.1); }
        h2 { color: #2c3e50; border-bottom: 2px solid #3498db; padding-bottom: 10px; }
        .row { display: flex; justify-content: space-between; padding: 10px 0; border-bottom: 1px solid #eee; }
        .total-row { font-weight: bold; font-size: 1.2em; color: #e74c3c; border: none; }
        .btn { display: inline-block; padding: 10px 20px; background: #3498db; color: white; text-decoration: none; border-radius: 4px; margin-top: 20px; }
    </style>
</head>
<body>

<div class="billing-card">
    <h2>Reservation Summary</h2>
    
    <div class="row"><span>Customer:</span> <strong><?php echo htmlspecialchars($data['txtName']); ?></strong></div>
    <div class="row"><span>Contact:</span> <strong><?php echo htmlspecialchars($data['txtContact']); ?></strong></div>
    <div class="row"><span>Stay Dates:</span> <span><?php echo $data['dateFrom']; ?> to <?php echo $data['dateTo']; ?> (<?php echo $nights; ?> Night/s)</span></div>
    
    <h3>Room Details</h3>
    <div class="row"><span>Room Capacity:</span> <strong><?php echo $data['rdoCapacity']; ?></strong></div>
    <div class="row"><span>Room Type:</span> <strong><?php echo $data['rdoType']; ?></strong></div>
    <div class="row"><span>Rate per Night:</span> <strong>$<?php echo number_format($totalPerNight, 2); ?></strong></div>
    
    <h3>Payment</h3>
    <div class="row"><span>Method:</span> <strong><?php echo $data['rdoPayment']; ?></strong></div>
    <div class="row total-row"><span>Grand Total:</span> <span>$<?php echo number_format($grandTotal, 2); ?></span></div>

    <a href="#" onclick="window.print();" class="btn">Print Receipt</a>
    <a href="your_form_page.php" class="btn" style="background:#7f8c8d;">Back to Reservation</a>
</div>

</body>
</html>
