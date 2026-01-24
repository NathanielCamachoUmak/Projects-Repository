<html>
<head>
    <title>TERMINAL_ENTRY_V1</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="card">
        <h2>> SYSTEM_DATA_ENTRY_UNSECURED</h2>
        <p class="error">[WARNING: NO_VALIDATION_ACTIVE]</p>
        
        <form action="SampleOutput_1.php" method="post">
            [USER_ID_PROMPT] Enter name: 
            <input type="text" name="txtName" autocomplete="off">
            
            [AGE_DATA_PROMPT] Enter age: 
            <input type="text" name="txtAge" autocomplete="off">
            
            [COMMS_LINK_PROMPT] Enter phone: 
            <input type="text" name="txtPhone" autocomplete="off">
            
            [CREDIT_VAL_PROMPT] Enter bill: 
            <input type="text" name="txtBill" autocomplete="off">
            
            <br><br>
            <input type="submit" name="btnSubmit" value="INITIALIZE_TRANSFER">
            <input type="reset" value="PURGE_INPUT">
        </form>
    </div>
</body>
</html>