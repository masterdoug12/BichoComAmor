$(document).ready(function() {


    var userFeed = new Instafeed({
        get: 'user',
        userId: '8888965275',
        limit: 12,
        resolution: 'standard_resolution',
        accessToken: '8888965275.1677ed0.5be8daa0a9cc457ba66eab2bb562d2f9',
        sortBy: 'most-recent',
        template: '<div class="col-lg-3 instaimg"><a href="{{image}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>',
    });


    userFeed.run();

    
    // This will create a single gallery from all elements that have class "gallery-item"
    $('.gallery').magnificPopup({
        type: 'image',
    
    });


});