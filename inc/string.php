<?php

function strReplaceNewLineToBr($s){
    return str_replace(PHP_EOL, "<br>", $s);
}