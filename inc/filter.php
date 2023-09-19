<?php

add_filter('the_content', function ($content) {
    $words = get_option('words_filter');
    foreach ($words as $word) {
        $repace = str_repeat('*', strlen($word));
        $content = preg_replace("/{$word}/", $repace, $content);
    }
    return $content;
});