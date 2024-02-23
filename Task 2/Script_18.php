<?php

//Write a PHP script that generates a random number between 1 and 10 and lets the user guess it.

echo"<form>
            <label for='guess'>Guess a Number: </label> 
            <input type='text' name='guess' />
            <br />
            <input type='submit' name='submit' />
        </form>";
    if (isset($_REQUEST['submit']))
    {
        if (isset($_REQUEST['guess']))
        {
           $rn=rand(1,10);
           $user_guess = $_REQUEST['guess'];
           echo "<br> Random number : ".$rn;

               if($user_guess >= 1 && $user_guess <= 10)
               {
	              if($rn == $user_guess)
	              {
		              echo "<br> Congratulations! Your guess is correct.";
	              }
	              else
	              {
		             echo "<br> Sorry ,Your guess is incorrect. The Correct number is ".$rn;
	              }

               }
               else
               {
	                 echo "<br> Please enter a valid guess between 1 to 10.";
               }
        }
	}
?>