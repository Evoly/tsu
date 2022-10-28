<div class="accordion" id="accordionPanelsStayOpenExample">
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                Таблица игр
            </button>
        </h2>
        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
            <div class="accordion-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Имя</th>
                            <th scope="col">Игры</th>
                            <th scope="col">Победы</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $counter = 1;
                        foreach ($gameTable as $val) {  ?>
                            <tr>
                                <th scope="row"> <?= $counter ?></th>
                                <td><?= $val['name'] ?></td>
                                <td><?= $val['game'] ?></td>
                                <td><?= $val['win'] ?></td>
                            </tr>
                        <?php $counter++;
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                О проекте:
            </button>
        </h2>
        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
            <div class="accordion-body">
                <ul>
                    <li>Прототип игры <a href="https://ru.wikipedia.org/wiki/%D0%92%D0%B8%D1%81%D0%B5%D0%BB%D0%B8%D1%86%D0%B0_(%D0%B8%D0%B3%D1%80%D0%B0)">виселица</a>; </li>
                    <li>цели: научиться делать запрос к БД и обрабатывать ответ;</li>
                    <li>возможно не работает на тач устройствах;</li>
                    <li>правильный ответ можно посмотреть в консоли</li>
                    <li>прогресс анонимных игроков добавляется к игроку "аноним" </li>
                </ul>
            </div>
        </div>
    </div>
</div>