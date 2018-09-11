<?php

namespace Encore\JsEditor;

class Json extends Editor
{
    protected $options = [
        'matchBrackets'     => true,
        'autoCloseBrackets' => true,
        'lineNumbers'       => true,
        'mode'              => 'application/json',
        'lineWrapping'      => true,
    ];
}