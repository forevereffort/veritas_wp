<?php

function strReplaceNewLineToBr($s){
    return str_replace(PHP_EOL, "<br>", $s);
}

function trimNumber($phone) {
	return preg_replace("/[^0-9]+/", "", $phone);
}