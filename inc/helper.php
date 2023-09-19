<?php

function wf_inc(string $name): void
{
    include WF_DIR_INC . $name . '.php';
}