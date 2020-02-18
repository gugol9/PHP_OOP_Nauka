<?php

/* GADY

class gady
{
  
    public $domena = 'eukarionty';
    public $krolestwo;
    public $typ;
    public $podTyp;
    public $gromada;
    public $rzad;
    public $rodzina;
    public $rodzaj;

   
    

    
     public function pobierzKrolestwo()
    {
        return $this -> krolestwo; 
    }
    
     public function pobierzTyp()
    {
        return $this -> typ; 
    }
    
     public function pobierzPodTyp()
    {
        return $this -> podTyp; 
    }
    
    
     public function pobierzGromada()
    {
        return $this -> gromada; 
    }
    
    
     public function pobierzRzad()
    {
        return $this -> rzad; 
    }
    
    
     public function pobierzRodzina()
    {
        return $this -> rodzina; 
    }
    
    
     public function pobierzRodzaj()
    {
        return $this -> rodzaj; 
    }
    
    
     public function pobierzGatunek()
    {
        return $this -> gatunek; 
    }
    
    
}

class zolwie extends gady
{
     private $gatunek;
}

class weze extends gady
{
     public $gatunek;
}

class jaszczurki extends gady
{
     public $gatunek ;
    
    
    public function pobierzGatunek()
    {
        return $this -> gatunek;
    }
}


$jaszczurka_zwinka = new jaszczurki();

$jaszczurka_zwinka -> gatunek = 'jaszczurka zwinka';
$jaszczurka_zwinka -> krolestwo = 'zwierzęta';
$jaszczurka_zwinka -> typ ='strunowce';
$jaszczurka_zwinka -> podTyp = 'kręgowce';
$jaszczurka_zwinka -> gromada = 'zauropsydy';
$jaszczurka_zwinka -> rzad = 'łuskonośne';
$jaszczurka_zwinka -> rodzina = 'jaszczurkowate';
$jaszczurka_zwinka -> rodzaj = 'Lacerta';

echo 'Gatunek jaszczurki: ' .$jaszczurka_zwinka -> pobierzGatunek().'<br>';
echo 'Domena: '             .$jaszczurka_zwinka -> domena.'<br>';
echo 'Krolestwo: '          .$jaszczurka_zwinka -> pobierzKrolestwo().'<br>';
echo 'Typ: '                .$jaszczurka_zwinka -> pobierzTyp().'<br>';
echo 'Podty: '              .$jaszczurka_zwinka -> pobierzPodTyp().'<br>';
echo 'Gromada: '            .$jaszczurka_zwinka -> pobierzGromada().'<br>';
echo 'Rząd: '               .$jaszczurka_zwinka -> pobierzRzad().'<br>';
echo 'Rodzina: '            .$jaszczurka_zwinka -> pobierzRodzina().'<br>';




$zolw_blotny = new zolwie();


*/

?>












<?php

    abstract class Shape
    {
        public abstract function getArea();
    }


    class Rectangle extends Shape
    {
        private $a;
        private $b;

        public  function __construct($a, $b)
        {
            $this -> a = $a;
            $this -> b = $b;
        }

        public  function  getArea()
        {
            return $this -> a * $this -> b;
        }
    }

    class Circle extends Shape
    {
        private  $radius;

        public  function  __construct($radius)
        {
            $this -> radius = $radius;
        }

        public function getArea()
        {
            return 3.14 * pow($this -> radius, 2); //2 to potega 2
        }
    }


    class Kwadrat extends Shape
    {
        private $a;

        public function __construct($a)
        {
            $this -> a = $a;
        }


        public function getArea()
        {
            return $this->a * $this -> a;
        }
    }

    class Triangle extends Shape
    {
        private $a;
        private $h;

        public function __construct($a, $h)
        {
            $this -> a = $a;
            $this -> h = $h;
        }

        public function getArea()
        {
            return  ($this -> a * $this -> h) /2;
        }
    }

    class Trapez extends Shape
    {
        private $a;
        private $b;
        private $h;

        public function __construct($a, $b, $h)
        {
            $this -> a = $a;
            $this -> b = $b;
            $this -> h = $h;
        }

        public function getArea()
        {

            if ($this -> a == $this -> b && $this -> b == $this -> a)
            {
               return 'To jest trapez rownoramienny o polu: '.($this -> a + $this ->b)* $this -> h /2;
            }else
            {
                return 'Pole trapezu wynosi: '.($this -> a + $this ->b)* $this -> h /2;
            }


        }


    }


    class TriangleRow extends Shape
    {
        private $a;


        public function __construct($a)
        {
            $this -> a = $a;
        }



        public function getArea()
        {
            return 'Pole trójkąta równobocznego wynosi: ' .($this -> a * $this -> a )/4  ;
        }
    }

    $shape = new Rectangle(2,4);
    echo $shape -> getArea(); echo '<br/>';

    $shape1 = new Circle($radius = 2);
    echo $shape1 -> getArea().'<br/>';

    $kwadrat = new Kwadrat (5);
    echo $kwadrat -> getArea().'<br/>';

    $triangle1 = new Triangle(5,5);
    echo 'Pole trójkąta wynosi:'.$triangle1 -> getArea().'<br/>';

    $trapez1 = new Trapez(6,6,6);
    echo $trapez1 -> getArea().'<br/>';

    $trapez2 = new Trapez(5,4,2);
    echo $trapez2 -> getArea().'<br/>';

    $triangleRow1 = new TriangleRow(4);
    echo $triangleRow1 -> getArea().'√3';

