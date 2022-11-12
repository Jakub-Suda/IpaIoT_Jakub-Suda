<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form</title>
        <link rel="stylesheet" href="/style.css" media="screen">
    </head>
    <body class="grid-container">

        <header class="header"><h1>PHP_form</h1></header>
        
        <div class="end">
            <form id="PHP_form" method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="name">Použivateľské meno:</label><br>
            <input id="name" type="text" name="username" ><br>

            <label for="email">Email:</label><br>
            <input id="email" type="email" name="email" ><br>

            Pohlavie :<br>
            <ul>
            <li><label for="Male" class="radios">Muž <input type="radio" id ="Male"  name="gender"  value="Male"  > <span class = "checker"></span></label></li>
            <li><label for="Female" class="radios">Žena <input type="radio" id ="Female"  name="gender"  value="Female"  > <span class = "checker"> </span></label></li>
            </ul>
            <br>


            Viete programovať ?<br>
            <ul>
            <li><label for="YES" class="radios">Áno <input type="radio" id ="YES"  name="coding"  value="Ano"  > <span class = "checker"></span></label></li>
            <li><label for="NO" class="radios">Nie <input type="radio" id ="NO"  name="coding"  value="nie"  > <span class = "checker"> </span></label></li>
            </ul>
            <br>

            Zaujíma Vás ?:<br>
            <ul>
            <li><label for="C" class="container">
                <input type="checkbox" id="C" name="C" value="C">
                <span class="checkmark"></span>
                C
                </label></li>
            <li><label for="Java" class="container">
                <input type="checkbox" id="Java" name="Java" value="Java">
                <span class="checkmark"></span>
                Java
                </label></li>
            <li><label for="PHP" class="container">
                <input type="checkbox" id="PHP" name="PHP" value="PHP">
                <span class="checkmark"></span>
                PHP
                </label></li>
            </ul>
            <br>

            <label class="long" for="timme">Ako často programujete ?</label><br>
            <input type="text" name="inter" id="timme" size="15"
                title="40 znakov max" maxlength="40"
                spellcheck="true" lang="sk"
                list="intervals"><br><br>
    
            <datalist id="intervals">
                <option>Každý deň</option>
                <option>Niekoľko raz do týždňa</option>
                <option>Raz za pár týždňov</option>
                <option>Vôbec</option>
            </datalist>

            <label for="opinion">Správa</label><br>
            <textarea name="Text" id="opinion"
                    lang="sk"
                    cols="75" rows="5"></textarea>
            <br>
            <br>
            <input type="reset" value="reset" >
            <input type="submit" value="submit" >
            </form>
        </div>
        <p>Pristup k suboru:</p>
        <a href="https://sudiplatform.azurewebsites.net/php_form.txt"> https://sudiplatform.azurewebsites.net/php_form.txt </a>

        <?php 
            $name = $_GET["username"];
            $email =$_GET["email"];
            $gender = $_GET["gender"];
            $coding = $_GET["coding"];
            $code_intervals = $_GET["inter"];
            $lang_C =$_GET["C"];
            $lang_Java = $_GET["Java"];
            $lang_PHP = $_GET["PHP"];
            $opinion = $_GET["Text"];

            $form_file = fopen("php_form.txt","w") or die("Unable to open file!");
            $content = "Username: " . $name . " email: " . $email . " gender: " . $gender . "\n". 
                        "Is coding ?: " . $coding . " Code intervals: " . $inter . "\n".
                        "Interested in: " . " C: " . $lang_C . " Java: " . $lang_Java . " PHP: " . $lang_PHP . "\n" .
                        "Message: " . $opinion;

            fclose($form_file);
            echo $content;
        ?>
    </body>
</html>