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
            <form id="PHP_form" >
            <label for="name">Použivateľské meno:</label><br>
            <input id="name" type="text" name="username" ><br>

            <label for="email">Email:</label><br>
            <input id="email" type="email" name="username" ><br>

            Viete programovať ?<br>
            <ul>
            <li><label for="YES" class="radios">Áno <input type="radio" id ="YES"  name="printer"  value="Ano"  > <span class = "checker"></span></label></li>
            <li><label for="NO" class="radios">Nie <input type="radio" id ="NO"  name="printer"  value="nie"  > <span class = "checker"> </span></label></li>
            </ul>
            <br>

            Programujete v ?:<br>
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
            <input type="text" name="sposob" id="timme" size="15"
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

        <?php
            $name = test_input($_POST["username"]);
            $email = test_input($_POST["email"]);
            $prog = test_input($_POST["prog"]);
            $
            $
            $
          $comment = test_input($_POST["comment"]);
          $gender = test_input($_POST["gender"]);

        ?>
    </body>
</html>