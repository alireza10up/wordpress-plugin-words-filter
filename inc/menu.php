<?php

add_action('admin_menu', function () {
    add_menu_page(
        'Words Filter',
        'Words Filter',
        'manage_options',
        'word-filter',
        function () {
            ?>
        <form action="" method="post">
            <span>To add multiple words, separate them with (,)</span><br>
            <hr>
            <input type='text' name='words_filter' placeholder='Enter Your Words For Filter' value='<?= implode(',', get_option('words_filter')) ?>' />
            <button type='submit'>Send</button>
        </form>
        <?php
        },
        'dashicons-filter',
    );
});