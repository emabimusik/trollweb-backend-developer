<?php

// a random password with the integer as length.
fwrite(STDOUT, "Enter a length as integer\n");
$length = fgets(STDIN);

 function randomToken($length = 4, $result = '')
 {
     for ($i = 0; $i < $length; ++$i) {
         $case = mt_rand(0, 1);
         switch ($case) {
            case 0:
                $data = mt_rand(0, 9);
                break;
            case 1:
                $alpha = range('a', 'z');
                $item = mt_rand(0, 25);

                $data = strtoupper($alpha[$item]);
                break;
        }

         $result .= $data;
     }

     return $result;
 }

echo "output is random pass string  :\n", randomToken($length) ,"\n\n";
