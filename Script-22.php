<html>
    <form method=post>
        Enter Radius : <input type=number name=rad />
</html>

<?php 

    $r=$_REQUEST['rad'];
    $cir=3.14*r*r;
    echo "Area of Circle : ".$cir;

?>