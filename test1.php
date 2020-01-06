<?php

// 1. 1부터 10까지 합 구해서 출력
$sum = 0;
for ($i = 1; $i < 10; $i++)
    $sum += $i;
echo $sum . "<br><br>";

// 2. 1부터 100까지 짝수 출력
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0)
        echo $i . " ";
}

echo "<br><br>";

// 3. score = 85 일 때 수우미양가 출력
$score = 85;
switch(floor($score/10)) {
    case 9:
        echo "수";
        break;
    case 8:
        echo "우";
        break;
    case 7:
        echo "미";
        break;
    case 6:
        echo "양";
        break;
    case 5:
        echo "가";
        break;
    default:
        break;
}

echo "<br><br>";

// 4. 1부터 100까지 홀수의 합 출력 (while 문)
$sum = 0;
$i = 1;
while ($i <= 100) {
    if ($i % 2 == 1)
        $sum += $i;
    $i++;
}
echo $sum;

?>