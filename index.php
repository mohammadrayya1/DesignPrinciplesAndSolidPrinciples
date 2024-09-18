<?php


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
//
//$route90=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Route("Homs","Alnabek",80);
//$route80=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Route("Alnabek","damascus",90);
//$driver =new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Driver("mohammad",35,46586);
//
//
//$bus=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Bus(45);
//$car=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Car();
//$ship=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\Ship();
//$ship->addRouts($route80);
//$ship->addRouts($route90);
//$ship->setDriver($driver);
//
//$car->addRouts($route80);
//$car->addRouts($route90);
//$car->setDriver($driver);
//$car->setMaxSpeed(180);
//$move=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\MoveonTheRoade();
//$moveOnTheWaves=new \SOLID\SOLIDMOHAMMADYAHIAH\OCP\MoveOnTheWaves();
//$ship->setMove($moveOnTheWaves);
//$car->setMove($move);
//$trip =new Trip(15,50,560,$car);
//
//
//echo $trip->move();


//
//$bonus=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\CalcolateManager();
//$marketManager=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\MarketingEmployee("mohammad",35,4500,$bonus);
//
//
//echo $marketManager->calculate();





//$forwardplay=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\ForwardPlay();
//$goalkeeperplay=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\GoalkeeperPlay();
//$defenderplay=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\DefenderPlay();
//
//
//
//$forward=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\Player("mohammad",35,$forwardplay);
//$goalkeeper=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\Player("Thomas",40,$goalkeeperplay);
//$defender=new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\Player("Andres",50,$defenderplay);
//
//$match= new \SOLID\SOLIDMOHAMMADYAHIAH\OCPMo\Matche();
//$match->setPlayers($forward);
//$match->setPlayers($goalkeeper);
//$match->setPlayers($defender);
//
//$match->start();





//$ac =new CheckingAccount("Mohammad",5000);
//
//echo $ac->balance."<br>";
//$ac->deposite(2000);
//echo $ac->balance;
//$ac->withdraw(3000);
//echo $ac->balance;
//
//$d=new FixedDepositAccount();


// $shape= new \SOLID\SOLIDMOHAMMADYAHIAH\LSP\Rectangle();


//
//$employies = \SOLID\SOLID\ISP\Repositiry::LoadEmployees();
//
//
//    foreach ($employies as $employee){
//            echo $employee->PrintSalarySlip()."<br>";
//            echo "<br>";
//    }

$c1=new \SOLID\SOLID\DIP\After\Customer();

$c1->mobileNumber="54446868";
$smsService=new \SOLID\SOLID\DIP\After\SmsService($c1->mobileNumber);
$serviceNoti=new \SOLID\SOLID\DIP\After\Notifications($smsService);


$serviceNoti->Notify();
?>