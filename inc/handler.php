<?php

if (isset($_POST['words_filter'])) {
    $words = explode(',', $_POST['words_filter']);
    update_option('words_filter', $words);
    add_action('admin_notice', function () {
        ?>
        <div class="notice notice-success is-dismissible">
            <p>
                <?php _e('Done!'); ?>
            </p>
        </div>
        <?php
    });
}