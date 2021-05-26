<?php

function palindromeCheck($string)
{

    $stringrev = strrev($string);

    if (strcasecmp($string, $stringrev) == 0) {
        echo "true, your value is a palindrome";
    } else {
        echo "false, your value is not a palindrome";
    }
}

function requiredFields()
{
    if ($_POST["string"] != null) {

        return true;
    } else {
        return false;
    }
}

?>

<!DOCTYPE html>
<head>
    <title>Palindrome</title>
</head>
<body>

    <div>
        <h3>Palindrome Checking </h3>
        <p>Insert a value</p>
        <form action="./palindrome.php" method="POST">

            <label for="string">Value</label>
            <input id="string" type="text" name="string" value=<?php echo "$_POST[string]"; ?>>


            

            <button type="submit">submit</button>
        </form>


        <?php
        if (requiredFields()) {
            if (isset($_POST["string"])) {
                palindromeCheck($_POST["string"]);
            }
        } else {
            echo "<p class='error'>Give a string value</p>";
        }
        ?>
    </div>
</body>

</html>