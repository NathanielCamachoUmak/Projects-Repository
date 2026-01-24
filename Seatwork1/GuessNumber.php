<html>
<head>
    <title>TERMINAL_DECISION_LOGIC</title>
    <link rel="stylesheet" href="css.css">
</head>
<body style="font-family: 'Courier New', Courier, monospace; text-align: center; padding-top: 50px;">
    
    <div class="card">
    <?php if (!isset($_POST['guess'])): ?>
        <h2>> system_guess_game_init</h2>
        <form action="" method="post">
            [INPUT_REQUIRED] Think of a number from 1-10:
            <input type="text" name="guess" style="padding: 5px; width: 50px;" autocomplete="off">
            <br><br>
            <input type="submit" value="RUN_DIAGNOSTIC" style="padding: 10px;">
        </form>
        
    <?php else: ?>
        <h2>> system_guess_result</h2>
        <?php
            $guess = $_POST['guess'];

            if (empty($guess) && $guess !== "0") {
                echo "<h3 class='error'>> ERROR: NULL_INPUT_DETECTED</h3>";
                echo "MESSAGE: Please insert a number to proceed with diagnostic.";
            } else {
                $num = rand(1, 10);

                echo "<h3>> ACCESSING_LOGS...</h3>";

                if ($guess > $num) {
                    echo "MESSAGE: Your guess is too high. <br> TARGET_VALUE: $num";
                } elseif ($guess < $num) {
                    echo "MESSAGE: Your guess is too low. <br> TARGET_VALUE: $num";
                } else {
                    echo "<b style='color: #00FF41;'>SUCCESS: You're Right!</b> <br> TARGET_VALUE: $num";
                }
            }
        ?>
        <br><br>
        <form action="GuessNumber.php" method="get">
            <button type="submit" style="padding: 10px;">[REBOOT_SYSTEM]</button>
        </form>
    <?php endif; ?>
    </div>

</body>
</html>