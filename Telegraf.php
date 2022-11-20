<?php

use Cassandra\Date;
abstract class Storage{
    abstract function create($slug);
    abstract function read($slug);
    abstract function update($slug);
    abstract function delete($slug);
    abstract function list();
}
abstract class View{
    public $storage;
    public function __construct(){


    }
    abstract function displayTextById($id);
    abstract function displayTextByUrl($url);


}
abstract class User{
    public $id, $name, $role;
    abstract function getTextToEdit();
    }
class FileStorage extends Storage{
    public $title, $text, $author, $published, $slug;

    public function create($slug)
    {

        $fileName = $this-> slug. ".txt". '_'. \date("d.m.y h:m:s");
        $i = 1;
        while (file_exists($fileName)){
            $fileName = $this-> slug. ".txt". '_'. \date("d.m.y h:m:s").$i;
            $i++;
        }
        $this->slug = $fileName;

        $texts = [
            "text" => $this->text . PHP_EOL,
            "title" => $this->title . PHP_EOL,
            "author" => $this->author . PHP_EOL,
            "published" => $this->published . PHP_EOL
        ];
        file_put_contents($fileName, $texts);
        return $this -> slug;
    }

    function read($slug)
    {
        // TODO: Implement read() method.
    }

    function update($slug)
    {
        // TODO: Implement update() method.
    }

    function delete($slug)
    {
        // TODO: Implement delete() method.
    }

    function list()
    {
        // TODO: Implement list() method.
    }
}
class TelegraphText
{
    public $title, $text, $author, $published, $slug;


    public function __construct(string $author, string $slug)
    {
        $this->author = $author;
        $this->slug = $slug;
        $this->published = \date("d.m.y h:m:s");
    }

    public function storeText()
    {
        $texts = [
            "text" => $this->text . PHP_EOL,
            "title" => $this->title . PHP_EOL,
            "author" => $this->author . PHP_EOL,
            "published" => $this->published . PHP_EOL
        ];
        $type = serialize($texts);
        file_put_contents($this->slug . ".txt", $texts);
    }

    public function loadText()
    {
        if (file_exists($this->slug)) {
            $texts2 = file_get_contents($this->slug);
        } else {
            print_r('Файла с таким именем не существует');
        }
        $arrText2 = explode(PHP_EOL, $texts2);
        $this->text = $arrText2[0];
        $this->title = $arrText2[1];
        $this->author = $arrText2[2];
        $this->published = $arrText2[3];
        $arrText = [
            'text' => $this->text,
            'title' => $this->title,
            'author' => $this->author,
            'published' => $this->published
        ];
    }

    public function editText($text, $title)
    {
        $this->text = $text;
        $this->title = $title;
    }

}

$textTest = new TelegraphText('Evgeniy', 'Test');
$textTest->text = 'My name is Evgeniy';
$textTest->title = 'My name';
$textTest->storeText();
print_r($textTest);
$textTest->editText('Привет', 'Как твои дела?');
print_r($textTest);

$textTest2 = new TelegraphText('', 'test2.txt');
$textTest2->loadText();
print_r($textTest2);

