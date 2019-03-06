$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '8888965275',
        limit: 60,
        resolution: 'standard_resolution',
        accessToken: '8888965275.1677ed0.5be8daa0a9cc457ba66eab2bb562d2f9',
        sortBy: 'most-liked',
        template: '<div class="col-lg-3 instaimg"><a class="rounded" href="{{image}}" title="{{caption}}" target="_blank"><img class="img-thumbnail" src="{{image}}" alt="{{caption}}"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
        delegate: 'a',
        gallery: {
            enabled: true
        }
    });


});