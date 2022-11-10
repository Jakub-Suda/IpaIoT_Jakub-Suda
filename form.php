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
                <li><input type="radio" id ="YES"  name="printer"  value="Ano"  > <label for="YES">Áno</label></li>
                <li><input type="radio" id ="NO"  name="printer"  value="nie"  > <label for="NO">Nie</label></li>
            </ul>
            <br>

            Programujete v ?:<br>
            <ul>
                <li><input type="checkbox" id="praca" name="praca" value="praca">
                    <label for="praca"> C#</label></li>
                <li><input type="checkbox" id="doma" name="doma" value="doma">
                    <label for="doma"> Java</label></li>
                <li><input type="checkbox" id="studujem" name="studujem" value="studujem">
                    <label for="studujem"> PHP</label></li>
            </ul>
            <br>

            <label class="long" for="tlacenie">Ako často programujete ?</label><br>
            <input type="text" name="sposob" id="tlacenie" size="15"
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
    </body>
</html>