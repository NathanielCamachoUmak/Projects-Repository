<?php
// Define the pricing matrix - The "Tribute" rates
$pricing_matrix = [
    "HongKong"  => ["three" => 666, "five" => 999],
    "Singapore" => ["three" => 1313, "five" => 1666],
    "Malaysia"  => ["three" => 333,  "five" => 666]
];

$destination = $_POST['rdoDestination'] ?? '';
$hotelType = $_POST['rdoHotel'] ?? '';

if (isset($pricing_matrix[$destination][$hotelType])) {
    $total_price = $pricing_matrix[$destination][$hotelType];
    $isValid = true;
} else {
    $isValid = false;
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=MedievalSharp&display=swap');

    .occult-container {
        background: url('https://www.transparenttextures.com/patterns/parchment.png'), #2c0000;
        background-color: #1a0a0a;
        color: #d4af37; /* Gold text */
        padding: 50px;
        max-width: 600px;
        margin: 50px auto;
        border: 3px double #8b0000;
        box-shadow: 0 0 30px #000, inset 0 0 50px #000;
        text-align: center;
        font-family: 'MedievalSharp', cursive;
        position: relative;
    }

    .occult-container::before {
        content: "⛧";
        font-size: 50px;
        color: #8b0000;
        display: block;
        margin-bottom: 10px;
    }

    h2, h3 {
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
        color: #ff0000;
        text-decoration: none;
        border: 1px solid #ff0000;
        padding: 10px 20px;
        transition: 0.5s;
    }

    .btn-return:hover {
        background: #ff0000;
        color: #000;
        box-shadow: 0 0 15px #ff0000;
    }
</style>

<div class="occult-container">
    <?php if ($isValid): ?>
        <h2>THE RITUAL IS SEALED</h2>
        <p>Thy journey to the lands of <strong><?php echo strtoupper($destination); ?></strong> is ordained.</p>
        
        <div class="ritual-status">
            The <?php echo $hotelType; ?>-star sanctuary awaits thy presence.
        </div>

        <p>Required Tribute:</p>
        <div class="offering-amount">† <?php echo number_format($total_price, 0); ?> Souls</div>
        
        <p>Your name has been inscribed in the Great Ledger of PAPSI. Seek no escape, for the journey is inevitable.</p>
        <br><br>
        <a href="index.php?page=reservation" class="btn-return">SUBMIT ANOTHER TRIBUTE</a>
    <?php else: ?>
        <h2 style="color: #666;">THE VOID REJECTS THEE</h2>
        <p>An unworthy entry was detected. Thy signals are clouded.</p>
        <a href="javascript:history.back()" class="btn-return">RETRY THE RITUAL</a>
    <?php endif; ?>
</div>