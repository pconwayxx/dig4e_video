<?php
$OUTPUT->bodyStart();
$R = $CFG->apphome . '/';
$T = $CFG->wwwroot . '/';
$adminmenu = isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true";
$set = new \Tsugi\UI\MenuSet();
$set->setHome('<img src="'.$CFG->apphome.'/images/dig4e-logo-transparent.png" style="height: 1em;" alt="Link back to main Digitization for Everybody Site"/>', 'https://www.dig4e.com');
$set->addLeft($CFG->servicename, $CFG->apphome);
if ( isset($CFG->lessons) ) {
    $set->addLeft('Lessons', $R.'lessons');
}

if ( isset($_SESSION['id']) ) {
    $set->addLeft('Quizzes', $R.'assignments');
    $submenu = new \Tsugi\UI\Menu();
    $submenu->addLink('Profile', $R.'profile');
    if ( isset($CFG->google_map_api_key) ) {
        $submenu->addLink('Map', $R.'map');
    }
    $submenu->addLink('Badges', $R.'badges');
    $submenu->addLink('Materials', $R.'materials');
    $submenu->addLink('Rate this course', 'https://www.class-central.com/mooc/7362/web-applications-for-everybody');
    $submenu->addLink('Privacy', $R.'privacy');
    if ( $CFG->providekeys ) {
        $submenu->addLink('LMS Integration', $T . 'settings');
    }
    if ( isset($CFG->google_classroom_secret) ) {
        $submenu->addLink('Google Classroom', $T.'gclass/login');
    }
    $submenu->addLink('Free App Store', 'https://www.tsugicloud.org');
    if ( $CFG->DEVELOPER ) {
        $submenu->addLink('Test LTI Tools', $T . 'dev');
    }
    if ( isset($_COOKIE['adminmenu']) && $_COOKIE['adminmenu'] == "true" ) {
        $submenu->addLink('Administer', $T . 'admin/');
    }
    $submenu->addLink('Logout', $R.'logout');
    if ( isset($_SESSION['avatar']) ) {
        $set->addRight('<img src="'.$_SESSION['avatar'].'" style="height: 2em;"/>', $submenu);
        // htmlentities($_SESSION['displayname']), $submenu);
    } else {
        $set->addRight(htmlentities($_SESSION['displayname']), $submenu);
    }
} else {
    $set->addRight('Login', $T.'login.php');
}

$set->addRight('Instructor', 'https://www.si.umich.edu/people/paul-conway');

// Set the topNav for the session
$OUTPUT->topNavSession($set);

$OUTPUT->topNav();
$OUTPUT->flashMessages();
