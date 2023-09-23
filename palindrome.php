<?php

class palindrome
{
    function palindrome_cal($text_in)
    {
        $temp = "";
        for ($i = 0; $i < strlen($text_in); $i++) {
            $temp .= $text_in[strlen($text_in) - $i - 1];
        }
        return $temp;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="get">
        <input type="text" name="text_in" id="text_in">
        <button type="submit" name="submit"> Submit </button>
    </form>
    <?php
    if (isset($_GET['submit'])) {
        $palindrome = new palindrome();
        $hasil = $palindrome->palindrome_cal($_GET['text_in']);
        echo "Input = " .  $_GET['text_in'] . "<br \>";
        echo "Reverse = " .  $hasil . "<br \>";
        if ($hasil === $_GET['text_in']) {
            echo "Palindrome";
        } else {
            echo 'Not Palindrome';
        }
    }
    ?>

</body>

</html>