jQuery(function($) {


      //Create the cookie object
      var cookieStorage = {
        setCookie: function setCookie(key, value, time, path) {
            var expires = new Date();
            expires.setTime(expires.getTime() + time);
            var pathValue = '';
            if (typeof path !== 'undefined') {
                pathValue = 'path=' + path + ';';
            }
            document.cookie = key + '=' + value + ';' + pathValue + 'expires=' + expires.toUTCString();
        },
        getCookie: function getCookie(key) {
            var keyValue = document.cookie.match('(^|;) ?' + key + '=([^;]*)(;|$)');
            return keyValue ? keyValue[2] : null;
        },
        removeCookie: function removeCookie(key) {
            document.cookie = key + '=; Max-Age=0; path=/';
        }
    };

    //Click on dark mode icon. Add dark mode classes and wrappers. Store user preference through sessions
    $('.colorChange').click(function() {
        //Show either moon or sun
        $('.colorChange').toggleClass('active');
        //If dark mode is selected
        if ($('.colorChange').hasClass('active')) {
            //Add dark mode class to the body
            $('body').addClass('darkV');
            cookieStorage.setCookie('siteDarkMode', 'true', 2628000000, '/');
        } else {
            $('body').removeClass('darkV');
            setTimeout(function() {
                cookieStorage.removeCookie('siteDarkMode');
            }, 100);
        }
    })

    //Check Storage. Display user preference 
    if (cookieStorage.getCookie('siteDarkMode')) {
        $('body').addClass('darkV');
        $('.colorChange').addClass('active');
    }
});


  



