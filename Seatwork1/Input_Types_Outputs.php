<?php
// Script name: Ritual_Manifestation.php
// The names inside [''] MUST match the 'name' in your form exactly
$name     = htmlspecialchars($_POST['txtName'] ?? 'Unknown Soul');
$age      = htmlspecialchars($_POST['txtAge'] ?? '??');
$course   = htmlspecialchars($_POST['txtCourse'] ?? 'Undecided Path');
$gender   = $_POST['rdo'] ?? 'Unspecified';
$job      = $_POST['cboJob'] ?? 'Drifter';
$comments = htmlspecialchars($_POST['txtaComments'] ?? 'The void is silent...');
$thesis   = $_POST['lstThesisTitle'] ?? 'NONE';
?>

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

    .summoning-scroll {
        background: #1a0a0a;
        background-image: url('https://www.transparenttextures.com/patterns/parchment.png');
        color: #d4af37;
        padding: 50px;
        width: 700px;
        border: 2px solid #4a0000;
        box-shadow: 0 0 40px #ff0000;
        font-family: 'MedievalSharp', cursive;
        position: relative;
        line-height: 1.6;
    }

    .summoning-scroll::after {
        content: "";
        position: absolute;
        top: 0; left: 0; right: 0; bottom: 0;
        border: 1px solid #8b0000;
        margin: 10px;
        pointer-events: none;
    }

    h2 {
        font-family: 'UnifrakturMaguntia', serif;
        text-align: center;
        color: #ff0000;
        font-size: 2.5rem;
        margin-top: 0;
        text-shadow: 0 0 15px #000;
        border-bottom: 2px solid #8b0000;
    }

    .output-sector {
        margin-bottom: 25px;
        padding: 15px;
        background: rgba(0, 0, 0, 0.3);
        border-left: 3px solid #8b0000;
    }

    .sector-label {
        font-family: 'UnifrakturMaguntia', serif;
        color: #ff0000;
        font-size: 1.2rem;
        display: block;
        margin-bottom: 5px;
    }

    .essence-list {
        list-style-type: "† ";
        padding-left: 20px;
        color: #d4af37;
    }

    .comment-scroll {
        font-style: italic;
        color: #bdc3c7;
        padding: 10px;
        border: 1px dashed #4a0000;
    }
</style>

<div class="summoning-scroll">
    <h2>Manifestation of Attributes</h2>

    <div class="output-sector">
        <span class="sector-label">Identity Essence (TextFields)</span>
        Greetings, <strong><?= $name ?></strong>.<br>
        Thy existence spans <strong><?= $age ?></strong> cycles.<br>
        Thy chosen discipline: <strong><?= $course ?></strong>.
    </div>

    <div class="output-sector">
        <span class="sector-label">Vows & Affiliations (Checkboxes)</span>
        <?php if (isset($_POST['chkYes'])): ?>
            Status: <strong>Vow Confirmed (<?= $_POST['chkYes'] ?>)</strong><br>
        <?php endif; ?>
        
        <em>Sacred Subjects of Mastery:</em>
        <ul class="essence-list">
            <?php if (isset($_POST['chkCP'])) echo "<li>" . $_POST['chkCP'] . "</li>"; ?>
            <?php if (isset($_POST['chkCG'])) echo "<li>" . $_POST['chkCG'] . "</li>"; ?>
            <?php if (isset($_POST['chkWBA'])) echo "<li>" . $_POST['chkWBA'] . "</li>"; ?>
        </ul>
    </div>

    <div class="output-sector">
        <span class="sector-label">The Dichotomy (Radio Buttons)</span>
        Thou hast aligned with: <strong><?= $gender ?></strong>
    </div>

    <div class="output-sector">
        <span class="sector-label">Destiny Path (ComboBox & ListBox)</span>
        Future Role: <strong><?= $job ?></strong><br>
        Inscribed Thesis: <strong><?= $thesis ?></strong>
    </div>

    <div class="output-sector">
        <span class="sector-label">Final Incantations (TextArea)</span>
        <div class="comment-scroll">
            "<?= nl2br($comments) ?>"
        </div>
    </div>

    <div style="text-align: center; font-size: 0.8rem; opacity: 0.5; margin-top: 30px;">
        The Scroll of PAPSI remains eternal.
    </div>
</div>