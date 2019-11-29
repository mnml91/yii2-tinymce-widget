<?php

namespace readon\tinymce;

use yii\web\AssetBundle;

class TinyMceLangAsset extends AssetBundle
{
    public $sourcePath = '@vendor/read-on/yii2-tinymce-widget/src/assets';

    public $depends = [
        'readon\tinymce\TinyMceAsset'
    ];
}
