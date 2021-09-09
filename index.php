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
/*
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
*/

//43
/*
require_once 'classes/iProgrammer.php';
require_once 'classes/Employee.php';
require_once 'classes/Programmer.php';


$programmer = new Programmer('anton', 3000);
$programmer->addLang('php');
$programmer->addLang('html');
$langs = '';
foreach ($programmer->getLangs() as $lang)
{
	$langs .= $lang.' ';
}
echo 'programmer '.$programmer->getName().' zarplata '.$programmer->getSalary().' znaje movy: '.$langs;
*/

//44
/*
require_once 'classes/iSphere.php';
require_once 'classes/Sphere.php';

$sphere = new Sphere(10);
echo $sphere->getVolume().' ';
echo $sphere->getSquare();
*/

//46-47, 51
/*
require_once 'classes/Helper.php';
require_once 'classes/Trait1.php';
require_once 'classes/Trait2.php';
require_once 'classes/Trait3.php';
require_once 'classes/Country.php';

$country = new Country('Bratislava', 1000, 500000);
echo $country->getName().' '.$country->getAge().' '.$country->getPopulation().' ';

require_once 'classes/Test.php';
$test = new Test();
echo $test->getSum();
*/

//53
/*
require_once 'classes/User.php';

$user = new User('anton', 'yuriv', 'volod');
echo $user;

require_once 'classes/Arr.php';

$arr = new Arr();
echo $arr->add(1)->add(2)->add(3);
*/

//54
/*
require_once 'classes/User.php';

$user = new User('anton', 35);
echo $user->name.' ';
echo $user->age;

require_once 'classes/Date.php';

$date = new Date();
$date->day = '27';
$date->month = '08';
$date->year = '2021';

echo $date->weekDay;
*/

//55
/*
require_once 'classes/User.php';

$user = new User();

$user->name = 'anton';
$user->age = 35;

echo $user->name.' '.$user->age;
 */

//56
/*
require_once 'classes/Date.php';

$date = new Date('2021-09-01');

echo $date->getDay().' ';
echo $date->getMonth('en').' ';
echo $date->getMonth('ua').' ';
echo $date->getMonth().' ';
echo $date->getYear().' ';
echo $date->getWeekDay('en').' ';
echo $date->getWeekDay('ua').' ';
echo $date->getWeekDay('').' ';
echo '<br>';
echo $date->addDay(5).' ';
echo $date->subDay(4);
echo '<br>';
echo $date->addMonth(3).' ';
echo $date->subMonth(1);
echo '<br>';
echo $date->addYear(5).' ';
echo $date->subYear(4);
echo '<br>';
echo $date->format('y:m:d');
*/

//57
/*
require_once 'classes/Date.php';
require_once 'classes/Interval.php';

$date1 = new Date('2022-10-01');
$date2 = new Date('2021-08-01');

$interval = new Interval($date1, $date2);

echo $interval->toDays().' ';
echo $interval->toMonths().' ';
echo $interval->toYears();
*/

//58
/*
require_once 'classes/iFile.php';
require_once 'classes/File.php';

$file = new File('test2/test1/TEST/test.txt');

echo $file->getPath().'<br>';
echo $file->getDir().'<br>';
echo $file->getName().'<br>';
echo $file->getExt().'<br>';
echo $file->getSize().'<br>';
echo $file->getText().'<br>';
$file->setText('asdfsdf').'<br>';
echo $file->getText().'<br>';
$file->appendText('!!!').'<br>';
echo $file->getText().'<br>';
$file->copy('test2/test1/test.txt').'<br>';
$file->delete('test2/test1/test.txt').'<br>';
$file->rename('test.txt').'<br>';
$file->replace('test2/test1/test.txt').'<br>';
*/

//59-63
/*
require_once 'classes/Tag.php';

$img = new Tag('img src=""');
echo $img->open();
$header = new Tag('header');
echo $header->open().'header site'.$header->close();
/*$tag = new Tag('input', ['id' => 'test', 'class' => 'eee bbb']);
echo $tag->open();*/
/*$tag = new Tag('input');
echo $tag->setAttr('id', 'test')->setAttr('class', 'eee bbb')->removeAttr('id')->open();*/
/*$tag = new Tag('input');

echo $tag
    ->setAttrs(['id' => 'test', 'class'
    => 'eee'])
    ->setAttr('type', 'text')
    ->open();
$tag = new Tag('input');

echo $tag
    ->setAttrs(['id'=>'test', 'disabled'=>true])
    //->setAttr('disabled', true)
    ->open();
 */

//64-67
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';

