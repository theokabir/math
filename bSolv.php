<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./res/bootstrap.css">
    <link rel="stylesheet" href="./res/style.css">
</head>
<body>
    <div class="main rounded p-4">
        
        <?php
            $txt = "";
            $a = (isset($_GET["a"]))?$_GET["a"]:false;
            $b = (isset($_GET["b"]))?$_GET["b"]:false;
            $c = (isset($_GET["c"]))?$_GET["c"]:false;

            if($a and $b and $c){

                $txt .= "<p>$a"."x²".(($b>0)?"+$b":$b)."x".(($c>0)?"+$c":$c)."=0</p>";
                $txt .= "<p>a = $a <br>b = $b<br>c = $c</p>";
                $txt .= "<p>Δ = B² - 4.a.c</p>";
                $txt .= "<p>Δ = $b"."² - 4.".(($a<0)?"($a)":$a).".".(($c<0)?"($c)":$c)."</p>";
                $bp = pow($b,2);
                $res_sub_delta = 4*$a*$c;
                $txt .= "<p>Δ = $bp - ". (($res_sub_delta<0)?"($res_sub_delta)":$res_sub_delta) ."</p>";
                $delta = $bp - $res_sub_delta;
                $txt .= "<p>Δ = $delta</p>";
                $txt .= "<p>x1 = (-".(($b<0)?"($b)":$b)." + √($delta))/(2.$a)</p>";
                $sub_num = 2*$a;
                if($delta<0){
                    $txt .= "<h3>Erro: Delta menor que 0</h3>";
                }else{
                    $sqrtDelta = sqrt($delta);
                    $minB = $b * -1;
                    $txt .= "<p>x1 = ($minB + $sqrtDelta)/$sub_num</p>";
                    $txt .= "<p>x1 = ". ($minB + $sqrtDelta) ."/$sub_num</p>";
                    $x1 = ($minB + $sqrtDelta)/$sub_num;
                    $txt .= "<p>x1 = $x1</p>";
                    $txt .= "<p>x2 = ($minB - $sqrtDelta)/$sub_num</p>";
                    $txt .= "<p>x2 = ". ($minB - $sqrtDelta) ."/$sub_num</p>";
                    $x2 = ($minB - $sqrtDelta)/$sub_num;
                    $txt .= "<p>x2 = $x2</p>";
                }

                echo $txt;
            }else{
                echo "erro";
            }
        ?>
        
    </div>
    <script src="./res/jquery.js"></script>
    <script src="./res/popper.js"></script>
    <script src="./res/bootstrap.js"></script>
    <script src="./res/script.js"></script>
</body>
</html>