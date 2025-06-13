<?php

namespace hyper\assets;

class QuillAsset extends BaseHyperAssetBundle
{
    public $css = [
        ['quill/quill.core.css', 'rel' => 'stylesheet', 'type' => 'text/css'],
        ['quill/quill.bubble.css', 'rel' => 'stylesheet', 'type' => 'text/css'],
        ['quill/quill.snow.css', 'rel' => 'stylesheet', 'type' => 'text/css'],
    ];

    public $js = [
        'quill/quill.js',
    ];
}
