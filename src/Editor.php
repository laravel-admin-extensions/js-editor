<?php

namespace Encore\JsEditor;

use Encore\Admin\Form\Field;

class Editor extends Field
{
    /**
     * {@inheritdoc}
     */
    protected $view = 'laravel-admin-code-mirror::editor';

    /**
     * {@inheritdoc}
     */
    protected static $css = [
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/lib/codemirror.css',
    ];

    /**
     * {@inheritdoc}
     */
    protected static $js = [
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/lib/codemirror.js',
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/addon/edit/matchbrackets.js',
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/addon/comment/continuecomment.js',
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/addon/comment/comment.js',
        'vendor/laravel-admin-ext/code-mirror/codemirror-5.40.0/mode/javascript/javascript.js',
    ];

    /**
     * Set editor height.
     *
     * @param int $height
     * @return $this
     */
    public function height($height = 10)
    {
        return $this->addVariables(compact('height'));
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $options = array_merge(
            [
                'mode' => 'javascript',
                'lineNumbers' => true,
                'matchBrackets' => true,
                'continueComments' => true,
                'extraKeys' => [
                    'Ctrl-Q' => 'toggleComment',
                ],
            ],
            JsEditor::config('config', [])
        );

        $options = json_encode($options);

        $this->script = <<<EOT
CodeMirror.fromTextArea(document.getElementById("{$this->id}"), $options);
EOT;

        return parent::render();
    }
}