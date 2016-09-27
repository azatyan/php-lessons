<?php

    // Required autoloader
    require('vendor/autoload.php');


    use Project\Man;


    $martin  = new Man('Martin', 'Elizbaryan', new \DateTime('29.04.1995'));


    var_dump($martin->getProfile());
    var_dump($martin);

    /**
     * @TODO;
     * 0) Update composer.json with Author [ok]
     * 1) Add 2 static members [ok]
     * 2) Add 1 protected member [ok]
     * 3) Create Function doing some action, 10-14 lines.
     * 4) Push To Git (git add . git commit -m "", git push)
     * 5) Make comments on GitHub
     */



