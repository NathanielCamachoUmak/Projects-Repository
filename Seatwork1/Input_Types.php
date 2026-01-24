<?php
// Script name: Ritual_Inscription.php
?>
<!DOCTYPE html>
<html> 
<head> 
    <title> The Great Inscription </title> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=UnifrakturMaguntia&family=MedievalSharp&display=swap');

        body {
            background-color: #0a0a0a;
            background-image: url('https://www.transparenttextures.com/patterns/dark-matter.png');
            color: #d4af37;
            font-family: 'MedievalSharp', cursive;
            display: flex;
            justify-content: center;
            padding: 50px 0;
        }

        .grimoire-form {
            background: #1a0a0a;
            border: 3px double #8b0000;
            padding: 40px;
            width: 650px;
            box-shadow: 0 0 50px #000, inset 0 0 20px #4a0000;
        }

        h2 {
            font-family: 'UnifrakturMaguntia', serif;
            color: #ff0000;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 30px;
            text-shadow: 0 0 10px #ff0000;
        }

        b { color: #8b0000; letter-spacing: 2px; text-transform: uppercase; }

        /* Styling the Input Fields to look Occult */
        input[type="text"], select, textarea {
            background: #2c0000;
            border: 1px solid #4a0000;
            color: #ff0000;
            padding: 8px;
            margin: 5px 0 15px 0;
            font-family: 'MedievalSharp', cursive;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="checkbox"], input[type="radio"] {
            accent-color: #ff0000; /* Modern CSS to make circles/boxes red */
            margin-bottom: 10px;
        }

        .btn-ritual {
            background: #8b0000;
            color: #000;
            border: none;
            padding: 15px 30px;
            font-family: 'UnifrakturMaguntia', serif;
            font-size: 1.3rem;
            cursor: pointer;
            transition: 0.3s;
            margin-top: 20px;
        }

        .btn-ritual:hover {
            background: #ff0000;
            box-shadow: 0 0 15px #ff0000;
        }

        .btn-clear {
            background: transparent;
            color: #666;
            border: 1px solid #444;
            padding: 10px;
            font-family: 'MedievalSharp', cursive;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="grimoire-form">
    <h2>The Inscription of Souls</h2>
    
    <form action="Input_Types_Outputs.php" method="post">
        <b>Identity Inscription</b> <br>
        True Name: 
        <input type="text" name="txtName" placeholder="Last, First Middle"> <br>
        Cycles of Existence (Age): <input type="text" name="txtAge"> <br>
        Academic Coven (Course): <input type="text" name="txtCourse"> <br> <br>
        
        <b>Secret Societies</b> <br>
        Art thou an officer of the COMSOC Brotherhood?<br>
        <input type="checkbox" name="chkYes"> Aye, I lead them. <br> 
        <input type="checkbox" name="chkYes"> NEIN, I BESEECH THEM!!! <br> <br>
        
        <b>Sacred Disciplines</b> <br>
        Which arcane arts dost thou favor? <br>
        <input type="checkbox" name="chkCP" value="Computer Programming"> The Logic of Ancients (Programming) <br>
        <input type="checkbox" name="chkCG" value="Computer Graphics"> Visual Illusions (Graphics) <br>
        <input type="checkbox" name="chkWBA" value="Web Based Application"> The Global Web (WBA) 
        <br> <br> 
        
        <b>Philosophical Alignment</b> <br> 
        Which path dost thou tread? <br>
        <input type="radio" name="rdo" value="Microsoft" checked="TRUE"> The Gilded Cage (Microsoft) <br>
        <input type="radio" name="rdo" value="Open Source"> The Free Spirit (Open Source) <br>
        <input type="radio" name="rdo" value="No comment"> The Silent Void <br> <br> 
        
        <b>Post-Ascension Labor</b> <br> 
        What task shalt thou perform after the Great Graduation? <br>
        <select name="cboJob">
            <option> Voice of the Collective (Call Center) </option> 
            <option> Architect of Logic (Programmer) </option> 
            <option> Servant of the Office </option> 
            <option> Herald of Knowledge (Instructor) </option> 
        </select> <br> <br>
        
        <b>The Great Thesis</b> <br> 
        Which forbidden scroll shalt thou translate? <br>
        <select name="lstThesisTitle" multiple style="height: 100px;">
            <option> Web Based/On-Line Application </option> 
            <option> Network-Based Application </option> 
            <option> System/Software Development </option> 
            <option> Computer Aided Instruction </option> 
        </select> <br> <br>
        
        <b>Final Incantations</b> <br>
        Speak thy mind into the void: <br>
        <textarea name="txtaComments" cols="50" rows="5"> </textarea> <br> <br>
        
        <div style="text-align: center;">
            <input type="submit" value="Invoke Manifestation" class="btn-ritual">
            <input type="reset" value="Banish Entries" class="btn-clear">
        </div>
    </form>
</div>

</body>
</html>