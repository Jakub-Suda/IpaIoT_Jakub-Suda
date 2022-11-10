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
            <input id="name" type="text" name="username" required><br>

            <label for="email">Email:</label><br>
            <input id="email" type="email" name="username" required><br>

            Viete programovať ?<br>
            <ul>
                <li><input type="radio" id ="YES"  name="prog"  value="Ano"  > <label for="YES">Áno</label></li>
                <li><input type="radio" id ="NO"  name="prog"  value="nie"  > <label for="NO">Nie</label></li>
            </ul>
            <br>

            Programujete v ?:<br>
            <ul>
                <li><input type="checkbox" id="praca" name="C#" value="C#">
                    <label for="praca"> C#</label></li>
                <li><input type="checkbox" id="Java" name="Java" value="Java">
                    <label for="doma"> Java</label></li>
                <li><input type="checkbox" id="PHP" name="PHP" value="PHP">
                    <label for="studujem"> PHP</label></li>
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
                    lang="sk" required
                    cols="100" rows="5"></textarea>
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