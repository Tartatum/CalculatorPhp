<html>
<head>
<title>Calculator</title>
</head>
<body style="text-align:center; font-size : 50px;">
<?php
if(isset( $_GET['op'] ) ) { 
    if (isset($_GET['x'])) {
        if (isset($_GET['y'])) {
            $x = $_GET['x'];
            $y = $_GET['y'];
            
            switch($_GET['op']){
                case "sum":
                    $z = $x+$y;
                    echo '<h1>$x+$y = $z</font></h1>';
                break;
                case "substract":
                    $z = $x-$y;
                    echo "<h1>$x-$y = $z</h1>";
                break;
                case "multiply":
                    $z = $x*$y;
                    echo "<h1>$x*$y = $z</h1>";
                break;
                case "divide":
                    $z = $x/$y;
                    echo "<h1>$x/$y = $z</h1>";
                break;
                default:
                $op = $_GET['op'];
                echo "<h1>Operation not recognized: $op</h1>";
            }
        } else {
            echo "<h1>Y value is null</h1>";
        }
        
    } else {
        echo "<h1>X value is null</h1>";
    }
    
}else {
    echo "<h1>There is no Operation chosed</h1>";
}

?>
</body>
</html>