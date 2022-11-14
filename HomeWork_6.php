<?php
$textStorage = [];
function add( string $title, string $text): void
{
    global $textStorage;
    $textStorage[] = [
        'title' => $title,
        'text' => $text
    ];
}
add('Привет', 'Как твои дела?');
add('Колобок', 'Сказка про колобка');



function remove(int $numberText): bool
{
    global $textStorage;

    if (isset($textStorage[$numberText])) {
        unset($textStorage[$numberText]);
        return true;
    }
    return false;
}
remove(0);
remove(5);

function edit(int $numberText, string $title, string $text, &$textStorage): bool
{
 if (isset($textStorage[$numberText])){
     $textStorage[$numberText] = [
         'title' => $title,
         'text' => $text
     ];
     return true;
 }
 return false;
}
edit(3,'Новый заголовок',"Новый текст", $textStorage);
var_dump($textStorage);