?>









<?php

    class Article
    {
        function publish()
        {
            echo 'publikujemy artykuł';
        }

    }

    $myArticle = new Article();
    print_r($myArticle);
    echo '<br/>';
    print_r($myArticle -> publish());
    echo '<br/><br/>'
?>








<?php

class Account
{
    private $balance;

    public function __construct($balance)
    {
        if ($balance >= 0) {
            $this->balance = $balance;
        }
    }

    public function setBalance($balance)        //jezeli chcemy miec dostep do prywatnych to towrze metode publiczna
    {
        if($balance >= 0){
            $this -> balance = $balance;
        }

    }

    public function getBalance()
    {
        return $this -> balance;
    }

}

class BusinessAccount extends Account
{

}

class SavingAccount extends Account
{
    private $interestRate = 0.7;

    public function __construct($balance,$interestRate)
    {
        parent::__construct($balance);  //wykorzustujemy konstruktor z glownej klasy i ponizej to co specyficzne dla naszej klasy
         $this -> interestRate = $interestRate;
    }

}
$savingAcc = new SavingAccount(4000,0.05); // 2 parametry z konstuktora
print_r($savingAcc );


$acc = new Account(300);
print_r($acc -> getBalance());
echo '<br/>';


$businessAcc = new BusinessAccount(10000);
print_r($businessAcc->getBalance());

?>






<?php

//INTERFEJSY  wiemy jakiej metody użyć ale nie wiemy jak działa ona od strony technicznej

    interface Database                      //metody zawsze publiczne klient musi miec do nich dostep
    {
        public function openConnection();   //zasada działania będzie przygotowana w konkretnych klasach
        public function preperQuery();

    }

 class MySQL implements Database            //klasa implementuje interfejs Database
 {
    public function openConnection()
    {
        echo 'otwieram polaczenie z baza MySQL<br/>';
    }

    public function preperQuery()
    {
        echo 'Przygotowuje zapytanie do bazy MySQL<br/>';
    }

 }


class SQLite implements Database            //klasa implementuje interfejs Database
{
    public function openConnection()
    {
        echo 'otwieram polaczenie z baza SQLite<br/>';
    }

    public function preperQuery()
    {
        echo 'Przygotowuje zapytanie do bazy SQLite<br/>';
    }

}


$db = new MySQL();
    $db -> openConnection();
    $db -> preperQuery();

    $d = new SQLite();
        $d -> openConnection();
        $d -> preperQuery();

?>







<?php
                //STATYCZNE
class Person
{
    private $name;
    private static $counter; //statyczny licznik zlicza ile obiektow mamy

    public function __construct($name)
    {
        $this -> name = $name;
        self::$counter++;     //statyczny składnik dotyczy całej klasy
    }

    public static function getCounter()    //statyczna metoda (sprawdz stan licznika ile mamy obiektow w konstruktorze)
    {
        return self::$counter;  // zwrocenie statycznje metody liczenia ile
    }
}

