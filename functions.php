<?php

function isCurrent($myplace){
   return $_SERVER['REQUEST_URI'] === $myplace;
}