
<?php 
/* function sum($x,$y){
    $z=$x+$y;
    return $z;
}
echo sum(5,10); 

 */

/* function addNumbers(float $a , float $b): float{
    return $a+$b;

}
echo addNumbers (1.2 , 5.2); 

 */

/* define ("PI",3.415929);
$radius=10;
$area = PI*PI*$radius;
echo $area;


 */


 /* 
 $x=true;
 if ($x){
    die("Error");
 }
 */
/* $x=array(1,2,3,4,5);
var_dump($x);
echo "<br>";
unset($x[2]);
var_dump($x);



 */
/* 
 $x=23;
 echo isset($x)?"yes" : "no";


 */


/* if (true){
    echo "variable x inside if is : $x";

} */
/* $x=5;
function myTest(){

echo "variable x inside function is :$x";
}
myTest();
echo "variable x outside function is : $x";



 */


/*  $x = 5;
 $y = 10;
 
 function myTest() {
     global $x, $y;
     $y = $x + $y;
 }
 
 myTest();
 echo $y;


 */
/* function myTest(){
    static $x=0;
    echo $x;
    $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";

myTest();
echo "<br>";
myTest();
echo "<br>";
myTes/* t();
echo "<br>"; */
/* $x=array(1,"ali",true,4,5.23);
var_dump($x[2]);
 */
/* $x=array (1,2,3,4,5);
foreach ($x as $value){
    echo $value;
    echo "<br>";
}
 */


/*  $x =[13,52,93,674,4565];
/*  echo count($x); */

/*  for ($i=0; $i<count($x);$i++){
    echo $x [$i];
    echo "<br>"; 
 } 
 *$information =["Ali",24,"website"];
 list($name,$age,$site)=$information;
 echo $name ,  $age,$site;

*/
/* 
$x=5;
$y=5;
$a=$x++;
$b=++$y;
echo $a "<br>";
echo $b */

/* $months=["janvier"=> 31,
 "fevrier"=>28,
 "mars"=>31,
 "avril"=>30,
 "may"=>31,
 "juin"=>30,
 "juillet"=>31,
 "aout"=>31,
 "septembre"=>30,
 "octobre"=>31,
 "novembre"=>30,
 "decembre"=>31,

];
foreach($months as $month=>$nbJour){
    echo $month ." " . "a" ." ".$nbJour . " "."jours" . "<br>";  
} */

/* unction pluriel($nb)
{
    $retval = "";
    if ($nb>1){
        $retval="s";

    }
    return $retval;

}unction pluriel($nb)
{
    $retval = "";
    if ($nb>1){
        $retval="s";

    }
    return $retval;

}
$nb=1;
echo "$nb étoile" . pluriel($nb)."<br>;
$nb=3;
echo "$nb étoile" .pluriel($nb)."<br>;

$nb=1;
echo "$nb étoile" . pluriel($nb)."<br>;
$nb=3;
echo "$nb étoile" .pluriel($nb)."<br>;
 */
/* 
 $x=true;
 echo status=($x)?true:false; */
/* $colors=["red","green","blue","yellow"];
foreach ($colors as $value ){
    echo "$value<br>";
}
function writemsg(){
    echo "webprog.ir";

}
/* writemsg(); */
/* function firstName($fname){
    echo "my first name is :$fname";
}
firstName("Ali"); */
/* function sum ($x,$y){
    $z=$x+$y;
   

}
/* /* echo sum(5,10); */
/* $x=true;
if($x){
    die("Error"); 
}*/
/* $x = ["1", "2", "3", "4", "5"];  // Define an array with 5 elements
var_dump($x);                    // Output the contents of the array using var_dump()
echo "<br>";                     // Output a line break
unset($x[2]);                    // Remove the element with index 2
var_dump($x);                    // Output the modified contents of the array using var_dump()
 */
/* $x=5;
function mytest(){
    echo "variable x inside if is :$x";
}
mytest();
echo "variable x outside function is :$x"; */
/* $x=5;
if (true){
    echo "variable x inside if is :$x";
} */
/* $x=23;
echo isset($x)?"yes":"no"; */
/* $x=5;
if (true){
    
   " echo variable x inside if is:$x";
} */
/* $x=5;
function myTest(){
    $x=5;
    echo"variable x inside if is:$x <br>";
}
myTest();
 echo "variable x outside if is $x"; */
 /* $x=5;
 $y=10;
 function myTest(){
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
 }
 myTest();
 echo$y; */
/*  function myTest(){
     static $x=0;
    echo$x;
    $x++;
}
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
myTest();
echo"<br>";
 */
/* $str="this is some <b>bold</b>text";
echo htmlspecialchars ($str);
 */
/* 
echo strpos("webProg","Prog");
 */
/* echo str_replace("web","ali","webprog"); */
/* $x=["web","prog"];
$result=implode(' s',$x);
var_dump ($result);
echo  */
/* $x=array(1,"ali",true);
var_dump($x) */
/* v */
/* $age=array("Ali"=>"27","navid"=>"21");
foreach($age as $key => $value) {
    echo "key"=. $key . ",sen=" .$value;
    echo "<br>" 
}
 */
/* $x=[1,2,3,4,5];
echo count ($x);
for($i=0;$i<  count($x);$i++){
    echo $x[$i];
    echo "<br>";
} */

/* $prson = ["Ali",27,"webprog.ir"];
list($name,$age,$site)=$prson;
echo $name,$age,$site;

 */
/* $cars = array ("volvo","BMW","Totoya");
sort($cars);
var_dump($cars); */
/* $numbers = array(4,6,2,22,11);
sort($numbers);
var_dump($numbers); */
/* $numbers=array (4,6,2,22,11);
array_push($numbers,3);
var_dump($numbers);
 */
/* $cookie_name="user";
$cookie_value="firoozeh"; */
/* setcookie($cookie_name,$cookie_value,time()+3600);
if (!isset($_COOKIE[$cookie_name])){
    echo "cookie named '".$cookie_name."'is not set!";
}else{
        echo "cookie '".$cookie_name."' is set<br>";
        echo "value is '".$_COOKIE[$cookie_name];
}

     */     
/* setcookie($cookie_name,"",time()-3600)
 */
/* $session_name="user";
$session_value="firoozeh";

session_start();

if (isset ($_SESSION [$session_name])){
    echo"session '".$session_name."' is set<br>";
    echo "value is :".$_SESSION[$session_name];

}else {
    $_SESSION[$session_name]=$session_value;
    echo "session started";
} */
$session_name="user";
$session_value="firoozeh";

session_start();
session_unset();
session_destroy();
if ( isset($_SESSION[$session_name]) ) {
    echo "session '".session_name."' is set!<br>";
    echo "value is :".$_SESSION[$session_name];
}else{
    echo "session destroy";
}

 ?>  