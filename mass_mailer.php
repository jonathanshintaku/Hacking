<html>
<head>
</head>
<body>
<form action="mass_mailer.php" method="POST">
<h2>This is a very basic example of a mass mailer script.</h2>
<br><br><br>
<pre>
Email Address:    <input type="text" name="email"> <br>
How many e-mails? <input type="text" name="number"> <br>
</pre>
<input type="submit" name = "submit" value="Send Mail!">
</form>
<br>
<br>
<br>
</body>
</html>

<?php

if(isset($_POST["submit"])){

    if(!ereg("[0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-z]",$_POST["email"])){
        echo "Please enter a valid email address. Thanks.<br>";
    }else{
       
    $txt = "Have a wonderfull day!";

    // Use wordwrap() if lines are longer than 70 characters
    $txt = wordwrap($txt,70);

        // Send email
        while($i != $_POST["number"])
        {
            mail($_POST["email"], "Hello from Spambot!",$txt);
            $i++;
          
        }
        echo "<br>";
        echo "Successfully sent ";
        echo $_POST["number"];
            if($_POST["number"] == 1){
                echo " email to ";
            }else{
                echo " emails to ";
            }
        echo $_POST["email"];
    }
}

?>

