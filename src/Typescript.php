<?php

namespace Encore\JsEditor;

class Typescript extends Editor
{
    protected $options = [
        'matchBrackets'     => true,
        'autoCloseBrackets' => true,
        'lineNumbers'       => true,
        'mode'              => 'text/typescript',
        'lineWrapping'      => true,
    ];
}