<?php
$name = ctype_alpha($_POST['txtName']) ? $_POST['txtName'] : "ERROR: INVALID_CHARACTERS_DETECTED (a-z only)";
$age = ctype_digit($_POST['txtAge']) ? $_POST['txtAge'] : "ERROR: NON_INTEGER_VALUE_DETECTED";

if(empty($_POST['txtPhone'])) {
    $phone = "ERROR: COMMS_CHANNEL_NULL";
} else {
    $phone = $_POST['txtPhone'];
}

$bill = is_numeric($_POST['txtBill']) ? $_POST['txtBill'] : "ERROR: UNAUTHORIZED_SYMBOLS_IN_CREDITS";
?>

<html>
<head>
    <title>TERMINAL_VALIDATION_RESULT</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="card">
        <h2>> DECRYPTED_VALIDATION_STREAM</h2>
        
        <p><b>[NAME_NODE]:</b> <?php echo $name; ?></p>
        <p><b>[AGE_VALUE]:</b> <?php echo $age; ?></p>
        <p><b>[COMMS_ID]:</b> <?php echo $phone; ?></p>
        <p><b>[CREDIT_TOTAL]:</b> <?php echo $bill; ?></p>
        
        <br>
        <form action="Sample_Input2.php" method="get">
            <button type="submit">> RETURN_TO_ENTRY_NODE</button>
        </form>
    </div>
</body>
</html>