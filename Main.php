<?php
include "LineComparison.php";
class Main
{

    //main function
    function main()
    {
        echo "First Line Details \n";
        $x1 = readline("Enter x1 of point (x1,y1) : ");
        $y1 = readline("Enter y1 of point (x1,y1) : ");
        $x2 = readline("Enter x2 of point (x2,y2) : ");
        $y2 = readline("Enter y2 of point (x2,y2) : ");
        echo "Second Line Deatils \n";
        $x3 = readline("Enter x3 of point (x3,y3) : ");
        $y3 = readline("Enter y3 of point (x3,y3) : ");
        $x4 = readline("Enter x4 of point (x4,y4) : ");
        $y4 = readline("Enter y4 of point (x4,y4) : ");

        // checking whether the given input is valid or not
        if (
            is_numeric($x1) && is_numeric($y1) && is_numeric($x2) && is_numeric($y2) && is_numeric($x3)
            && is_numeric($y3) && is_numeric($x4) && is_numeric($y4)
        ) {
            $firstLine = new LineComparison($x1, $y1, $x2, $y2);
            $firstLine->lengthOfLine();
            $line1 = $firstLine->lengthOfLine();
            $secondLine = new LineComparison($x3, $y3, $x4, $y4);
            $line2 = $secondLine->lengthOfLine();
            echo "first line :" . round($line1,3) . "\n" . "second line : " . round($line2,3) . "\n";

            if ($line1 == $line2) {
                echo "Lines are Equal";
            }
            else if ($line1 > $line2) {
                echo "first line is greater than second line ";
            }
            else {
                echo "second line is greater than first line";
            }
        } else {
            echo "Please Enter Valid Input";
        }
    }
}

$mainObj = new Main();
$mainObj->main();
