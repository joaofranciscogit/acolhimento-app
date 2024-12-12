<?php

namespace Autoload\Class\Router;

class Router {
    private $url;

    public function __construct($url) {
        $this->url = $url;
    }

    public function router() {
        $path = parse_url($this->url, PHP_URL_PATH);
        $parts = explode('/', $path);
        $classNameParts = [];

        foreach ($parts as $part) {
            if ($part !== '') {
                $classNameParts[] = str_replace('-', '', ucwords($part, '-'));
            }
        }

        return implode('/', $classNameParts);
    }
}