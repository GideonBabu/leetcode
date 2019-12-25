<?php
/*
 * Given a 32-bit signed integer, reverse digits of an integer.
 *
 * Example 1:
 *
 * Input: 123
 * Output: 321
 * Example 2:

 * Input: -123
 * Output: -321
 * Example 3:

 * Input: 120
 * Output: 21
 *
 * Note:
 * Assume we are dealing with an environment which could only store integers within the 32-bit signed integer range: [−231,  231 − 1]. For the purpose of this problem, assume that your function returns 0 when the reversed integer overflows.
 */

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        if (is_int($x) === false) return 0;
        if ($x === null || $x === 0) return 0;
        if ($x > -9 && $x < 9) return $x;
        $sign = ($x < 0) ? -1 : 1;

        $rev = $sign * (int)strrev(abs($x));

        if ($rev < -2147483648 || $rev >  2147483647) return 0;

        return $rev;
    }
}