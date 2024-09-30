<?php
$z1 = ['Харисов', 'Мадышев', 'Багавеев', 'Федотов', 'Савин',];
$z2 = [
    "Спортивный" => "Сидоров",
    "Художественный" => "Емелина",
    "Музыкальный" => "Иванова",
    "Литературный" => "Петров",
    "Биологический" => "Антонова"
];
uasort($z2, function ($a, $b) {
    return strcasecmp($a, $b);
});

$student = [
    'name' => 'Рамазан',
    'surname' => 'Харисов',
    'group' => '427',
    'hobby' => 'Плавание',
    'social' => [
        'VK' => 'vk.com/zxc/1990',
        'Instagram' => '-',
        'TG' => 't.me/harram09'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>

        <div class="z1">
            <h2>Задание 1</h2>
            <?php
            foreach ($z1 as $club) {
                echo "$club<br>";
            }
            ?>
            <p>В массиве 1 задания <?= count($z1) ?> фамилий.
                <?php
                if (in_array("Сидоров", $z1)) {
                    echo "Сидоров есть в массиве 1 задания. ";
                } else if (!in_array("Сидоров", $z1)) {
                    echo "Сидорова нет в массиве 1 задания. ";
                }
                $expelled = array_pop($z1);
                ?>
                Последняя фамилия (<?= $expelled ?>) в массиве была удалена. <br>
            </p>
            <?php
            foreach ($z1 as $club) {
                echo "$club<br>";
            }
            ?>
        </div>
        <div class="z2">
            <h2>Задание 2</h2>
            <?php
            foreach ($z2 as $club => $surname) {
                echo "$club - $surname<br>";
            }
            ?>
        </div>
        <div class="z3">
            <h2>Задание 3</h2>
            <h3>Студент <?= $student['name'] ?> <?= $student['surname'] ?></h3>
            <p>Группа: <?= $student['group'] ?></p>
            <p>Хобби: <?= $student['hobby'] ?></p>
            <p>Соцсети:
                <?php
                foreach ($student['social'] as $social => $link) {
                    echo "$social: $link<br>";
                }
                ?>
            </p>
        </div>
    </section>
</body>

</html>