<?php

// a random string with the integer as length.
fwrite(STDOUT, "Enter a length as integer\n");
$length = fgets(STDIN);

function random_str($length)
{
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }

    return implode('', $pieces);
}
echo "output is random string  :\n", random_str($length) ,"\n\n";
