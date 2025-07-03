<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>
<body>
    <p>
        <?php
        class Food{
            private $name;
            private $price;

            //コンストラクタを追加
            function __construct(string $name, int $price){
                $this->name = $name;
                $this->price = $price;
            }
            //show_priceメソッド
            function show_price(){
                echo $this->price.'<br>';
            }
        }

        //Foodクラスのインスタンスを作成
        $potato = new Food("potato",250);
        $potato->show_price();
        print_r($potato);

        class Animal{
            private $name;
            private $height;
            private $weight;

            //コンストラクタを追加
            function __construct(string $name, $height, $weight){
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
            //show_heightメソッド
            function show_height(){
                echo $this->height.'<br>';
            }
        }

        //Animalクラスのインスタンスを作成
        $lion = new Animal("lion",110,190);
        $lion->show_height();
        print_r($lion);
        ?>
</body>
</html>