$person1 = new Person('Tomek');
$person2 = new Person('Tomek');
$person3 = new Person('Tomek');
$person4 = new Person('Tomek');

print Person::getCounter().'<br>'; //wywołanie
?>


<?php

//ELEMENTY NIEZMIENNE (final) czyli klasy nie mozna dziedziczyć

    abstract class Shapee
    {
        public abstract function draw();
    }

    final class Rectanglee extends Shapee     //finalna klasa której nie można rozszerzać
    {
        public function draw()
        {
            echo 'rysujemy prostokat';
        }
    }




?>



<?php

//KOMUNIKACJA POMIĘDZY OBIEKTAMI


class Product  //produkt
{
    private $name;

    public function __construct($name)  // konstruktor przypisuje nazwe każdej intancji produktu
    {
        $this -> name = $name;
    }


    public function getName()
    {
        return $this->name;
    }
}

class Cart  //koszyk
{
    private $products = []; //tablica

    public function addProduct(Product $product)    //dodawanie produktu do koszyka
    {
        $this -> products[] = $product;
    }

    public function listProducts()      // wyświetlenie produktu z koszyka
    {
        foreach ($this -> products as $product) //wyświetlenie tablicy pętlą foreach
        {
            echo $product -> getName(). '<br>';
        }
    }

}

$cart = new Cart();
$product1 = new Product('Laptop');
$product2 = new Product('Kabel USB');

$cart -> addProduct($product1);
$cart -> addProduct($product2);

$cart -> listProducts();
?>









<?php

    //RELACJE POMIĘDZY OBIEKTAMI  (Ma)(has-a)  KOMPOZYCJA

class  Flat  //klasa miekszanie  nie tworzymy mieszkań jeżeli nie powstanie blok
{
    private $size;

    public function __construct($size)
    {
        $this -> size = $size;
    }
}

class  BlockOfFlats     //Blok odpowiada za tworzenie mieszkań
{
    private $flats = [];

    public function addFlat($size) //tworzymy mieszkanie (paramter size)
    {
        $this -> flats[] = new Flat($size);
    }

    public function getFlats()
    {
        foreach ($this -> flats as $flat)
        {
            print_r($flat);
        }
    }
}


$block = new BlockOfFlats();
$block -> addFlat('M2');
$block -> addFlat('M3');
$block -> addFlat('M4');

$block -> getFlats();
echo '<br><br>';


?>






<?php
        //problem z dziedziczeniem

interface Moveable                      //interfejs pojazd
{
    public function move();
    public function skret();
}

interface Powered                       //interfejs pojazd silnikowy
{
    public function turnOnEngine();
    public function skret();
}


    class Car implements Powered, Moveable  //klasa samochod implementuje interfejs Movable i Powered
    {
        public function turnOnEngine()
        {
            echo 'Uruchamiam silnik w aucie';
        }

        public function move()
        {
            echo 'Jedziemy autem';
        }

        public function skret()
        {
            echo ' skręcamy';
        }
    }

    class Bike implements Moveable
    {
        public function move()
        {
            echo 'Jedziemy rowerem';
        }

        public function skret()
        {
            echo ' skręcamy';
        }
    }



    $vehicle = new Car();
    $vehicle -> turnOnEngine();
    echo '<br>';
    $vehicle -> move();
    $vehicle -> skret();
    echo '<br>';


    $bike = new Bike();
    $bike -> move();
    $bike -> skret();
echo '<br><br>';


?>






<?php
        //LUZNE SPRZĘŻENIE

interface InputStream //wejsciowy strumien danych
{

}

class Filee implements InputStream
{

}

class NetworkConnection implements InputStream
{

}

class Databasee implements InputStream
{

}

class EventReader
{
    public function listEvents(InputStream $eventList)
    {
        echo 'Otczytuje zawartosc listy wydarzen';
        print_r($eventList);
    }
}
$eventReader = new EventReader();
$eventReader -> listEvents(new Databasee());

?>










<?php
        //SPOJNOSC KLAS   SOLID
class File
{
    private $filname;

    public function __construct($filname)
    {
        $this -> filname = $filname;
    }

    public function getFilname()
    {
        return $this -> filename;
    }


}

