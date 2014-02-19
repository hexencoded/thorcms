<?php

function cfg($key, $default = null){
    return Config::get($key, $default);
}

function lng($key, $replace = array(), $locale = null){
    return Lang::get($key, $replace, $locale);
}