<html><head><title>constants in PHP Program</title></head>
<center>
<body>
    <?php
        define("PI","3.14");// constant will define like this ...contants value never be change but variable value can be change
        // or it will be define like this define('PI',3.14);
        $r=23;
        $b=PI*$r*$r;
        $c= 2*PI*$r;
        echo"Area is ".PI*$r*$r."<br>";
        echo "Circumtances is ". 2*PI*$r."<br>";
        echo"Area is ".$b."<br>";
        echo "Circumtances is ".$c."<br>";
        ?>
</body>
</center>