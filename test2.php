<form action="" method="post">
    <input type="radio" name="aba" value="Include">Include
    <input type="radio" name="aba" value="Neutral">Neutral
    <input type="radio" name="aba" value="Exclude">Exclude
    <input type="submit" name="submit" value="Get Selected Values" />
</form>
<?php
    if (isset($_POST['submit'])) {
        if(isset($_POST['aba']))
        {
            echo "You have selected :".$_POST['aba'];  //  Displaying Selected Value
        }
    }
?>