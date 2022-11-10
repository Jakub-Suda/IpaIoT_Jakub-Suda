<?php
        echo '<h1>index4.php web page with parameters</h1>';
        echo '<h2>https://sudiplatform.azurewebsites.net/index4.php?a=10&b=2</h2>';
        $sn1 = $_GET["a"];
        $sn2 = $_GET["b"];
        
        $text = "a=" . $sn1 . " b=" . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $text;
        echo "<br>";
        echo "Sum:" . $sum;
    ?>