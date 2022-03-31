<?php

function extractTabByType(array $tab, string $type): array {

    $newTab = [];
    foreach($tab as $element) :
        $isType = 'is_' . $type;
//        is_bool is_integer is_string
        if ($isType($element)) {
            $newTab[] = $element;
        }
    endforeach;
    return $newTab;
}

$tab = [1, 2 , 3.4, 2.5, 7, 'chaine', 'cc'];

var_dump(extractTabByType($tab, 'string'));
