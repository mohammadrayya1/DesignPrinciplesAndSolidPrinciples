<?php

use SOLID\CompositionInheritance\BlackOlive;
use SOLID\CompositionInheritance\Chicken;
use SOLID\CompositionInheritance\GreenPaper;
use SOLID\CompositionInheritance\Pizza;
use SOLID\CompositionInheritance\Tomato;
use SOLID\LooseVsTightCoupling\TightCoupling\NotificationServices;
use SOLID\LooseVsTightCoupling\LooseCoupling\NotificationServices as LooseNotificationServices;
use SOLID\SOLID\OpenClosedPrinciple\Before\QuestionBank;
use SOLID\SOLIDMOHAMMADYAHIAH\OCP\Trip;


require_once __DIR__ . '/vendor/autoload.php';

//
//
//$backolive=new BlackOlive();
//$chicken=new Chicken();
//$greePaper=new GreenPaper();
//$tomato= new Tomato();
//
//
//$pizza= new Pizza();
//
//$pizza->addTopping($backolive);
//$pizza->addTopping($chicken);
//$pizza->addTopping($greePaper);
//$pizza->addTopping($tomato);
//
//
//echo $pizza;





//Tigtly Coupling
//$mail = new \SOLID\LooseVsTightCoupling\TightCoupling\EmailService();
//$sms =new \SOLID\LooseVsTightCoupling\TightCoupling\SmsService();
//$notification = new NotificationServices($sms,$mail);
//
//
//$notification->notify();

//Loosely Coupling
//$mail = new \SOLID\LooseVsTightCoupling\LooseCoupling\EmailService;
//$sms = new \SOLID\LooseVsTightCoupling\LooseCoupling\SmsService();
//$notification = new LooseNotificationServices($mail);
//$notification->notify();


//Befor SRP
//$account1 = new \SOLID\SOLID\SRP\Before\Account("mohammad","mohammad@gmail.com",4500);
//$account1->MakeTransaction(500);

//$account1 = new \SOLID\SOLID\SRP\After\Account("mohammad","mohammad@gmail.com",4500);
//$accountService= new \SOLID\SOLID\SRP\After\AccountService();
//
//
//$accountService->WithDraw($account1,460);



//$bus1=new \SOLID\SOLIDMOHAMMADYAHIAH\SRP\Bus(45);
//$bus1->setColor("red");
//$bus1->setDoors(3);
//$bus1->setMaxSpeed(180);
//
//
//$drive = new \SOLID\SOLIDMOHAMMADYAHIAH\SRP\Driver("mohammad",35,54658);
//
//$routeM4=new \SOLID\SOLIDMOHAMMADYAHIAH\SRP\Route("Alnabek","Homes",80);
//$routeM5=new \SOLID\SOLIDMOHAMMADYAHIAH\SRP\Route("Homes","Alleppo",200);
//$bus1->setDriver($drive);
//$bus1->addRouts($routeM4);
//$bus1->addRouts($routeM5);
//
//$bus1->move();


//Before
//$questions = QuestionBank::generate();
//
//$quis = new \SOLID\SOLID\OpenClosedPrinciple\Before\Quiz($questions);
//
//
//$quis->print();



//After

//$questions = \SOLID\SOLID\OpenClosedPrinciple\After\QuestionBank::generate();

//$quis = new \SOLID\SOLID\OpenClosedPrinciple\After\Quiz($questions);


//$quis->print();

$route90=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Route("Homs","Alnabek",80);
$route80=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Route("Alnabek","damascus",90);
$driver =new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Driver("mohammad",35,46586);


$bus=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Bus(45);
$car=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Car();
$ship=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Ship();
$ship->addRouts($route80);
$ship->addRouts($route90);
$ship->setDriver($driver);

$car->addRouts($route80);
$car->addRouts($route90);
$car->setDriver($driver);
$car->setMaxSpeed(180);
$move=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\MoveonTheRoade();
$moveOnTheWaves=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\MoveOnTheWaves();
$ship->setMove($moveOnTheWaves);
$car->setMove($move);
$trip =new Trip(15,50,560,$car);


echo $trip->move();





?>