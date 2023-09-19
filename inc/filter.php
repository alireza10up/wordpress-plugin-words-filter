<?php

add_filter('the_contetn', function ($content) {
    $words = get_option('words_filter');
    foreach ($words as $word) {
        preg_filter('/{$word}/', str_repeat('*', count($word)), $content);
    }
    return $content;
});