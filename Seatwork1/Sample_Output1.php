<html>
<head>
    <title>TERMINAL_OUTPUT_V1</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="card">
        <h2>> DATA_STREAM_RECEIVED</h2>
        <p style="color: #888;">STATUS: RAW_UNFILTERED_LOGS</p>

        <?php
        echo "<p><b>[NODE_IDENTITY]: </b>" . $_POST['txtName'] . "</p>";
        echo "<p><b>[TEMPORAL_STAT]: </b>" . $_POST['txtAge'] . "</p>";
        echo "<p><b>[COMMS_ADDRESS]: </b>" . $_POST['txtPhone'] . "</p>";
        echo "<p><b>[CREDIT_BALANCE]: </b>" . $_POST['txtBill'] . "</p>";
        ?>

        <br>
        <form action="SampleInput_1.php" method="get">
            <button type="submit">> RETURN_TO_ENTRY_NODE</button>
        </form>
    </div>
</body>
</html>