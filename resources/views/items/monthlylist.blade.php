<?php

// DB接続
$db = new mysqli('localhost', 'root', '', 'karatravel');

if (!$db) {
    print("DB接続失敗<br>");
}

// データ取得
$qry = "SELECT genre, namae, kinngaku FROM `items` WHERE DATE_FORMAT(created_at, '%Y%m') = DATE_FORMAT(NOW(), '%Y%m')";
$result = mysqli_query($db, $qry);
if (!$result) {
    print("データ取得失敗<br>");
}

// DB切断
$closed_flag = mysqli_close($db);


if (!$closed_flag){
    print("DB切断失敗<br>");
}

// 取得した値を表示 


?>


    
<table  class="table table-striped">
        <tbody>
        @foreach($result as $row)
            <tr>
                 <td>{{ $row['genre'] }}</td>
                 <td>{{ $row['namae'] }}</td>
                 <td>{{ $row['kinngaku'] }}円</td>
                 {!! Form::close() !!}</td>
                 </tr>
    
        @endforeach
        </tbody>
</table>
</div>