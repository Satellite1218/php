<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
$query = "insert into myuser(name, age, gender, work) values('".$_POST['u_name']."',".$_POST['u_age'].",'".$_POST['u_gender']."','".$_POST['u_work']."');";
// view.php에서 post 방식으로 넘어온 변수 받기 
$result = mysqli_query($conn, $query);
if($result){
    echo "<script>alert('데이터 삽입 성공');</script>";
}
else{
    echo "<script>alert('데이터 삽입 실패');</script>";
}
?>
<meta http-equiv="refresh" content="0; url=view.php">