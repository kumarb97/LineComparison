<?php
include "LineComparison.php";
class Main{

    //main function
    function main(){
        $x1 = readline("Enter x1 of point (x1,y1) : ");
        $y1 = readline("Enter y1 of point (x1,y1) : ");
        $x2 = readline("Enter x2 of point (x2,y2) : ");
        $y2 = readline("Enter y2 of point (x2,y2) : ");

        // checking whether the given input is valid or not
        if(is_numeric($x1) && is_numeric($y1) && is_numeric($x2) && is_numeric($y2)){
            $linecompare = new LineComparison();
            echo "Length of line is " . round($linecompare->lengthOfLine($x1,$y1,$x2,$y2),3);
        }
        else{
            echo "Please Enter Valid Input";
        }

    }
}

$mainObj = new Main();
$mainObj->main();
?>