<?php

namespace Penis;

class Math 
{
    public static function sum(...$nums)  // možem poslať kolko chcem argenumentov a spravi si array z toho 
    {
        return array_sum($nums);
        }

    public static function avg(...$nums)
    {
        return array_sum($nums) / count($nums);
    }
}