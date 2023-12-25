<?php

/**
 * https://leetcode.com/studyplan/leetcode-75/
 */
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s)
    {
        $s = preg_replace("/\s+/", " ", $s);
        $s = trim($s);

        $a = explode(" ", $s);
        $a = array_reverse($a);

        // var_dump(implode(" ", $a));
        return implode(" ", $a);
    }
}

// $s = "  the sky is blue         ";
(new Solution)->reverseWords($s);
