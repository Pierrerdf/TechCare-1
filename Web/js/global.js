jQuery(function($) {
    $.i18n().load({
        'en': '/Web/js/jquery.i18n/languages/en.json',
        'fr': '/Web/js/jquery.i18n/languages/fr.json',
    }).done(function() {
        $('html').i18n();
            // ...
        }
    );
});