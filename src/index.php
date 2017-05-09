<?php
/**
 * Created by IntelliJ IDEA.
 * User: wang
 * Date: 2017/5/9
 * Time: 12:58
 */
function GetRandStr($len)
{
    $chars = array(
        "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k",
        "m", "n", "p", "q", "r", "s", "t", "u", "v",
        "w", "x", "y", "z", "2", "3", "4", "5", "6", "7", "8", "9"
    );
    $charsLen = count($chars) - 1;
    shuffle($chars);
    $output = "";
    for ($i=0; $i<$len; $i++)
    {
        $output .= $chars[mt_rand(0, $charsLen)];
    }
    return $output;
}
echo GetRandStr(4);



