<?php
$s="localhost";
$u="root";
$p="";
$con=mysqli_connect($s,$u,$p);
if(!$con)
{
    die("error");
}
mysqli_select_db($con,'saleem');
if(isset($_POST['submit']))
{
    $n=$_POST['uname'];
    $p=$_POST['password'];
    $r=$_POST['rpassword'];
    $m=$_POST['mail'];
    $g=$_POST['gender'];
    $h=$_POST['hobbie'];
    $s=" " ;
    foreach($h as $s1)
    {
        $s.=$s1.",";
    }
    $sql="insert into details values('$n','$p','$r','$m','$g','$s')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('inserted')
        window.open('we.php','_self')</script>";
    }
    else{
        echo "error";
    }
}
mysqli_close($con);
?>
