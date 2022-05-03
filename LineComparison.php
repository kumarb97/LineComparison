<?php

// creating a class LineComparison
class LineComparison{

    /**
     * Creating a function Length of line
     * Parameter - Co-ordinate points of line
     * returns length of line.
     **/
    function lengthOfLine($x1,$y1,$x2,$y2){
        $temp1 = pow(($x2 - $x1),2);
        $temp2 = pow(($y2- $y1),2);
        return pow(($temp1+$temp2),0.5);
    }
}
?>
