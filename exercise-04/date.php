<?php

//the unix timestamp.
fwrite(STDOUT, "Enter the date\n");
$date = fgets(STDIN);

//fwrite(STDOUT, "Response: strtotime($date);");
$date1 = strtotime($date);
 echo "unix timestsmp output is :\n".$date1  ,"\n\n";
