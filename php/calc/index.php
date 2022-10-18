<?php
$signs = ['-', '+', '*', 'x', '/'];
$stringPost = '';
$stringGet = '';

$operators = [
    '*' => function ($a, $b) {
        return $a * $b;
    },

    '-' => function ($a, $b) {
        return $a - $b;
    },
    '+' => function ($a, $b) {
        return $a + $b;
    },
    '/' => function ($a, $b) {
        if ($b == 0) {
            return 'на ноль делить нельзя';
        } else {
            return round($a / $b, 2);
        }
    },

];

function  functionGet($a, $b, $operator)
{
    global $operators;

    $result = '' . $a . '' . $operator . '' . $b . "=" . $operators[$operator]($a, $b);

    return $result;
};

//calc 1
if (isset($_GET['submit'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operator = $_GET['operation'];

    $stringGet = functionGet(floatval($num1), floatval($num2), $operator);
}

//calc 2
function  functionPost($str, $signs)
{
    global $operators;

    foreach ($signs as $val) {
        $index = stripos($str, $val);

        if ($index !== false && (array_key_exists($val, $operators))) {

            $num1 = floatval(substr($str, 0, $index));
            $num2 = floatval(substr($str, $index + 1));

            $result = '' . $num1 . '' . $val . '' . $num2 . "=" . $operators[$val]($num1, $num2);
        }
    }

    return $result;
};

if (isset($_POST['submit'])) {

    $num3 = $_POST['num3'];
    $num3 = str_replace(' ', '', $num3);
    $num3 = str_replace('x', '*', $num3);
    $num3 = str_replace(',', '.', $num3);

    if (preg_match("#^[0-9\,.+\-*\/\ ]+$#", $num3)) {
        $stringPost = functionPost($num3, $signs);
    } else {
        $stringPost = "Есть недопустимые символы ";
    }
}

include 'template.php';

?>
