<html>
<title>test</title>

<body>
    <h1>my</h1>
    <?php
    $mykv = ['name' => 'lee shin woo', 'age' => '15'];
    echo $mykv['name'];
    echo '<br>';
    echo $mykv['age'];
    echo '<br>';
    echo '<br>';
    $myarray = [1, 2, 3, 4, 5];
    echo "배열갯수는 ";
    echo count($myarray);
    echo " 개다";
    echo '<br>';
    for ($i = 0; $i < 5; $i++) {
        echo $myarray[$i] . '<br>';
    }
    echo '<br>';
    echo '컬러 : <input type = color><br>';
    echo '날짜 : <input type = date><br>';
    echo '숫자 : <input type = number><br>';
    echo '슬라이드 : <input type = range><br>';
    echo '체크박스 : <input type = checkbox><br>';
    echo '버튼 : <input type = button value = "확인"><br><br>';
    ?>
    <table border=1 width=500>
        <tr align="center">
            <td>1</td>
            <td>2</td>
        </tr>
        <tr align="center">
            <td>
                <?php
                for ($i = 0; $i < 3; $i++) {
                    echo '이름 : <input type = text><br>';
                }
                ?>
            </td>
            <td>4</td>
        </tr>
    </table>
    <?php
    echo '<script>';
    echo 'function myfun() {';
    echo "   document.getElementById('mytext').value = 'test';";
    echo '}';
    echo '</script>';
    echo '<input type = text id = mytext>';
    echo '<input type = button value = click onclick = myfun()>';
    ?>
</body>

</html>
