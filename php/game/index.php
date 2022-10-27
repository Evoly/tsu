<?php

include 'connection.php';
// $result = $conn->query("SELECT * FROM words");
$wordObj = $conn->query("SELECT word FROM words WHERE id = 1");
$name = 'аноним';

function updateTable() {
    global $conn;
    return
    $conn->query("SELECT * FROM gamers ORDER BY win");
}

$gameTable = updateTable();

$second_page = false;

if (isset($_GET["name"])) {
    global $name;
    $name = $_GET["name"];
}
    


if ($name) {
    global $gameTable;

    $player = mysqli_fetch_array($conn->query("SELECT name FROM gamers WHERE name='$name' "));

    if (empty($player)) {
        $conn->query("
            INSERT INTO gamers(name, game, win)
            VALUES('$name', '0', '0')
        ");

        $gameTable = updateTable();
    }

}

//todo del ?

$category = [];

function getWord()
{
    global $conn;
    $wordObj = $conn->query("SELECT word FROM words ORDER BY RAND() LIMIT 1 ");
    $word = mysqli_fetch_array($wordObj);
    return $word;
};

if (isset($_POST['random'])) {
    global $second_page;
    $wordToHtml = getWord();
    $test = $wordToHtml['word'];
    $second_page = true;
};

if (isset($_POST['gameoverS'])) {
    global $name;
    global $gameTable;
    $currentPlayer = $name ?? 'аноним';

    $conn->query(" 
    UPDATE gamers SET game = game + 1, win = win + 1 WHERE name = '$currentPlayer'"); 
    
    $gameTable = updateTable();

    $val = $_POST['name'] ?? 0;
    $second_page = false;
    
}

//to do current player del

if (isset($_POST['gameoverFail'])) {
    global $name;
    global $gameTable;
    $currentPlayer = $name ?? 'аноним';
    echo 'currentPlayer:' .$currentPlayer;
    
    $conn->query(" 
    UPDATE gamers SET game = game + 1 WHERE name = '$currentPlayer'");

    $val = $_POST['name'] ?? 0;    
    $second_page = false;
}



?>

<!doctype html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Neucha&display=swap" rel="stylesheet">

    <title>Игра в слова</title>
</head>

<body>
    <main class="main container" id="staticBackdrop1">
        <h1>Игра в слова</h1>
        <div class="row auth">
            <form action="" class="col" method="GET">
                <label for="name" class="form-label">Ваше имя?</label>
                <input class="form-control" type="text" name='name' id="name">
                <button class="btn btn-outline-secondary" type="submit">ok</button>
            </form>
        </div>
        <div class="row">
            <section class="content col">
                <?php
                if ($second_page) {
                    include 'content.php';
                    $second_page = false; //todo
                } else {
                    include 'start.php';
                }

                ?>
            </section>
            <aside class="about col-xl-3 col">
                <?php include  'accordion.php' ?>
            </aside>
        </div>


        <!-- Modal success-->
        <form method="POST" class="modal success" id="success" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Поздравляем!</h2>
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn-secondary btn-lg" data-bs-dismiss="modal" name="gameoverS">Новая игра</button>
                    </div>

                </div>
            </div>
        </form>
        <!-- Modal fail-->
        <form method="POST" class="modal fail " id="fail" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2>Увы, вы проиграли!</h2>
                        <img class="modal-image" src="face-sad.svg" alt="sad person">
                    </div>
                    <div class="modal-body">
                        <button type="submit" class="btn btn-secondary btn-lg" data-bs-dismiss="modal" name="gameoverFail">Новая игра</button>
                    </div>

                </div>
            </div>
        </form>


    </main>






    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="module" src="scripts/fireworks.js"></script>
    <script type="module" src="scripts/index.es.js"></script>
    <script type="module" src="scripts/main.js"></script>
    <script type="module" src="scripts/wrongAnswer.js"></script>
    <script type="module" src="scripts/firework-start.js"></script>


</body>

</html>