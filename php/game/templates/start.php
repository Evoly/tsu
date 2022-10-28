<div class="start row  mb-3">
    <h2>Выберите тему, <?= mb_convert_case($name, MB_CASE_TITLE, "UTF-8")  ?> </h2>
    <form class="d-grid gap-2 col-xl-6 col-8 mx-auto" method="post">
        <button class="btn btn-lg btn-outline-secondary" type="submit" name="random">Случайная</button>
        <button class="btn btn-lg btn-outline-secondary" type="submit" name="city">Города</button>
        <button class="btn btn-lg btn-outline-secondary" type="submit" name="planet">Планеты и спутники</button>
        <button class="btn btn-lg btn-outline-secondary" type="submit" name="country">Страны</button>
</div>
</form>