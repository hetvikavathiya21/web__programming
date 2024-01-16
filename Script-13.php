<html>
    <body>
        <form metod=post>
        Enter Temperature in Celsius:<input type="number" name="celsius" /><br><br>
        <input type="submit" value="submit">
        </form>
    </body>
</html>

<?php

    $c = $_REQUEST["celsius"];
    $f = ($c * 9/5) + 32;
    echo "Temperature in Fahrenheit : " . $f . " °F";

?>