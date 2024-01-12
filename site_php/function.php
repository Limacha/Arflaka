<?php
function debug_to_console($data, $name = 'php')
{
    if (is_array($data) || is_object($data)) {
        echo ("<script>console.log('" . $name . ": " . json_encode($data) . "');</script>");
    } else {
        echo ("<script>console.log('" . $name . ": " . $data . "');</script>");
    }
}
