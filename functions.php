<?php
    // unctions with teo arguments
    echo "Functions with two arguments<br><br>";
    function familyName($fname, $year) {
        echo "$fname Refsnes. Born in $year <br>";
      }
      
    familyName("Hege", "1975");
    familyName("Stale", "1978");
    familyName("Kai Jim", "1983");

    echo "<br><br>";
    // function wih default argument value
    echo "Function with default argument value<br><br>";
    function setHeight($minheight = 50) {
        echo "The height is : $minheight <br>";
      }
      
      setHeight(350);
      setHeight(); // will use the default value of 50
      setHeight(135);
      setHeight(80);


      echo "<br><br>";
    //   with returnining values
    echo "Functoions with returning values<br><br>";
    function sum($x, $y) {
        $z = $x + $y;
        return $z;
      }
      
      echo "5 + 10 = " . sum(5, 10) . "<br>";
      echo "7 + 13 = " . sum(7, 13) . "<br>";
      echo "2 + 4 = " . sum(2, 4);

    echo "<br><br>";
    // reference argunment
    echo "Use a pass-by-reference argument to update a variable:<br>";
    function add_five(&$value) {
        $value += 5;
      }
      
      $num = 2;
      add_five($num);
      echo $num;

    echo "<br><br>";
    echo "A function that do not know how many arguments it will get:<br>";
    function sumMyNumbers(...$x) {
        $n = 0;
        $len = count($x);
        for($i = 0; $i < $len; $i++) {
          $n += $x[$i];
        }
        return $n;
      }
      
      $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
      echo $a;

    
?>