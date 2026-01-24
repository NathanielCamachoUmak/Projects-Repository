<?php
// Holidays.php - The Ritual of the Great Journey

// We use an associative array (Pricing Matrix) for high Writability and Reliability
$pricing_matrix = [
    "HongKong"  => ["three" => 666, "five" => 999],
    "Singapore" => ["three" => 1313, "five" => 1666],
    "Malaysia"  => ["three" => 333,  "five" => 666]
];

// Capture the essence from the POST array
$destination = $_POST['rdoDestination'] ?? '';
$hotelType = $_POST['rdoHotel'] ?? '';

// Check if the entry exists in our matrix to ensure Reliability
if (isset($pricing_matrix[$destination][$hotelType])) {
    $total_price = $pricing_matrix[$destination][$hotelType];
    $isValid = true;
} else {
    $isValid = false;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>The Sealed Ritual</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=MedievalSharp&display=swap');

        body {
            background-color: #0d0d0d;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .occult-container {
            background: url('https://www.transparenttextures.com/patterns/parchment.png'), #1a0a0a;
            color: #d4af37;
            padding: 50px;
            max-width: 600px;
            border: 3px double #8b0000;
            box-shadow: 0 0 30px #000, inset 0 0 50px #000;
            text-align: center;
            font-family: 'MedievalSharp', cursive;
        }

        .occult-container::before {
            content: "⛧";
            font-size: 50px;
            color: #8b0000;
            display: block;
            margin-bottom: 10px;
        }

        h2 {
            font-family: 'UnifrakturMaguntia', serif;
            color: #ff0000;
            text-shadow: 2px 2px #000;
            letter-spacing: 3px;
        }

        .offering-amount {
            font-size: 3rem;
            color: #ff0000;
            font-family: 'UnifrakturMaguntia', serif;
            margin: 20px 0;
            text-shadow: 0 0 10px #ff0000;
        }

        .ritual-status {
            border-top: 1px solid #8b0000;
            border-bottom: 1px solid #8b0000;
            padding: 20px 0;
            margin: 20px 0;
            font-style: italic;
        }

        .btn-return {
            display: inline-block;
            color: #ff0000;
            text-decoration: none;
            border: 1px solid #ff0000;
            padding: 10px 20px;
            transition: 0.5s;
            margin-top: 20px;
        }

        .btn-return:hover {
            background: #ff0000;
            color: #000;
            box-shadow: 0 0 15px #ff0000;
        }
    </style>
</head>
<body>

<div class="occult-container">
    <?php if ($isValid): ?>
        <h2>THE RITUAL IS SEALED</h2>
        <p>Thy journey to the lands of <strong><?= strtoupper($destination) ?></strong> is ordained.</p>
        
        <div class="ritual-status">
            The <?= $hotelType ?>-star sanctuary awaits thy presence.
        </div>

        <p>Required Tribute:</p>
        <div class="offering-amount">† <?= number_format($total_price, 0) ?> Souls</div>
        
        <p>Your name has been inscribed in the Great Ledger of PAPSI. Seek no escape, for the journey is inevitable.</p>
        <br>
        <a href="Holidays.html" class="btn-return">SUBMIT ANOTHER TRIBUTE</a>
    <?php else: ?>
        <h2 style="color: #666;">THE VOID REJECTS THEE</h2>
        <p>An unworthy entry was detected. Thy signals are clouded.</p>
        <a href="javascript:history.back()" class="btn-return">RETRY THE RITUAL</a>
    <?php endif; ?>
</div>

</body>
</html>