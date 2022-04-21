<?php
namespace classes;

class ReverseSort implements SortingStrategy {
    public function getSortedSet($set){
        usort($set, function ($a, $b) {
            if ($a === $b) {
                return 0;
            }
            
            return $a < $b ? 1 : -1;
        });
        return $set;
    }
}