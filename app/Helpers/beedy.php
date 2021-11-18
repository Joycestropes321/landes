<?php

if(!function_exists('formatMoney')) {
 function formatMoney($money, $fractional=false) {
        if ($fractional) {
            $money = sprintf('%.2f', $money);
        }
        while (true) {
            $replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $money);
            if ($replaced != $money) {
                $money = $replaced;
            } else {
                break;
            }
        } 
        return   $money;  
    };
    if(!function_exists('removeComma')) {
       function removeComma($value) {  
            return str_replace(',','',$value);
        };
    }
}
// add the path to composer.json
// then run autoload composer dump-autoload