<div class="row  mb-3">
    <div class="content__header">
        <div class="content__player"> Игрок: <?= mb_convert_case($name, MB_CASE_TITLE, "UTF-8") ?></div>
        <h2>Тема: <?php echo $theme ?> </h2>
    </div>

    <div class="col word">
        <script type="text/javascript">
            const val = "<?php echo " $test " ?>";
        </script>
        <?php
        $letters = mb_str_split($wordToHtml['word']);
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
    <?php include 'templates/balloon.php' ?>
</div>