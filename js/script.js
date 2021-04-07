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
    var fbEditor = document.getElementById('build-wrap');
    var formBuilder = $(fbEditor).formBuilder(options);
    setTimeout(() => {
        document
        .querySelector(".save-template")
        .addEventListener("click", (e) => {
            formBuilder.actions.getData('json', true);
            console.log('alldataset', formBuilder.actions.getData('json', true));

            // $.ajax({
            //     type: "POST",
            //     url: "<?php echo base_url(); ?>index.php/front/Login",
            //     data: {
            //         email: email
            //     },
            //     success: function(data) {
            //         // var obj = $.parseJSON(data);    
                    
            //     }
            // });
        });
    }, 1000);

    
});