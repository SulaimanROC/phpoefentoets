
<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<h1>Stappelkorting</h1>
<p>Welk product wordt gekocht?</p>
<form method="post">

    <input id="product-handdoek" type="radio" name="product" value="Handdoek">
    <label for="product-handdoek">Handdoek</label>
    <br>

    <input id="product-broek" type="radio" name="product" value="Broek">
    <label for="product-broek">Broek</label>
    <br>

    <input id="product-shirt" type="radio" name="product" value="Shirt">
    <label for="product-shirt">Shirt</label>
    <br>

    <input type="text" name="amount">
    <input type="submit" value="send">
</form>
</body>
</html>

<?php


if(isset($_POST['product']) && isset($_POST['amount'])) {
    if ($_POST['product']== "Shirt") {
        $korting = number_format(10 / 100 * 50 * $_POST['amount'], 2);
        echo "Shirt cost$korting";

    }

    if ($_POST['product']== "Broek") {
        $korting = number_format(17 / 100 * 70 * $_POST['amount'],2);
        echo "Broek cost$korting";

    }
    if ($_POST['product']== "Handdoek") {
        $korting = number_format( 22 / 100 * 80 * $_POST['amount'],2);
        echo "Handdoek cost$korting";
    }

} else {
    echo "Vul alle velden in! <br>" ;
} if ($_POST['amount'] == '')
    echo "vul getal in!";
    ?>