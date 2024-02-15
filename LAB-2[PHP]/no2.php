<?php
    
    $amount = 2000;
    $vat_rate = 15;

    $vat = $amount * ($vat_rate / 100);

    echo "The VAT for amount {$amount} is {$vat}";
?>