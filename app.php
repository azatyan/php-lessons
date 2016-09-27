<?php

    // Required autoloader
    require('vendor/autoload.php');


    use Project\Man;


    $martin  = new Man('Martin', 'Elizbaryan', new \DateTime('29.04.1995'));


    var_dump($martin->getProfile());
    var_dump($martin);


