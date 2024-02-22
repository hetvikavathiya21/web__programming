<html>
 <head>
    <meta http-equiv="refresh" content="1">
    <style>
        body {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: black;
           
            font-size: 50px;
        }
		.t{
			color: red;
		}
		.h{
			color:white;
		}
    </style>
</head>

 <body>
   <table border=2 class=t>
    <tr bgcolor="maroon">
	<td>
	    <?php
	       date_default_timezone_set("Asia/Calcutta");
           echo date("h:");  
        ?>
    </td>
	<td>
	<?php
	   date_default_timezone_set("Asia/Calcutta");
	   echo date("i:");
	 ?>
	 </td>
	 <td>
	<?php
	   date_default_timezone_set("Asia/Calcutta");
	    echo date("s a");
	 ?>
	 </td>
	
	</tr>
	<tr class=h>
	   <td>Hour</td>
	   <td>Minutes</td>
	   <td>Seconds</td>
	</tr>
   </table>
 </body>
</html>