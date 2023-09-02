<?php

    $paymentStatus = '1';

    $result = match($paymentStatus) {
        1 => 'Paid',
        2 => 'Pending Payment',
        3 => 'Payment Declined',
        4,5,6 => 'Card Invalid'
    };

    print $result;
    print PHP_EOL;