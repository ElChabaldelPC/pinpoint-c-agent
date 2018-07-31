<?php
/**
 * Copyright 2018 NAVER Corp.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

function test_func1($arg1, $arg2)
{
    return sprintf("this is test_func1: arg1=%s, arg2=%s", (string)$arg1, (string)$arg2);
}

$a = test_func1("one", 2);
echo $a;

function checknumber($number){
    for($i=2;$i<=sqrt($number);$i++){
        if($number%$i==0)
            return 0;
        else
            return 1;
    }
}


function test_null(){
    for($i = 0 ;$i <1000; $i++){
        echo $i ."->" .checknumber($i) ."</br>";
    }
}

test_null();

?>