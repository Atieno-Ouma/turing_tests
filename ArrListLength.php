<?php
function solution($A) {
    // Implement your solution here
    $length=0;
    $visited=[];
    $index=0;

    while(!isset($visited[$index])&& $A[$index]!=-1){
        $visited[$index]=true;
        $index=$A[$index];
        $length++;
    }
    if($A[$index]==-1){
        $length++;
    }
    return $length;

    //todo :Optimize the solution
}