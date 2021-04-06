jQuery(function ($) {
    var fbEditor = document.getElementById('build-wrap');
    var formBuilder = $(fbEditor).formBuilder();

    document.getElementById('getXML').addEventListener('click', function () {
        alert(formBuilder.actions.getData('xml'));
    });
    document.getElementById('getJSON').addEventListener('click', function () {
        alert(formBuilder.actions.getData('json'));
    });
    document.getElementById('getJS').addEventListener('click', function () {
        alert('check console');
        console.log(formBuilder.actions.getData());
    });
});