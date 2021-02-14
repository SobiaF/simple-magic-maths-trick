// Simple mathematical “magic” trick in PHP
<?php
$my_num = 3;
$answer = $my_num;
$answer += 2;
$answer *=2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
  
  
