<html><head><title> PHP Operator</title></head>
<center>
<body>
    <?php
        //catagory of operator

        //unary operator ++a , --a, +a, -a, ~a, !a
        //binary operator a+b, a-b, a*b, a/b, a%b, a^b,
        //ternary operator a>b?a:b

        //types of operator

        //Arithmatic operator +,-, *,/,%,**
        echo (10+10)."<br>";
        echo (10-10)."<br>";
        echo (10*10)."<br>";
        echo (10/10)."<br>";
        echo (10%10)."<br>";
        echo (10**10)."<br>";
        //Relational operator >,<,==,!=,>=,<=,===,<>,!==,<=>(Spaceship operator)
        $a=10;
        $b= 20;
        echo ($a>$b)."<br>";// it return as 0 or 1 if it is true then it return 1 and it it is false then it return 0..here it is false so it return 0
        echo ($a<$b)."<br>";//here it is true so it return 1
        echo ($a!=$b)."<br>";//here it is true so it return 1
        echo ($a>=$b)."<br>";//here it is false so it return 0 , 0 means it print nothings
        echo ($a<=$b)."<br>";//here it is true so it return 1
        echo ($a!==$b)."<br>";//here it is true so it return 1
        echo ($a<>$b)."<br>";//here it is true so it return 1
        echo ($a<=>$b)."<br>";// it return as +1 or 0 or -1 ..here it it is return -1
        $a=50;
        $b= "50";
        echo ($a==$b)."<br>";//here it is true so it return 1
        echo ($a===$b)."<br>";//here it is false so it return 0 , 0 means it print nothings
        echo ($a>=$b)."<br>";//here it is true so it return 1
        echo ($a<=$b)."<br>";// here it is true so it return 1
        echo ($a!==$b)."<br>";//here it is true so it return 1
        echo ($a!=$b)."<br>";//here it is false so it return 0, 0 means it print nothings
        $a=20;
        $b= 10;
        echo ($a<>$b)."<br>";//here it is true so it return 1
        echo ($a>=$b)."<br>";


        //Assignment operator =,+=,-=,*=,/=,%=,**=
        //Increment /Decrement operator ++,--
        $a= 50;
        $b= 26;
        ++ $a; // increment operator it means $a=$a+1
        echo $a."<br>";
        -- $b ; // drecrement operator it means $b=$b-1
        echo $b."<br>";
        //Logical operator &&,||,!
        //String operator .=, .=, .=, .=, .=, .=, .=, .=, .=, .=,
        // Array operator [] , [] , [] , [] , [] , [] , [] , [] ,
        //conditional assignment operator ??=, ??, ??, ??, ??, ??, ??, ??, ??, ??
        ?>
</body>
</center>