<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'mydb');
$query = "select * from myuser";
$result = mysqli_query($conn, $query);
$count = mysqli_num_rows($result);

echo "<table border=1 width=500>";
echo "<tr><td colspan=7>데이터의 개수는 " . $count . "개 입니다!</td></tr>";
echo "<tr><th>번호</th><th>이름</th><th>나이</th><th>성별</th><th>직업</th><th>삭제</th><th>수정</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr align=center><tr>
<td>".$row["num"]."</td>
<td>".$row["name"]."</td>
<td>".$row["age"]."</td>
<td>".$row["gender"]."</td>
<td>".$row["work"]."</td>
<td> <a hred=delete.php=".$row["num"].">삭제</a></td>
<td><a hred=modify.php=".$row["num"].">수정</a></td></tr>";
}
echo "</table>";
?>

<a href = modify.php?mun=1&name=이순신&age=20&gender=남성&work=개발자>

<form method=post action=insert.php>
이름:<input type=text name=u_name><BR>
나이:<input type=text name=u_age><BR>
성별:<input type=text name=u_gender><BR>
직업:<input type=text name=u_work><BR>
<input type=submit value=저장>
</form>
