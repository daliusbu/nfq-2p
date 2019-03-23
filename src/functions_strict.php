<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.3.22
 * Time: 20.05
 */
declare(strict_types=1);

namespace Nfq\Akademija\Strict {

    function sumStrict(int ...$numbers): int{
        $result = 0;
        foreach ($numbers as $num){
            $result += $num;
        }
        return $result;
    }

    function calculateHomeWorkSum( ...$nums){
       try {
           return sumStrict(...$nums);
       } catch (\Error $e ){
           return '<h4 style="color: red">'. $e->getMessage() . '</h4>';
       }
    }
}