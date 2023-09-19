<?php

add_filter('the_content', function ($content) {
    $words = get_option('words_filter');
    foreach ($words as $word) {
        $content = preg_replace("/{$word}/", str_repeat('*', mb_strlen($word)), $content);
    }
    return $content;
});