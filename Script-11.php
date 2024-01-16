<html>
    <body>
        <form method=post>
            Enter Value:<input type=number name='val' />
        </form>
    </body>
</html>

<?php 

    $oe=$_REQUEST['val'];
    
    if ($oe%2==0)
    {
        echo "Given number is even";
    }
    else
    {
        echo "Given number is odd";
    }

?>