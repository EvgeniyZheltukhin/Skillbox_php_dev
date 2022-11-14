<?php
$searchRoot = 'C:\xampp\htdocs\Skillbox_php_dev\test_search';
$searchName = 'test.txt';
$searchResult = [];
function search ($searchRoot, $searchName, &$searchResult)
{
    foreach (scandir($searchRoot) as $files) {
        if ($files == '.' || $files == '..') {
            continue;
        } elseif (is_dir($searchRoot."\\".$files)){
            search($searchRoot."\\".$files, $searchName, $searchResult);
        } elseif ($files == $searchName){
            $searchResult []= $searchRoot . "\\" . $searchName;
        }
        }
}
search($searchRoot, $searchName, $searchResult);

function sizeFiles ($result): bool
{
    if (filesize($result) > 0) {
        return true;
    } else {
        return false;
    }
}


$searchResult = array_filter($searchResult, 'sizeFiles');



if (empty($searchResult)) {
    echo "Нет удовлетворяющих результатов";
} else {
    print_r($searchResult);
}

