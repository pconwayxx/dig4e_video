<?php

/**
 * These are some configuration variables that are not secure / sensitive
 *
 * This file is included at the end of tsugi/config.php
 */

// This is how the system will refer to itself.
$CFG->servicename = 'DIG4E-V';
$CFG->servicedesc = 'OER materials for digitizing video';

// Theme Tsugi to your institutions colors. If not set, default colors will be used.
$CFG->theme = array(
    "primary" => "#0a2b57", //default color for nav background, splash background, buttons, text of tool menu
    "accent" => "#fad200",
    "secondary" => "#EEEEEE", // Nav text and nav item border color, background of tool menu
    "text" => "#111111", // Standard copy color
    "text-light" => "#5E5E5E", // A lighter version of the standard text color for elements like "small"
    "font-url" => "https://fonts.googleapis.com/css?family=Raleway%3A400%2C300%2C500%2C600%2C700%2C900&subset=latin%2Clatin-ext",
    "font-family" => "Raleway, Corbel, Avenir, 'Lucida Grande', 'Lucida Sans', sans-serif", // Font family
    "font-size" => "16px", // This is the base font size used for body copy. Headers,etc. are scaled off this value
);

$CFG->context_title = "Digital Video for Everybody";

$CFG->lessons = $CFG->dirroot.'/../lessons.json';
