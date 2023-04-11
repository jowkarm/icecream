<?php
/*
 * Tina Ostrander
 * 04/11/2023
 * 328/icecream/process.php
 *
 */


/*
 * array(3) {
  ["flavor"]=>
  array(2) {
    [0]=>
    string(7) "vanilla"
    [1]=>
    string(10) "strawberry"
  }
  ["cone"]=>
  string(6) "waffle"
  ["scoops"]=>
  string(1) "8"
}
 */

// Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Define constants
define('PRICE_PER_SCOOP', 2.00);
define('SALES_TAX', .08);

// include header
include ('header.html');
?>


<div class="container">
    <h1>Thank you for your order!</h1>


    <?php
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $cone = $_POST['cone'];
        echo $cone;

        $flavorList = implode(", ", $_POST['flavor'])

            // Calculate price
        $subtotal = $_POST['scoops'] * PRICE_PER_SCOOP;
        $total = $subtotal + ($subtotal * SALES_TAX);


        // Display summary
        echo "<p>Number of scoops: "
    ?>

</div>

</body>