class DataValidator
{
    private $data;

    public function __construct($data)
    {
        $this -> data = $data;
    }

    public function validateData()
    {
        echo 'Walidacja danych'.$this -> $data;
    }
}
echo '<br><br><br>';

?>




<?php
    //ZASADA OTWARTE ZAKNIĘTE     SOLID   zamknieta na modyfikacje ale otawrta na rozszerzenia

abstract class ReportPrinter
{
    public abstract function printt();
}

class XMLReportPrinter extends ReportPrinter
{
    public function printt()
    {
        echo 'Zapisuje raport do pliku XML';
    }
}

class JSONReportPrinter extends ReportPrinter
{
    public function printt()
    {
        echo 'Zapisuje raport do pliku JSON';
    }
}

$rp = new XMLReportPrinter();
$rp -> printt('XML');

echo '<br><br><br>'
?>









<?php
    //zasada podstawiania Liskov    SOLID
class Vehicleee
{

    public function move()
    {
        echo 'Jedziemy <br>';
    }


}

class VehicleWithEngine extends Vehicleee
{
    public function turnOnEngine()
    {
        echo ' uruchamiamy silnik <br>';
    }

}

class VehicleWithoutEngine extends Vehicleee
{


}

class Carrr extends VehicleWithEngine
{

}

class Motorbike extends VehicleWithEngine
{

}

class Bikeee extends VehicleWithoutEngine
{

}


$vehicleWithEngine = new Carrr();
$vehicle -> turnOnEngine();
$vehicle -> move();

$vehicleWithoutEngine = new VehicleWithoutEngine();
$vehicleWithoutEngine -> move();


?>


<?php
    //ZASADA SEGREGACJI INTERFEJSÓW         SOLID

interface Message
{
    public function preperMessage();
    public function send();
}

interface SMSMessage
{
    public function getPhoneNumber();
}

interface EmailMessage
{
    public function getEmial();
}


class SMS implements Message, SMSMessage
{
    public function preperMessage()
    {
        echo 'Przygotuje wiadomosci <br>';
    }

    public function getPhoneNumber()
    {
        echo 'Sprawdzam numer telefonu <br>';
    }

    public function send()
    {
        echo 'Wysyłam wiadomość';
    }
}

class Email implements Message, EmailMessage
{
    public function preperMessage()
    {
        echo 'Przygotuje wiadomosci <br>';
    }

    public function getEmial()
    {
        echo 'Sprawdzam adres email <br>';
    }


    public function send()
    {
        echo 'Wysyłam wiadomość';
    }
}

?>









<?php
    //ZASADA ODWRÓCENIA ZALEŻNOŚCI          SOLID       TRUDNE

class User
{

}

interface NotificationService
{
    public function sendd(User $user, $message);
}

class SMSS implements NotificationService
{
    public function sendd(User $user, $message)
    {
        echo 'Wysyłam powiadomienie SMS';
    }
}

class NotifictionManager
{
    public function sendNotifaction(User $user,NotificationService $notificationservice, $message)
    {
        $notificationservice -> sendd($user, $message);
    }
}

$nm = new NotifictionManager();
$nm -> sendNotifaction(new User(),  new SMSS(), 'witam');

?>













<?php
echo '<br><br>';
//WZORZEC FASADA  do sklepu internetowego


class Productt
{
    public function getProduct()
    {
        return 'Dane produktu';
    }
}

class Customer
{
    public function getCustomer()
    {
        return 'Dane klienta';
    }
}

class Payment
{
    public function getPayment()
    {
        return 'Dane platnosci';
    }
}

//Fasada zamówienia

class Order
{
    private $product;
    private $customer;
    private $payment;

    public function __construct()
    {
        $this -> product = new Productt();      //to jest na sztywno ale mozna z interfejsow skorzystac
        $this -> customer = new Customer();
        $this -> payment = new Payment();
    }

    public function prepareOrder()
    {
        echo $this -> product -> getProduct().'<br>';
        echo $this -> customer ->getCustomer().'<br>';
        echo $this -> payment -> getPayment().'<br>';
        echo 'zamówienie gotowe !';
    }
}

$oreder = new Order();
$oreder -> prepareOrder();


?>