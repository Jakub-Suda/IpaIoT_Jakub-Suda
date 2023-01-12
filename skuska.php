
<!DOCTYPE html>
<html lang="sk">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Konverter</title>
    </head>
    <body >

        <header ><h1>PHP_form</h1></header>
        
            <form id="PHP_form" method="get" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="opinion">Input string</label><br>
            <textarea name="Text" id="opinion"
                    lang="sk"
                    cols="75" rows="5" value="This is IPaIoT final exam I've been preparing for. The exam is easy and teacher is great."> </textarea>
            <br>
            <input type="reset" value="reset" >
            <input type="submit" value="submit" >
            </form>
        </div>


        <?php 
            $opinion = $_GET["Text"];
            $converted = str_split($opinion);
            echo "CONVERTED string to array: "
            echo "<pre>";
            print_r($converted);
            echo "</pre>";
        ?>
    </body>
</html>