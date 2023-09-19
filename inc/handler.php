<?php

if (isset($_POST['words_filter'])) {
    $words = explode(',', $_POST['words_filter']);
    $words = array_map('sanitize_text_field', $words);
    update_option('words_filter', $words);
    add_action('admin_notices', function () {
        ?>
        <div class="notice notice-success is-dismissible">
            <p>
                <?php _e('Saved'); ?>
            </p>
        </div>
        <?php
    });
}