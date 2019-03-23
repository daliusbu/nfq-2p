<?php
/**
 * Created by PhpStorm.
 * User: dalius
 * Date: 19.3.21
 * Time: 20.41
 */
//declare(strict_types = 1);
require_once __DIR__ . '/vendor/autoload.php';

use function Nfq\Akademija\Not_Typed\calculateHomeWorkSum as notTypedFunction ;
use function \calculateHomeWorkSum as rootFunction;
use function Nfq\Akademija\Soft\calculateHomeWorkSum as softFunction;
use function Nfq\Akademija\Strict\calculateHomeWorkSum as strictFunction;

//try{

    echo '<h3>calculateHomeWorkSum: ' . rootFunction(3, 2.2, '1') . '</h3>';
    echo '<h3>Nfq\Akademija\Not_Typed\calculateHomeWorkSum: ' . notTypedFunction(3, 2.2, '1') . '</h3>';
    echo '<h3>Nfq\Akademija\Soft\calculateHomeWorkSum: ' . softFunction(3, 2.2, '1') . '</h3>';
    echo '<h3>Nfq\Akademija\Strict\calculateHomeWorkSum: ' . strictFunction(3, 2.2, '1') . '</h3>';

//} catch (\Error $e){
//    echo ($e->getMessage());
//}

echo '<h3>End of index.php</h3>';