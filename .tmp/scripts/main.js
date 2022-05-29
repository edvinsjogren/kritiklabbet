'use strict';

var App = {};

App.init = function () {

    App.facebook.init();
};

App.facebook = {
    init: function init() {
        (function (d, s, id) {
            var js,
                fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/sv_SE/sdk.js#xfbml=1&version=v2.8&appId=539015659642439";
            fjs.parentNode.insertBefore(js, fjs);
        })(document, 'script', 'facebook-jssdk');
    }
};

$(document).ready(function () {
    $('.navbar-nav .menu-item-has-children').each(function () {
        $('a', this).first().append('<i class="fa fa-angle-down" aria-hidden="true"></i>');
    });
});
//# sourceMappingURL=data:application/json;charset=utf8;base64,eyJ2ZXJzaW9uIjozLCJzb3VyY2VzIjpbIm1haW4uanMiXSwibmFtZXMiOlsiQXBwIiwiaW5pdCIsImZhY2Vib29rIiwiZCIsInMiLCJpZCIsImpzIiwiZmpzIiwiZ2V0RWxlbWVudHNCeVRhZ05hbWUiLCJnZXRFbGVtZW50QnlJZCIsImNyZWF0ZUVsZW1lbnQiLCJzcmMiLCJwYXJlbnROb2RlIiwiaW5zZXJ0QmVmb3JlIiwiZG9jdW1lbnQiLCIkIiwicmVhZHkiLCJlYWNoIiwiZmlyc3QiLCJhcHBlbmQiXSwibWFwcGluZ3MiOiI7O0FBQUEsSUFBSUEsTUFBTSxFQUFWOztBQUVBQSxJQUFJQyxJQUFKLEdBQVcsWUFBVzs7QUFFbEJELFFBQUlFLFFBQUosQ0FBYUQsSUFBYjtBQUVILENBSkQ7O0FBTUFELElBQUlFLFFBQUosR0FBZTtBQUNYRCxVQUFNLGdCQUFXO0FBQ1osbUJBQVVFLENBQVYsRUFBYUMsQ0FBYixFQUFnQkMsRUFBaEIsRUFBb0I7QUFDakIsZ0JBQUlDLEVBQUo7QUFBQSxnQkFBUUMsTUFBTUosRUFBRUssb0JBQUYsQ0FBdUJKLENBQXZCLEVBQTBCLENBQTFCLENBQWQ7QUFDQSxnQkFBSUQsRUFBRU0sY0FBRixDQUFpQkosRUFBakIsQ0FBSixFQUEwQjtBQUMxQkMsaUJBQUtILEVBQUVPLGFBQUYsQ0FBZ0JOLENBQWhCLENBQUw7QUFDQUUsZUFBR0QsRUFBSCxHQUFRQSxFQUFSO0FBQ0FDLGVBQUdLLEdBQUgsR0FBUyxnRkFBVDtBQUNBSixnQkFBSUssVUFBSixDQUFlQyxZQUFmLENBQTRCUCxFQUE1QixFQUFnQ0MsR0FBaEM7QUFDSCxTQVBBLEVBT0NPLFFBUEQsRUFPVyxRQVBYLEVBT3FCLGdCQVByQixDQUFEO0FBUUg7QUFWVSxDQUFmOztBQWFBQyxFQUFHRCxRQUFILEVBQWNFLEtBQWQsQ0FBb0IsWUFBVztBQUMzQkQsTUFBRSxxQ0FBRixFQUF5Q0UsSUFBekMsQ0FBOEMsWUFBWTtBQUN0REYsVUFBRSxHQUFGLEVBQU0sSUFBTixFQUFZRyxLQUFaLEdBQW9CQyxNQUFwQixDQUEyQixxREFBM0I7QUFDSCxLQUZEO0FBR0gsQ0FKRCIsImZpbGUiOiJtYWluLmpzIiwic291cmNlc0NvbnRlbnQiOlsidmFyIEFwcCA9IHt9O1xuXG5BcHAuaW5pdCA9IGZ1bmN0aW9uKCkge1xuXG4gICAgQXBwLmZhY2Vib29rLmluaXQoKTtcblxufTtcblxuQXBwLmZhY2Vib29rID0ge1xuICAgIGluaXQ6IGZ1bmN0aW9uKCkge1xuICAgICAgICAoZnVuY3Rpb24gKGQsIHMsIGlkKSB7XG4gICAgICAgICAgICB2YXIganMsIGZqcyA9IGQuZ2V0RWxlbWVudHNCeVRhZ05hbWUocylbMF07XG4gICAgICAgICAgICBpZiAoZC5nZXRFbGVtZW50QnlJZChpZCkpIHJldHVybjtcbiAgICAgICAgICAgIGpzID0gZC5jcmVhdGVFbGVtZW50KHMpO1xuICAgICAgICAgICAganMuaWQgPSBpZDtcbiAgICAgICAgICAgIGpzLnNyYyA9IFwiLy9jb25uZWN0LmZhY2Vib29rLm5ldC9zdl9TRS9zZGsuanMjeGZibWw9MSZ2ZXJzaW9uPXYyLjgmYXBwSWQ9NTM5MDE1NjU5NjQyNDM5XCI7XG4gICAgICAgICAgICBmanMucGFyZW50Tm9kZS5pbnNlcnRCZWZvcmUoanMsIGZqcyk7XG4gICAgICAgIH0oZG9jdW1lbnQsICdzY3JpcHQnLCAnZmFjZWJvb2stanNzZGsnKSk7XG4gICAgfVxufTtcblxuJCggZG9jdW1lbnQgKS5yZWFkeShmdW5jdGlvbigpIHtcbiAgICAkKCcubmF2YmFyLW5hdiAubWVudS1pdGVtLWhhcy1jaGlsZHJlbicpLmVhY2goZnVuY3Rpb24gKCkge1xuICAgICAgICAkKCdhJyx0aGlzKS5maXJzdCgpLmFwcGVuZCgnPGkgY2xhc3M9XCJmYSBmYS1hbmdsZS1kb3duXCIgYXJpYS1oaWRkZW49XCJ0cnVlXCI+PC9pPicpO1xuICAgIH0pXG59KTsiXX0=