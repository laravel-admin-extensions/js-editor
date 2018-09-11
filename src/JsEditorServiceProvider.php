<?php

namespace Encore\JsEditor;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class JsEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(JsEditor $extension)
    {
        if (! JsEditor::boot()) {
            return ;
        }

        Admin::booting(function () {
            Form::extend('js', Editor::class);
            Form::alias('js', 'javascript');
        });
    }
}