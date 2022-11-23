<?php
use Cassandra\Date;
abstract class Storage{
    abstract function create(string $slug);
    abstract function read(string $slug);
    abstract function update(string $slug, TelegraphText $telegraphText);
    abstract function delete(string $slug);
    abstract function list();
}
abstract class View{
    public $storage;
    public function __construct(Storage $storage){
        $this ->storage = $storage;
    }
    abstract function displayTextById($id);
    abstract function displayTextByUrl($url);
}
abstract class User{
    public $id, $name, $role;
    abstract function getTextToEdit();
    }
class FileStorage extends Storage{
    public $slug;
    public function create($slug)
    {
        $fileName = $this-> slug. ".txt". '_'. \date("d.m.y h:m:s");
        $i = 1;
        while (file_exists($fileName)){
            $fileName = $this-> slug. ".txt". '_'. \date("d.m.y h:m:s").$i;
            $i++;
        }
        $this->slug = $fileName;
        return $this -> slug;
    }

    function read($slug)
    {
        $data = new TelegraphText();
        if (file_exists($this->slug)) {
            return unserialize($data);
        } else {
            print_r('Файла с таким именем не существует');
        }

    }

    function update($slug, TelegraphText $telegraphText)
    {
        $telegraphTextNew = [];
        if (file_exists($this->slug)) {
            $telegraphText = $telegraphTextNew;
        } else {
            print_r('Файла с таким именем не существует');
        }
    }

    function delete($slug)
    {
        $telegraphText = new TelegraphText();
        if (file_exists($this->slug)) {
            unset($telegraphText);
        } else {
            print_r('Файла с таким именем не существует');
        }
    }

    function list()
    {
        $directory = 'C:\xampp\htdocs\Skillbox_php_dev';
        $scannedDir = scandir($directory);
        unserialize($scannedDir, $objects = []);
    }
}
class TelegraphText
{
    public $title, $text, $author, $published, $slug;


    public function __construct(string $author, string $slug)
    {
        $newObject = new FileStorage();
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

$newObject =new FileStorage();
$textTest = new TelegraphText('Evgeniy', 'Test', $newObject);
$textTest->text = 'My name is Evgeniy';
$textTest->title = 'My name';
$textTest->storeText();
print_r($textTest);
$textTest->editText('Привет', 'Как твои дела?');
print_r($textTest);

$textTest2 = new TelegraphText('', 'test2.txt', $newObject);
$textTest2->loadText();
print_r($textTest2);



