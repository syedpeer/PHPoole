<?php

$version = '2.0.0-dev';
if (file_exists(__DIR__ . '/composer.json')) {
    @$composer = json_decode(file_get_contents(__DIR__ . '/composer.json'), true);
    if (isset($composer['version'])) {
        $version = $composer['version'];
    }
}
define('VERSION', $version);

return array(
    'name'    => 'PHPoole',
    'version' => VERSION,
    'routes'  => array(
        array(
            'name' => 'init',
            'route' => '[<path>] [--force]',
            'short_description' => 'Build a new PHPoole website',
            'description' => 'Build a new PHPoole website in <path> if provided',
            'options_descriptions' => array(
                '<path>'  => 'Website path',
                '--force' => 'Override if already exist',
            ),
            'defaults' => array(
                'path' => getcwd(),
            ),
            'handler' => 'PHPoole\Command\Init',
        ),
        array(
            'name' => 'generate',
            'route' => '[<path>]',
            'short_description' => 'Generate static files',
            'description' => 'Generate static files',
            'options_descriptions' => array(
                '<path>'  => 'Website path',
            ),
            'defaults' => array(
                'path' => getcwd(),
            ),
            'handler' => 'PHPoole\Command\Generate',
        ),
        array(
            'name' => 'serve',
            'route' => '[<path>]',
            'short_description' => 'Start built-in web server',
            'description' => 'Start built-in web server',
            'options_descriptions' => array(
                '<path>'  => 'Website path',
            ),
            'defaults' => array(
                'path' => getcwd(),
            ),
            'handler' => 'PHPoole\Command\Serve',
        ),
        array(
            'name' => 'list',
            'route' => '[<path>]',
            'short_description' => 'Lists pages',
            'description' => 'Lists pages',
            'options_descriptions' => array(
                '<path>'  => 'Website path',
            ),
            'defaults' => array(
                'path' => getcwd(),
            ),
            'handler' => 'PHPoole\Command\ListPages',
        ),
    ),
);