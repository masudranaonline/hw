<?php 

    // print "Hello World".PHP_EOL;
    // print "Masud Rana".PHP_EOL;
    // print "Hello Bangladesh";

    // $name = readline();
    // print $name;

    $name = [];
    while(true){
        $input = readline('-> ');
        $name[] = $input;
        if($input == 0){
            break;
        }
    }
    var_dump($name);

?>