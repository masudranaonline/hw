<?php

    require_once('classess/Guardians/Guardians.php');
    require_once('classess/Teacher/Teacher.php');

    use App\classess\Guardians;
    use App\classess\Teacher;

    $Guardians = new Guardians();
    echo $Guardians->greet();

    $Teacher = new Teacher;
    echo $Teacher->greet();
