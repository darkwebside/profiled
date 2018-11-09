<?php

return [
    'baseUrl' => '',
    'production' => false,
    'collections' => [],
	'pretty'=>false,
    'selected' => function ($page, $section) {
	    return str_contains($page->getPath(), $section) ? 'selected' : '';
    },
];
