 window.onload = function() {

  function getScrollTop() {
    if (typeof window.pageYOffset !== 'undefined' ) {
      // Most browsers
      return window.pageYOffset;
    }

    var d = document.documentElement;
    if (d.clientHeight) {
      // IE in standards mode
      return d.scrollTop;
    }

    // IE in quirks mode
    return document.body.scrollTop;
  }

  window.onscroll = function() {
    var box = document.getElementById('cart'),
        scroll = getScrollTop();

    if (scroll <= 28) {
      cart.style.top = "30px";
    }
    else {
      cart.style.top = (scroll + 2) + "px";
    }
  };

};