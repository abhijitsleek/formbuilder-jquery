'use strict';
$(function () {
    var options = {
        controlPosition: 'left',
        controlOrder: [
            'autocomplete',
            'button',
            'checkbox-group',
            'date',
            'file',
            'header',
            'hidden',
            'number',
            'paragraph',
            'radio-group',
            'select',
            'text',
            'textarea'
        ],
        disableFields: ['autocomplete', 'file', 'hidden', 'header', 'number', 'paragraph']
    }
    // $('.build-wrap').formBuilder(options);
    var fbEditor = document.getElementById('build-wrap');
    var formBuilder = $(fbEditor).formBuilder(options);
    document.getElementById('getJSON').addEventListener('click', function () {
        console.log(formBuilder.actions.getData('json', true))
    });

    console.log('jjjjj', $('.save-template').val());



});