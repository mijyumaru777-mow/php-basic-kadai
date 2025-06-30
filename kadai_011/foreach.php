<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
        //連想配列を作成する
        $personal_data = array(
            '名前' => '玉ねぎ',
            '値段' => 200,
            '産地' => '北海道',
        );
        
        //foreach文とecho文を使ってキーと値を出力
        foreach ($personal_data as $key => $value) {
             echo $key ."：". $value."<br>"; //コロン（：）で区切って、改行する
        }

        //
        ?>
    </p>   
</body>
</html>