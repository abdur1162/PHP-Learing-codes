<html><head><title>Datatype in PHP Program</title></head>
<center>
<body>
    <?php
        class Test
        {

        }
        $a=22;//int
        echo $a."<br>"; // <br> means next line in HTML
        $b= 3.32;//float
        echo $b."<br>";
        if ($a>$b) // This is the if else conditions
        echo "a is greater than b<br>";
    else
    echo "b is greater than a<br>";
        if ($a)// if a is not equal to 0
        echo "Hello<br>";
    else
    echo "Bey<br>"; // if a is equal to 0 then this will be printed because 0 means here false
        $c= "hello";//string
        echo $c."<br>";
        $d= TRUE;//boolean In boolean print true means 1 and print false means 0 when it print false means it print nothing it will be blank
        echo $d."<br>";
        $e=array("Palsunda","Bilkumari","Haspukuria");//array
        print_r($e); // echo cant print array so we are used print_r()
        $f=null;//null
        echo $f;
        // t = new Test(); // This is the object creation
    /*
    int
    float
    string
    boolean
    array
    object                      
    null
    */
    ?>
</body>
</center>