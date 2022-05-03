<?php

// creating a class LineComparison
class LineComparison
{
    protected $x1;
    protected $y1;
    protected $x2;
    protected $y2;

    function __construct($x1, $y1, $x2, $y2,)
    {
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->y1 = $y1;
        $this->y2 = $y2;
    }

    /**
     * Creating a function Length of line
     * Parameter - Co-ordinate points of line
     * returns length of line.
     **/
    function lengthOfLine()
    {
        $temp1 = pow(($this->x2 - $this->x1), 2);
        $temp2 = pow(($this->y2 - $this->y1), 2);
        return pow(($temp1 + $temp2), 0.5);
    }
}
