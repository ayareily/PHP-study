<?php
    include 'vending_machine-4.php';
    $vendor = new CupnoodleVendor();
    echo $vendor->buy(180) . '<br>';
    echo '製造元：' . $vendor->showMaker() . '<br>';