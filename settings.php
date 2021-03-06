<?php
/*----------------------------
This is a new custom home page for Tirea Tean's Lesson Blog.

Control center

Here are no functions, but a place for the definition of important variables.

Author: Tìtstewan
titstewan-learnnavi.org
Co-Author: Tirea Aean
tirea-learnnavi.org
----------------------------*/
if (!defined('TLB'))
	die('No direct access...');

// the root link
$rootlink = 'http://localhost';

// define the server dir for use by PHP
$sourcedir = dirname(__FILE__) . '/res';

// define HTTP Document root for use by Apache
// because soon it will change from this to just "/"
// and now, that change will be very easy by edit one line affects all pages
$httproot = $rootlink . '/material/';

// path to the lesson dir
$lessondir = dirname(__FILE__) . '/lessons';

// path to the langauge dir
$langdir = dirname(__FILE__) . '/language';

// define the weblink
$weblink = $httproot . 'index.php';

// domain of the page
$domain = 'tirea.learnnavi.org';
?>
