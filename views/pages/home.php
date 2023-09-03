<?php
require PARTS_DIR . 'header.php';

$content = getContent('name IN ("main_banner", "about_us", "catalog", "gallery")');
extract($content);

require PARTS_DIR . 'home/banner.php';
require PARTS_DIR . 'home/video-clip.php';
require PARTS_DIR . 'home/coffee-price.php';
require PARTS_DIR . 'home/pictures.php';
require PARTS_DIR . 'home/reviews.php';
require PARTS_DIR . 'home/blog.php';
require PARTS_DIR . 'footer.php';