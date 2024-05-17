<?php 
//абстрактные классы - это класс который имеет частичную реализацию для класса наследника
/*abstract class A{
    abstract function print();
    abstract function print1($m);
}
class Base extends A{
    function print(){
        echo 'print';
    }
    function print1($m){
        echo $m;
    }
}
class Base1 extends A{
    function print(){
        echo 'print Base 1';
    }
    function print1($m){
        echo 'Base1 '.$m;
    }
}
$a = new Base();
$a->print();
$a->print1('привет мир!');


$b = new Base1();
$b->print();
$b->print1('мир');
*/
//traits - будет полезен для множественного наследования. 
trait TraitA{
    public function printA($a){
        echo $a;
    }
    public function printB($b){
        echo $b;
    }
} 
trait TraitB{
    public function printAA($a){
        echo $a;
    }
    public function printBB($b){
        echo $b;
    }
} 

class Person{
    use TraitA,TraitB; // use - подключает трэйт, 
}

$a = new Person();
$a->printA('привет');
$a->printB('мир');
$a->printAA('привет 1');
$a->printBB('мир1');

interface A{
    function A1();
    function A2();
    function A3();
}
interface B{
    function B1();
    function B2();
    function B3();
}
class Base3 implements A,  B{ // implements -это наследование интерфейсов
    const aa = 400;
    function A1(){

    }
    function A2(){

    }
    function A3(){

    }
    function B1(){

    }
    function B2(){

    }
    function B3(){

    }
}

//константа
class Person10{
    const age = 20; // $ -не нужен при объявлении

    function __construct()
    {
        echo Person10::age; // -обращение к константе
    }
}
$p = new Person10();
