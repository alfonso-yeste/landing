$(document).ready(function(){
    //Scroll
    var $document = $(document),
        $element = $('.navbar'),
        className = 's-1';

    $document.scroll(function() {
        if ($document.scrollTop() >= 50) {
            // user scrolled 50 pixels or more;
            // do stuff
            $element.addClass(className);
        } else {
            $element.removeClass(className);
        }
    });

    $('#cover').css('margin-top', $('nav').outerHeight());
    $('#logo').bind('load', () => $('#cover').css('margin-top', $('nav').outerHeight()));
    window.onresize = () => $('#cover').css('margin-top', $('nav').outerHeight());
});

function onChangeModelSelection() {
    var selection = $('select#modelo').val();
    $('button#submit-form').attr('car-model', selection);
}

$('button').click(function () {
    //Datalayer
    var href = $(this).attr('href');
    var pageType = $(this).attr('page-type');
    var carModel = $(this).attr('car-model');
    var carVariant = $(this).attr('car-variant');
    var lang = $(this).attr('lang');

    if (pageType != 'form-submitted' || (pageType == 'form-submitted' && document.getElementById('form-cta').checkValidity())) {
        dataLayer.push({
            'event': 'gaEvent',
            'pageType': pageType,
            'carBrand': 'Ford',
            'carModel': carModel,
            'carVariant': carVariant,
            'pageVersion': 1,
            'pageLang': lang
        });
    }
});

function setModel(model) {
    $("select#modelo > option").each(function() {
        $(this).attr('selected', false);
    });
    $('select#modelo option[value="' + model +'"]').attr('selected', true);
}

function onClickDivModal(div) {
    var carModel = div.getAttribute('car-model');
    var carVariant = div.getAttribute('car-variant');

    //Salesforce
    setModel(carModel);

    //submit form button
    $('button#submit-form').attr('car-model', carModel);

    //To avoid pushing info to dataLayer twice make sure the div is being clicked and not the button inside the div which will be
    if (window.event.target.nodeName != 'BUTTON' && window.event.target.parentElement.nodeName != 'BUTTON') {
        var pageType = div.getAttribute('page-type');
        var lang = div.getAttribute('lang');

        dataLayer.push({
            'event': 'gaEvent',
            'pageType': pageType,
            'carBrand': 'Ford',
            'carModel': carModel,
            'carVariant': carVariant,
            'pageVersion': 1,
            'pageLang': lang
        });
    }
}