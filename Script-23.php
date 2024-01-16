<html>
    <body>
        <form method=post>
            Enter value 1 : <input type=number name='val1' /><br><br>
            Enter value 2 : <input type=number name='val2' /><br><br>
            Enter value 3 : <input type=number name='val3' /><br><br>
            <input type=submit name='submit' />
        </form>
    </body>
</html>
<?php

    $v1=$_REQUEST['val1'];
    $v2=$_REQUEST['val2'];
    $v3=$_REQUEST['val3'];
    if ($v1 > $v2)
    {
        if($v1 > $v3)
        {
            echo "$v1 is largest value";
        }
        else
        {
            echo "$v3 is largest value";
        }
    }
    else
    {
        if($v2 > $v3)
        {
            echo "$v2 is largest value";
        }
        else
        {
            echo "$v3 is largest value";
        }
    }

?>