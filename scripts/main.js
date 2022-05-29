var App = {};

App.init = function() {

    App.facebook.init();

};

App.facebook = {
    init: function() {
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.8&appId=539015659642439";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    }
};

$( document ).ready(function() {
    $('.navbar-nav .menu-item-has-children').each(function () {
        $('a',this).first().append('<i class="fa fa-angle-down" aria-hidden="true"></i>');
    })
});