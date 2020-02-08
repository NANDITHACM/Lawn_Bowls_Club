<?php
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$calcu = $_POST['calcu'];

    function calculate($n1,$n2, $calcu) // set $calcu as parameter
    {
        switch($calcu)
        {
        case "Addition": // here you have to use colons not semi-colons
            $compute = $n1 + $n2; 
            break;
        case "Subtraction":
            $compute = $n1 - $n2; 
            break;
        case "Multiplication":
            $compute = $n1 * $n2; 
            break;
        case "Division":
            $compute = $n1 / $n2; 
            break;
        }
        return $compute; // returning variable
    }
echo "$calcu <br /> <br /> 1st Number: $num1 <br /> 2nd Number: $num2 <br /><br />";
echo "Answer is:" .calculate($num1,$num2, $calcu); // you need to pass $calcu as argument of that function
?>