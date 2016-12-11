<?php

function lengthFormat($length) {
    $hours = floor($length / 60);
    $minutes = ($length % 60);
    $formattedLength = $hours . ' hr ' . $minutes . ' m';
    return $formattedLength;
}
