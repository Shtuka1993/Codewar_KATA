<?php

// Holiday II - Plane Seating
function planeSeat($a){
    //code here :)
    $number = (int)($a);
    $section = strtoupper(substr($a, strlen($number)));
    $position = "";
    if ((($number < 1) || ($number > 60))||(($section == 'I') || ($section == 'J') || ($section > 'K'))) {
        return "No Seat!!";
    }
    if ($number < 21) {
        $position = "Front";
    } else if ($number < 41) {
        $position = "Middle";
    } else {
        $position = "Back";
    }
    if ($section < 'D') {
        $position .= '-'.'Left';
    } else if  ($section < 'G') {
        $position .= '-'.'Middle';
    } else {
        $position .= '-'.'Right';
    }
                        
      return $position;
}

//Can you get the loop ?
function loop_size(Node $node): int {
    // Your code here
    $nodes = [];
    $nodes[] = $node;
    $isLoop = false;
    $count = 0;
    while(! $isLoop) {
        $node = $node->getNext();
        $tail = 0;
        foreach($nodes as $checkedNode) {
            if($checkedNode === $node) {
                return count($nodes) - $tail;
            } else {
                $tail++;
            }
        }
        $nodes[] = $node;
    }
}

//Holiday V - SeaSick Snorkelling
function sea_sick(string $s): string {
    // Write your code here
    var_dump($s);
    
    $up = 2*substr_count($s, '~_');
    $down = strlen($s);
    if (($down != 0) && ($up/$down >= 0.2)) {
        return "Throw Up";
    } else {
        return "No Problem";
    }
}