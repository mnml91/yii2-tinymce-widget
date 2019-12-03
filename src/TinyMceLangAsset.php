<?php

namespace dbursak\tinymce;

use yii\web\AssetBundle;

class TinyMceLangAsset extends AssetBundle
{
    public $sourcePath = '@vendor/dbursak/yii2-tinymce-widget/src/assets';

    public $depends = [
        'dbursak\tinymce\TinyMceAsset'
    ];
}
