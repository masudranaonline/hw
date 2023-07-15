<?php

use function App\Guardians\greet;
use function App\Teacher\greet as TeacherGreet;

require_once('Student/Cmt.php');
require_once('Student/Ent.php');
require_once('Guardians/Guardians.php');
require_once('Teacher/Teacher.php');

echo greet();
echo TeacherGreet();