<?php
// Grade_Computation.php - Ritualistic Edition
$nameErr = $midErr = $finErr = "";
$name = $midGrade = $finGrade = $semGrd = $remarks = $statusClass = "";
$isValid = false;

function testInput($data) {
    return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = testInput($_POST['txtName'] ?? '');
    $midGrade = testInput($_POST['txtMid'] ?? '');
    $finGrade = testInput($_POST['txtFin'] ?? '');

    $nameValid = !empty($name) && preg_match("/^[a-zA-Z .]*$/", $name);
    if (!$nameValid) $nameErr = "The Great Ledger requires a valid name.";

    $midValid = is_numeric($midGrade) && $midGrade >= 50 && $midGrade <= 100;
    if (!$midValid) $midErr = "Midterm resonance must be 50-100.";

    $finValid = is_numeric($finGrade) && $finGrade >= 50 && $finGrade <= 100;
    if (!$finValid) $finErr = "Final resonance must be 50-100.";

    if ($nameValid && $midValid && $finValid) {
        $isValid = true;
        $semGrd = ($midGrade + $finGrade) / 2;
        $remarks = ($semGrd >= 74.5) ? "ASCENDED" : "FORSAKEN";
        $statusClass = ($semGrd >= 74.5) ? "status-ascended" : "status-forsaken";
    }
}
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=MedievalSharp&display=swap');

    .grimoire-card {
        background: url('https://www.transparenttextures.com/patterns/dark-matter.png'), #1a0a0a;
        border: 4px double #8b0000;
        border-radius: 5px;
        padding: 40px;
        max-width: 600px;
        margin: auto;
        color: #d4af37;
        box-shadow: 0 0 50px #000, inset 0 0 100px #000;
        font-family: 'MedievalSharp', cursive;
    }

    .occult-title {
        font-family: 'UnifrakturMaguntia', serif;
        color: #ff0000;
        text-align: center;
        font-size: 2.5rem;
        text-shadow: 0 0 10px #ff0000;
        margin-bottom: 30px;
    }

    .sigil-input {
        background: #2c0000;
        border: 1px solid #8b0000;
        color: #ff0000;
        width: 100%;
        padding: 12px;
        margin-top: 5px;
        font-family: 'MedievalSharp', cursive;
    }

    .sigil-input:focus {
        outline: none;
        box-shadow: 0 0 10px #ff0000;
    }

    .btn-ritual {
        width: 100%;
        background: #8b0000;
        color: #000;
        border: none;
        padding: 15px;
        font-weight: bold;
        font-family: 'UnifrakturMaguntia', serif;
        font-size: 1.5rem;
        cursor: pointer;
        transition: 0.5s;
        margin-top: 20px;
    }

    .btn-ritual:hover {
        background: #ff0000;
        box-shadow: 0 0 20px #ff0000;
    }

    .ritual-result {
        text-align: center;
        background: rgba(0,0,0,0.6);
        padding: 30px;
        margin-top: 30px;
        border: 1px dashed #8b0000;
    }

    .resonance-circle {
        width: 120px; height: 120px; line-height: 120px;
        border: 3px solid #ff0000; border-radius: 50%;
        margin: 0 auto 15px; font-size: 2.5rem;
        font-family: 'UnifrakturMaguntia', serif;
        box-shadow: inset 0 0 20px #ff0000;
    }

    .status-ascended { color: #d4af37; text-shadow: 0 0 10px #d4af37; }
    .status-forsaken { color: #666; text-shadow: 0 0 5px #ff0000; text-decoration: line-through; }
    
    .error-text { color: #ff0000; font-size: 0.8rem; font-style: italic; }
</style>

<div class="grimoire-card">
    <div style="text-align: center; font-size: 2rem;">⛧</div>
    <h2 class="occult-title">Arcane Grade Ritual</h2>
    
    <form method="POST" action="">
        <div class="input-group">
            <label>The Soul's Identity</label>
            <input type="text" name="txtName" class="sigil-input" value="<?= $name ?>" placeholder="Inscribe name...">
            <span class="error-text"><?= $nameErr ?></span>
        </div>

        <div style="display: flex; gap: 20px; margin-top: 20px;">
            <div style="flex: 1;">
                <label>First Rite (50%)</label>
                <input type="number" name="txtMid" class="sigil-input" value="<?= $midGrade ?>">
                <span class="error-text"><?= $midErr ?></span>
            </div>
            <div style="flex: 1;">
                <label>Final Rite (50%)</label>
                <input type="number" name="txtFin" class="sigil-input" value="<?= $finGrade ?>">
                <span class="error-text"><?= $finErr ?></span>
            </div>
        </div>

        <button type="submit" class="btn-ritual">INVOKE JUDGMENT</button>
    </form>

    <?php if ($isValid): ?>
    <div class="ritual-result">
        <div class="resonance-circle"><?= round($semGrd, 0) ?></div>
        <h3 style="margin: 0; letter-spacing: 5px;">RESONANCE LEVEL</h3>
        <p>Subject: <strong><?= strtoupper($name) ?></strong></p>
        <div class="<?= $statusClass ?>" style="font-size: 2rem;"><?= $remarks ?></div>
        <div style="font-size: 0.7rem; margin-top: 10px; opacity: 0.5;">The judgment is final.</div>
    </div>
    <?php endif; ?>
</div>