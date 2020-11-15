<?php
    echo "<body style= 'background-color:lightcoral'></body>";
    echo "<h>Your Reciept</h1>";
    $email = $_POST["email"];
    $password = $_POST["password"];
    $num_advBook = $_POST["advBook"];
    $advBook_tot = $num_advBook * 3;
    $num_mystBook = $_POST["msytBook"];
    $mystBook_tot = $num_mystBook * 5;
    $num_vrBook = $_POST["vrBook"];
    $vrBook_tot = $num_vrBook * 7;
    $shipType = $_POST["shipping"];
    if($shipType == 'free'){
      $ship_tot = 0;
    }
    else if($shipType == 'threeday'){
      $ship_tot = 5;
    }
    else{
      $ship_tot = 50;
    }
    $total_cost = $advBook_tot + $mystBook_tot + $vrBook_tot + $ship_tot;

    echo "<table style = 'width:40%' border = '1'>
            <tr>
              <th>        </th>
              <th>Quantity</th>
              <th>Cost per Item</th>
              <th>Sub Total</th>
            </tr>
            <tr>
              <th>Adventure Books</th>
              <th>$num_advBook</th>
              <th>$3</th>
              <th>$$advBook_tot</th>
            </tr>
            <tr>
              <th>Mystery Books</th>
              <th>$num_mystBook</th>
              <th>$5</th>
              <th>$$mystBook_tot</th>
            </tr>
            <tr>
              <th>Adventure Books</th>
              <th>$num_vrBook</th>
              <th>$7</th>
              <th>$$vrBook_tot</th>
            </tr>
            <br>
            <p>Shipping selected: $shipType, Shipping cost: $$ship_tot</p><br>
            <p>Total: $$total_cost</p><br>
            <p>Email: $email, Password: $password</p><br>
    ";
?>
