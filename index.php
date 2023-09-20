<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include 'module1.php';
        include 'module2.php';
        include 'module3.php';

       $result1=task1($V,$U,$T1,$T2);

       $result2=task2($R1,$R2);
    
       $result3_1=task3_1($a,$b);
       $result3_2=task3_2($a,$b);
 
    ?>
    <h3>1 задача</h3>
    <p><?= "Путь, пройденный лодкой: $result1 " ?></p>
    <h3>2 задача</h3>
    <p><?= "Площадь кольца с внутренним радиусом $R1 и внешним радиусом $R2 равна: $result2 км" ?></p>
    <h3>3 задача</h3>
    <p><?= "Периметр прямоугольного треугольника: $result3_1 "?></p>
    <p><?= "Площадь прямоугольного треугольника: $result3_2 "?></p>
</body>
</html>