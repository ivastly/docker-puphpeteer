# Rationale
A docker image for [Puphpeteer](git@github.com:ivastly/docker-puphpeteer.git), 
PHP port of headless Chrome driver [puppeteer](https://pptr.dev).

# Usage

## Hello World
```bash
docker-compose build
docker run --rm --interactive --tty --volume $PWD:/app composer install
docker-compose run helloworld php app/puphpteer_hello_world.php 
```

## Real Project
* create your own `composer.json`, but keep requirements from the original one:
    - `php 7.2`
    -  `"nesk/puphpeteer": "^1.6"`

* use `ivastly/puphpeteer` as your base docker image

* Keep in mind mandatory options for puphpeteer's `browser` object in your own scripts:
```php
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
```

# LICENSE
See LICENSE file.
