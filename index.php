<?php
error_reporting(E_ALL);
ini_set('display_errors', 'on');
/*session_start();

require_once 'classes/User.php';
require_once 'classes/Employee.php';
require_once 'classes/Student.php';

include 'elems/connect_db.php';
if(isset($_SESSION['message']['login'])){
	echo $_SESSION['message']['login'].'<br>';
        unset($_SESSION['message']['login']);
}
if(!empty($_SESSION['auth'])){
        $content ="<br>";
}else{
        $content = '';
}

include 'elems/layout.php';

10.2

require_once 'classes/Employee.php';
$employee1 = new Employee('anton', 'yuriv', 'volod', 2000);
$employee2 = new Employee('asd', 'qwe', 'rty', 1000);
echo $employee1->salary + $employee2->salary;



19.1

require_once 'classes/User.php';
require_once 'classes/Employee.php';

$employee = new Employee();
$employee->setName('anton');
$employee->setAge(34);
$employee->setSalary(2000);                                                             echo $employee->getName().' ';              echo $employee->getAge().' ';               echo $employee->getSalary();



19.2

$student = new Student();
$student->setName('anton');
$student->setAge(34);
$student->setCourse(1);

echo $student->getName().' ';
echo $student->getAge().' ';
echo $student->getCourse();

28

require_once "classes/Post.php";
require_once "classes/Employee.php";

$programmer = new Post('programmer', 2000);
$manager = new Post('manager', 1500);
$driver = new Post('driver', 1000);
$employee = new Employee('anton', 'yuriv', $programmer);

echo $employee->getName();
echo '<br>';
echo $employee->getSurname();
echo '<br>';
echo $employee->getPostName(); 
echo '<br>';
echo $employee->getPostSalary();
$employee->changePost($manager);
echo '<br>';
echo $employee->getPostName().' '.$employee->getPostSalary();

29

require_once 'classes/ArraySumHelper.php';

$arr = [1,2,3];
echo ArraySumHelper::getSum2($arr);


30.1

require_once 'classes/Num.php';

echo Num::$num1 = 2 + Num::$num2 = 3;

30.2-30.3

require_once 'classes/Num.php';

Num::getSum();

30.4

require_once 'classes/Geometry.php';

echo Geometry::getCircleVolume(10);


33

require_once 'classes/Test1.php';
require_once 'classes/Test2.php';

$arr = [];
for($i=0; $i<10; $i++)
{
	if($i%2 == 0)
	{
		$test1 = new Test1;
		$test1->name = $i;
		$arr[] = $test1;
	} else {
		$test2 = new Test2;
		$test2->name = $i;
		$arr[] = $test2;
	}
}

foreach($arr as $elem)
{
	echo $elem->name.' class - '.get_class($elem);
	echo '<br>';
}
*/


//35
/*
require_once 'classes/User.php';
require_once 'classes/Employee.php';
require_once 'classes/Student.php';

$employee = new Employee();
$employee->setName('anton');
$employee->setSalary(1000);
echo 'employee '.$employee->getName().' have '.$employee->getSalary();
echo '<br>';
$employee->increaseRevenue(500);
echo 'increase - '.$employee->getSalary();
echo '<br>';
$employee->decreaseRevenue(1);
echo 'decrease - '.$employee->getSalary();
echo '<br>';

$student = new Student();
$student->setName('anya');
$student->setScholarship(500);
echo 'student '.$student->getName().' have '.$student->getScholarship();
echo '<br>';
$student->increaseRevenue(500);
echo 'increase - '.$student->getScholarship();
echo '<br>';
$student->decreaseRevenue(5);
echo 'decrease - '.$student->getScholarship();
echo '<br><br>';

require_once 'classes/Figure.php';
require_once 'classes/Rectangle.php';

$rectangle = new Rectangle(2, 3);
echo $rectangle->getSquare();
echo '<br>';
echo $rectangle->getPerimeter();
echo $rectangle->getSquarePerimeterSum();
 */

//36
/*
require_once 'classes/iFigure.php';
require_once 'classes/Disk.php';

$disk = new Disk(10);
echo $disk->getSquare();
echo '<br>';
echo $disk->getPerimeter();
 */

//37
/*
require_once 'classes/iFigure.php';
require_once 'classes/FigureCollection.php';
require_once 'classes/Disk.php';
require_once 'classes/Figure.php';

$figureCollection = new FigureCollection();
$figureCollection->addFigure(new Disk(10));
$figureCollection->addFigure(new Disk(10));

echo $figureCollection->getTotalSquare();
echo '<br>';
echo $figureCollection->getTotalPerimeter();
 */

//38
/*
require_once 'classes/iUser.php';
require_once 'classes/User.php';

$user = new User();
$user->setName('anton');
$user->setAge(35);
echo $user->getName().' '.$user->getAge();
 */

//39
/*
require_once 'classes/iCube.php';
require_once 'classes/Cube.php';

$cube = new Cube(3);
echo $cube->getVolume().' '.$cube->getSquare();

require_once 'classes/iUser.php';
require_once 'classes/User.php';

$user = new User('anton', 35);

echo 'pryvit '.$user->getName().' tobi '.$user->getAge().' rokiv!';
 */

//40
/*
require_once 'classes/iUser.php';
require_once 'classes/iEmployee.php';
require_once 'classes/Employee.php';

$employee = new Employee();
$employee->setName('anton');
$employee->setAge(35);
$employee->setSalary(2500);

echo 'pracivnyk '.$employee->getName().' maje '.$employee->getAge().' i zarplatu '.$employee->getSalary();
*/

//41
//
require_once 'classes/iFigure3d.php';
require_once 'classes/iFigure.php';
require_once 'classes/Cube.php';
require_once 'classes/Rectangle.php';

$cube1 = new Cube(1);
$cube2 = new Cube(2);
$cube3 = new Cube(3);
$cube4 = new Cube(4);

$rectangle1 = new Rectangle(1, 2);
$rectangle2 = new Rectangle(3, 4);
$rectangle3 = new Rectangle(5, 6);
$rectangle4 = new Rectangle(7, 8);
$rectangle5 = new Rectangle(9, 10);

$arr = [$cube1, $cube2, $cube3, $cube4, $rectangle1, $rectangle2, $rectangle3, $rectangle4, $rectangle5];
shuffle($arr);

foreach($arr as $elem)
{
    if($elem instanceof iFigure)
    {
        echo $elem->getSquare().'<br>';
    }
}
echo '<br>';

foreach ($arr as $elem)
{
    if($elem instanceof iFigure)
    {
        echo 'площа фігури = '.$elem->getSquare().'<br>';
    }
    if($elem instanceof iFigure3d)
    {
        echo 'обʼєм фігури = '.$elem->getVolume().'<br>';
    }

}