<?php
$conn = new mysqli("localhost", "root", "", "wordsdb");
// $result = $conn->query("SELECT * FROM words");
$wordObj = $conn->query("SELECT word FROM words WHERE id = 1");

$gameTable = $conn->query("SELECT * FROM gamers ORDER BY победы");
// $gameTable = $conn->query("SELECT * FROM gamers");

$word = mysqli_fetch_array($wordObj);

$test = $word['word'];

//check obj data
/* foreach ($gameTable as $val) {
    print_r($val);
} */



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
            <form action="" class="col">
                <label for="name" class="form-label">Ваше имя?</label>
                <input class="form-control" type="text" name='name' id="name">
                <button class="btn btn-outline-secondary" type="submit">ok</button>
            </form>
        </div>

        <section class="container content">
            <div class="row  mb-3">
                <h2 class="content__header">Тема: variable</h2>
                <div class="col word">
                    <script type="text/javascript">
                        const val = "<?php echo " $test " ?>";
                    </script>
                    <?php
                    $letters = mb_str_split($word['word']);
                    foreach ($letters as $val) {
                        echo '<span class="word-item js-wordLetter"></span>';
                    }
                    ?>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 letters">
                    <?php
                    $letters = 'а, б, в, г, д, е, ё, ж, з, и, й, к, л, м, н, о, п, р, с, т, у, ф, х, ц, ч, ш, щ, ъ, ы, ь, э, ю, я';
                    $alphabet = explode(', ', $letters);
                    foreach ($alphabet as $value) {
                        echo
                        '<div class="js-letter letter">
                            <span class="js-alphabetLetter">' . $value . '</span>
                            <span class="yes"></span>
                            <span class="no"></span>
                        </div>';
                    };
                    ?>
                </div>
            </div>

            <div class="row">
                <?php include 'balloon.php' ?>
            </div>
        </section>
        <aside class="about">
            <?php include  'accordion.php' ?>
        </aside>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle1="modal" data-bs-target1="#staticBackdrop2" id="modal">
            Launch static backdrop modal
        </button>

        <!-- Modal -->
        <div class="modal " id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Новая игра</button>
                </div>
            </div>
        </div>


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