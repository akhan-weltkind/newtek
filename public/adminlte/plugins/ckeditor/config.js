CKEDITOR.editorConfig = function( config ) {
    config.extraPlugins = 'youtube';

    config.toolbar = [
        { name: 'document', items: [ 'Source', '-', 'Save', 'NewPage', 'Print', '-', 'Templates' ] },
        { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', 'Subscript', 'Superscript', '-','RemoveFormat' ] },
        { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
        { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote', '-', 'JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl' ] },
        { name: 'links', items: [ 'Link', 'Unlink', 'Anchor' ] },
        '/',
        { name: 'styles', items: [ 'Styles', 'Format', 'Font', 'FontSize' ] },
        { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
        { name: 'tools', items: [ 'Maximize', 'ShowBlocks' ] },
        { name: 'insert', items: [ 'Image',  'Table', 'Flash', 'Youtube', 'HorizontalRule', 'SpecialChar', 'Iframe' ] },
        '/',
        { name: 'about', items: [ 'About' ] },
        { name: 'forms', items: [ 'Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField' ] }
    ];
};