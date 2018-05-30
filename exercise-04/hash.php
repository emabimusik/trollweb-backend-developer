<?php

// to run : php hash.php
//Given any input, return

// a MD5 hash.
// a SHA1 hash.
  echo 'Enter any input : ';

  $input = trim(fgets(STDIN, 1024));

  echo "output is a MD5:\n", md5($input),"\n\n";
  echo "output is a sha1 \n", sha1($input),"\n\n";
