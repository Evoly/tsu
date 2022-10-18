
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Калькулятор</title>
</head>

<body>
    <main class="container">
        <h1>Практическое задание 3</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="calc calc-1">
                    <h2>Калькулятор 1</h2>
                    <div class="accordion accordion-flush" id="accordion-1">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Описание
                                </button>
                            </h2>
                            <ul id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-1">
                                <li>Калькулятор выполняет 4 арифметические операции;</li>
                                <li>принимает числа максимум с двумя знаками после запятой;</li>
                                <li>для выбора операции используем select;</li>
                                <li>при делении округляет до сотых значений;</li>
                                <li>данные передаем используя GET запрос.</li>
                                <li>валидация выполняется средствами браузера;</li>
                            </ul>
                        </div>
                    </div>

                    <form action="" class="col calc-1__form" method="get">
                        <input type="number" name='num1' placeholder="Введите число 1" class="form-control" step="0.01">
                        <input type="number" name='num2' placeholder="Введите число 2" class="form-control" step="0.01">
                        <select class="operations form-select" name="operation">
                            <!-- список с операндами -->
                            <option selected>Выберите оперцию</option>
                            <option value='+'>+ </option>
                            <option value='-'>- </option>
                            <option value="*">* </option>
                            <option value="/">/ </option>
                        </select>

                        <button type="submit" class="btn btn-form btn-outline-secondary" name="submit">Посчитать</button>
                    </form>
                    <div class="col-12 calc__result"> <strong>Результат:</strong> <?= $stringGet ?> </div>
                </div>
            </div>

            <div class="col-xxl-6">
                <div class="calc calc-2">
                    <h2>Калькулятор 2</h2>
                    <div class="accordion accordion-flush">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#accordion-2" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Описание
                                </button>
                            </h2>
                            <ul id="accordion-2" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordion-2">
                                <li>Калькулятор выполняет 4 арифметические операции;</li>
                                <li>выражение можно ввести с вомощью кнопок или клавиатуры;</li>
                                <li>принимает 2 любых положительных числа;</li>
                                <li>валидация осуществляется посредством php;</li>
                                <li>данные передаем используя POST запрос.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12"> <strong>Результат:</strong> <?= $stringPost ?> </div>
                    <form action="" method="post" class="col calc-2__form">
                        <input type="text" name='num3' placeholder="Введите выражение" class="form-control js-input">
                        <div class="numbers">
                            <?php for ($i = 0; $i < 10; $i++) {
                                echo '<button type="button" class="btn numbers__item btn-outline-secondary js-btn" value=' . $i . '>' . $i . '</button>';
                            };
                            ?>
                        </div>

                        <div class="operation">
                            <button type="button" class="btn operation__item btn-outline-secondary js-btn" value="+">+</button>
                            <button type="button" class="btn operation__item btn-outline-secondary js-btn" value="-">-</button>
                            <button type="button" class="btn operation__item btn-outline-secondary js-btn" value="*">x</button>
                            <button type="button" class="btn operation__item btn-outline-secondary js-btn" value="/">/</button>
                        </div>

                        <button type="submit" name="submit" class="btn btn-form btn-outline-secondary js-submit">Посчитать</button>
                    </form>

                </div>
            </div>
        </div>


    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="script.js"></script>

</body>

</html>