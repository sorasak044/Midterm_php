<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบทดสอบกลางภาค</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Prompt:ital,wght@0,200;1,200&display=swap" rel="stylesheet">
<style>
    body{
        font-family: 'Prompt', sans-serif;
    }
</style>
</head>

<body>
    <h3>ข้อที่ 1 </h3>
    <?php 
    $salary = 100000;
    if ($salary >= 100000){
        $bonus = $salary * 1;
    }
    else if ($salary >= 50000){
        $bonus = $salary * 2;
    }
    else {
        $bonus = $salary * 3;
    }
    $result = $bonus + $salary;
    echo "เงินเดือน = $salary <br>";
    echo "โบนัส = $bonus <br>";
    echo "เงินเดือนสุทธิ = $result <br>";
    ?>
    <h3>ข้อที่ 2 </h3>
    <?php 
     $name = array("สรศักดิ์","สมศักดิ์","สมศรี","สุพรรณ","สุทิน");
     $age = array("93","72","45","56","18");
     echo ("ชื่อ : ".$name[0]." อายุ: ".$age[0]."<br>");
     echo ("ชื่อ : ".$name[1]." อายุ: ".$age[1]."<br>");
     echo ("ชื่อ : ".$name[2]." อายุ: ".$age[2]."<br>");
     echo ("ชื่อ : ".$name[3]." อายุ: ".$age[3]."<br>");
     echo ("ชื่อ : ".$name[4]." อายุ: ".$age[4]."<br>");
    ?>
</body>
</html>