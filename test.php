<!doctype html>
<head><meta charset='utf-8'></head>
<?php
    error_reporting(E_ALL);
    ini_set("display_errors",1);
        
    $host='127.0.0.1';  
    $user='root';   //데이터베이스 이름
    $pw = ''; //='youn8704';
    $dbname='mobile_tsicketing';
    $mysqli = new mysqli($host,$user,$pw,$dbname);
    
    if($mysqli){
        echo "SQL 접근 성공<br/>\n";
    }   
    else {
        echo "SQL 접근 실패<br/>\n";
    }   

    // app 에서 가입 정보 받아옴
    $id=$_POST['userid'];
    $name=$_POST['username'];
    $password=$_POST['userpasswsord'];
    $phone=$_POST['userphone'];

    $sql="insert into ticketing_service (name,id,pw,phone)";
    $sql=$sql."values('$name','$id','$password','$phone')";
    
    if($mysqli->query($sql)){
        echo "inserting 성공";
        echo "<h3>회원가입 성공</h3>";
    }
    else{
        echo "inserting 실패";
        echo "<h3>회원가입 실패</h3>";
    }
?>