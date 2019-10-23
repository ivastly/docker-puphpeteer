<?php declare(strict_types=1);

use Nesk\Puphpeteer\Puppeteer;

require_once 'vendor/autoload.php';

$puppeteer = new Puppeteer();
$browser   = $puppeteer->launch(
	[
		'args' =>
			[
				// this is required for dockerized puppeteer
				'--no-sandbox',
				'--disable-setuid-sandbox',
				'--disable-dev-shm-usage',
			],
	]
);
$page      = $browser->newPage();
$page->goto(
	'http://bit.ly/puphpeteer',
	[
		'waitUntil' => 'networkidle0',
	]
);

echo "Title is {$page->title()}.\n";

$page->screenshot(
	[
		'path'     => 'opportunities.png',
		'fullPage' => true,
	]
);

$browser->close();
