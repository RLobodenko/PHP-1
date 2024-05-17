<?php 
class Person{//создание класса (шаблон)
    //свойства и атрибуты

    //public - модификатор доступа, тоесть свойства name и age будут доступны как внутри класса, так и за пределами этого класса
    protected $name, $age;
    //private - скрытый модификатор доступа. За пределами текущего класса мы не может обращаться к свойствам и методам
    //protected - скрытый, защищенный модификатор доступа. Свойста и методы доступны как внутри класса, так и у наследников класса
    private $password = '12345';//12345
    protected $login = 'user1';

    function __construct($name, $age=null) // конструктор - служит для упрощения кода и вызывается когда создается объект
    {
        $this->name = $name;
        $this->age = $age;
    }
    // деструктор -вызывается когда удаляется объект
    
    function __destruct()
    {
        echo 'Удаление обьекта';//здесь можно сделать освобождение ресурсов (удаление временных файлов, куков, сессий и тд)
    }
    //функции, методы
    public function info(){
        echo 'Это класс человек!';
    }

    public function getPassword(){
        return md5($this->password);
    }

    public function displayInfo(){
        echo 'Имя: '.$this->name.' Возраст: '.$this->age; // this - это ссылка на текущий класс (Person)
    }

    public function getAge(){
        return $this->age;
    }
}

class Work extends Person{
    protected $companyName;
    protected $position;
    protected $salary;
    static $position1 = 60; //статическое свойство
    static $count = 0;

    function __construct($name, $age, $companyName, $position, $salary)
    {
        self::$count++; // self - это обращение к статическому свойству. :: - обращение к статическому свойству
        $this->name = $name;
        $this->age = $age;
        $this->companyName = $companyName;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function displayInfo()
    {
        echo 'Name: '.$this->name.' Age: '.$this->age.' Company: '.$this->companyName.' Salary: '.$this->salary;    
    }
    static function displayInfo1()
    {
        echo 'Статический метод';   
    }

}

echo Work::$position1;
echo Work::displayInfo1();

$user1 = new Person('Александр', 20);//создание объекта (конкретного человека)
$user1->info(); // стрелочка - это обращение

$user1->displayInfo();


$user2 = new Person('Наталья');

$user2->displayInfo();
echo $user2->getPassword()."<br />";
echo $user2->getAge();


//наследование


$work_1 = new Work('Василий', 22, 'Яндекс', 'директор',1000);
echo $work_1->displayInfo();
echo Work::$count;