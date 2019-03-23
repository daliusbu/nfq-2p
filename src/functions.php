<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.3.22
 * Time: 18.12
 */

namespace {

    function sumAll( ...$numbers){
        $result = 0;
        foreach ($numbers as $num){
            $result += $num;
        }
        return $result;
    }

    function calculateHomeWorkSum(...$nums){

        return sumAll(...$nums);
    }
}


namespace Nfq\Akademija\Not_Typed {
    use function \sumAll;

    function calculateHomeWorkSum(...$nums){

        return sumAll(...$nums);
    }
}


namespace Nfq\Akademija\Soft {
    use function \sumAll;

    function calculateHomeWorkSum(int ...$nums): int{

        return sumAll(...$nums);
    }
}