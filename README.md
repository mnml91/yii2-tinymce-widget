# TinyMCE Widget for Yii2

Renders a [TinyMCE WYSIWYG text editor plugin](http://www.tinymce.com/) widget.

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require dbursak/yii2-tinymce-widget:1.0
```
or add

```json
"dbursak/yii2-tinymce-widget" : "1.0"
```

to the require section of your application's `composer.json` file.

## Usage


```

use dosamigos\tinymce\TinyMce;

<?= $form->field($model, 'text')->widget(TinyMce::className(), [
    'options' => ['rows' => 6],
    'language' => 'es',
    'clientOptions' => [
        'plugins' => [
            "advlist autolink lists link charmap print preview anchor",
            "searchreplace visualblocks code fullscreen",
            "insertdatetime media table contextmenu paste"
        ],
        'toolbar' => "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
    ]
]);?>
```

### About ClientOptions 

Please, remember that if you are required to add javascript to the configuration of the js plugin and is required to be 
plain JS, make use of `JsExpression`. That class was made by Yii for that specific purpose. For example:
 
```php 
// Having the following scenario
<script> 
    function jsFunctionToBeCalled() {
        // ...
    }
</script>

<?= $form->field($model, 'content')->widget(TinyMce::className(), [
    'options' => ['rows' => 16],
    'language' => 'en_GB',
    'clientOptions' => 
        // ...
        // this will render the function name without quotes on the configuration options of the plugin
        'file_picker_callback' => new JsExpression('jsFunctionToBeCalled'),
        // ...
    ]
]); ?>
```
