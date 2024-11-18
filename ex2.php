<?php
// 1
for ($i=1;$i<=5;$i++) {
    for ($x=$i;$x<=5;$x++) {
    echo "&nbsp";
    }
    
    for ($j=1;$j<=$i;$j++) {
    echo "*&nbsp";
    }
    echo "<br>";
    }
    for ($a=1;$a<=5;$a++) {
    for ($e=1;$e<=$a;$e++) {
        echo "&nbsp";
    }
    for ($y=$a;$y<=5;$y++) {
    echo "*&nbsp";
    }
    echo "<br>";
    }

// 2
for ($i=0;$i<=5;$i++) {
for ($x=0;$x<=$i;$x++) {
    echo "*&nbsp";
}
echo "<br>";
}
for ($i=0;$i<=5;$i++) {
    for ($x=5;$x>=$i;$x--) {
        echo "*&nbsp";
    }
    echo "<br>";
}

//3
 
for ($i=1;$i<=3;$i++) {
    for ($j=1;$j<=($i*2)-1;$j++) {
    echo "*&nbsp";
    }
    echo "<br>";
    }
    for ($a=1;$a<=3;$a++) {
    for ($y=3;$y>=(2*$a)-1;$y--) {
    echo "*&nbsp";
    }
    echo "<br>";
    }
    


?>