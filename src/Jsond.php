<?php

namespace Encore\JsEditor;

class Jsond extends Editor
{
    protected $options = [
        'matchBrackets'     => true,
        'autoCloseBrackets' => true,
        'lineNumbers'       => true,
        'mode'              => 'application/ld+json',
        'lineWrapping'      => true,
    ];
}