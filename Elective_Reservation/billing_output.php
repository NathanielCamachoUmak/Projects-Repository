<?php
// Inside billing_output.php
if (isset($_POST['dateFrom']) && isset($_POST['dateTo'])) {
    $date1 = new DateTime($_POST['dateFrom']);
    $date2 = new DateTime($_POST['dateTo']);
    
    // Calculate the difference
    $interval = $date1->diff($date2);
    $days = $interval->days;

    // Ensure at least 1 day is charged if they stay for part of a day
    if ($days == 0) $days = 1; 
} else {
    $days = 1; // Default fallback
}
?>