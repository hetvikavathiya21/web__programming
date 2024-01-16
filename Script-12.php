<html>
    <body>
        <form method=post>
            Enter String 1 :<input type=text name='string1' /><br><br>
            Enter String 2 :<input type=text name='string2' /><br><br>
            <input type=submit name='submit' />
        </form>
    </body>
</html>

<?php 

    $str1=$_REQUEST['string1'];
    $str2=$_REQUEST['string2'];

    $cstr= $str1 . " " . $str2;
    
    echo "Combined String : " . $cstr ;

?>