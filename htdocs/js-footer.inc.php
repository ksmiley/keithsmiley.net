    <!--
      E-mail address is obfuscated to (hopefully) deter spam. But if you’ve made
      it this far, you probably know how to decipher it. Why not drop me a note?
    -->
    <script>
      (function(win) {
        var doc = win.document,
          c=':', u='k', h='keithsmiley.net', a='@', p='mailto',
          e = doc.getElementById("email");
        e.attributes.href.value = p+c+u+a+h;
        e.innerHTML = u+a+h;

        /*! Normalized address bar hiding for iOS & Android (c) @scottjehl MIT License */
        /* Source: https://github.com/scottjehl/Hide-Address-Bar */
        // If there's a hash, or addEventListener is undefined, stop here
        if (!location.hash && win.addEventListener) {
          // scroll to 1
          window.scrollTo(0, 1);
          var scrollTop = 1,
            getScrollTop = function() {
              return win.pageYOffset || doc.compatMode === "CSS1Compat" && doc.documentElement.scrollTop || doc.body.scrollTop || 0;
            },
            // reset to 0 on bodyready, if needed
            bodycheck = setInterval(function() {
              if (doc.body) {
                clearInterval(bodycheck);
                scrollTop = getScrollTop();
                win.scrollTo(0, scrollTop === 1 ? 0 : 1);
              }
            }, 15);
          win.addEventListener("load", function() {
            setTimeout(function() {
              // at load, if user hasn't scrolled more than 20 or so...
              if (getScrollTop() < 20) {
                // reset to hide addr bar at onload
                win.scrollTo(0, scrollTop === 1 ? 0 : 1);
              }
            }, 0);
          });
        }
      })(this);

      var _gaq = [['_setAccount', 'UA-19711479-2'], ['_trackPageview']];
      (function(d, t) {
        var g = d.createElement(t),
            s = d.getElementsByTagName(t)[0];
        g.async = g.src = '//www.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g, s);
      }(document, 'script'));
    </script>
