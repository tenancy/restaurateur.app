<?php

if (! function_exists('svg')) {
    function svg(string $path) {
        if (file_exists($path = resource_path('svg/' . $path . '.svg'))) {
            return file_get_contents($path);
        }

        return '';
    }
}