echo (new Tag('input'))->setAttr('name', 'name1')->open();
echo (new Tag('input'))->setAttr('name', 'name2')->open();
echo (new Tag('input'))->addClass('eee')->open();
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->open();
echo (new Tag('input'))->setAttr('class', 'eee bbb')->addClass('kkk')->open();
echo (new Tag('input'))->setAttr('class', 'eee bbb')->addClass('eee')->open();
echo (new Tag('input'))->addClass('eee')->addClass('bbb')->addClass('eee')->open();
echo (new Tag('input'))->setAttr('class', 'eee zzz kkk')->removeClass('zzz')->open();
echo (new Tag('input'))->setAttrs(['id'=>'test', 'disabled'=>true])
    //->setAttr('disabled', true)
    ->open();
*/

//68
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/Image.php';

echo (new Image())->setAttr('src', '17-53-39.png')->setAttr('width', 300)
    ->setAttr('height', 200)->open();
echo (new Image())->setAttr('src', '17-53-39.png')->setAttr('width', 300)
    ->setAttr('height', 200);
*/

//69
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/Link.php';

echo (new Link())->setAttr('href', '/index.php')->setText('index')->show();
echo '<br>';
for($i=1; $i<=5; $i++)
{
    echo (new Link())->setAttr('href', "/$i.php")->setText("page $i")->show().' ';
}
*/

//70
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/ListItem.php';
require_once 'classes/HtmlList.php';
require_once 'classes/Ul.php';
require_once 'classes/Ol.php';

$list = new HtmlList('ul');

echo $list->addItem((new ListItem())->setText('item1'))
        ->addItem((new ListItem())->setText('item2'))
        ->addItem((new ListItem())->setText('item3'));
echo '<br>';

$ul = new Ul();
echo $ul->addItem((new ListItem())->setText('item1'))
    ->addItem((new ListItem())->setText('item2'))
    ->addItem((new ListItem())->setText('item3'));
echo '<br>';

$ol = new Ol();
echo $ol->addItem((new ListItem())->setText('item1'))
    ->addItem((new ListItem())->setText('item2'))
    ->addItem((new ListItem())->setText('item3'));
*/

//71
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/Form.php';

$form = (new Form())->setAttrs(['action'=>'test.php', 'method'=>'POST']);
echo $form->open();
echo $form->close();
*/

//72-74
/*
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/Form.php';
require_once 'classes/Input.php';
require_once 'classes/Password.php';
require_once 'classes/Submit.php';
require_once 'classes/Textarea.php';
require_once 'classes/Hidden.php';

$form = (new Form)->setAttrs(['action'
=> '', 'method' => 'GET']);

echo $form->open();
echo (new Input)->setAttr('name', 'year');
echo (new Password())->setAttr('name', 'pass');
echo (new Input)->setAttr('type', 'submit');
echo $form->close();

echo '<br><br>';

$form = (new Form)->setAttrs(['action' => '', 'method'=> 'GET']);
echo $form->open();
echo (new Input)->setAttr('name', 'year')->setAttr('value', date('Y'));
echo (new Input)->setAttr('type', 'submit');
echo $form->close();

echo '<br><br>';

$form4 = (new Form())->setAttrs(['action'=>'', 'method'=>'POST']);

echo $form4->open();
for ($i=1; $i<=5; $i++)
{
	echo (new Input())->setAttr('name', "num$i").'<br>';
}
echo (new Input())->setAttr('type', 'submit');
echo $form4->close();

$sum = 0;

for ($i=1; $i<=5; $i++)
{
	if (!empty($_REQUEST["num$i"]))
	{
		$sum += $_REQUEST["num$i"];
	}
}
if ($sum != 0)
{
	echo $sum;
}

echo '<br><br>';
 
$form73 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form73->open();
echo (new Input())->setAttr('name', 'anton');
echo new Submit();
echo $form->close();

echo '<br><br>';

$form76 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form76->open();
echo (new Input())->setAttr('name', 'user');
echo (new Textarea())->setAttr('name', 'message');
echo new Submit();
echo $form76->close();

echo '<br><br>';

$form75 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);
echo $form->open();
echo (new Input())->setAttr('user', 'name');
echo (new Hidden())->setAttrs(['name'=>'id', 'value'=>'1']);
echo new Submit();
echo $form->close();
*/

//77
//
require_once 'classes/iTag.php';
require_once 'classes/Tag.php';
require_once 'classes/Form.php';
require_once 'classes/Input.php';
require_once 'classes/Hidden.php';
require_once 'classes/Checkbox.php';
require_once 'classes/Submit.php';

$form77 = (new Form())->setAttrs(['action'=>'', 'method'=>'GET']);

echo $form77->open();
echo (new Input())->setAttr('name', 'user');
echo (new Checkbox())->setAttr('name', 'checkbox');
echo new Submit();
echo $form77->close();