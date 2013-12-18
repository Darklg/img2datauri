
/* ----------------------------------------------------------
  Events
---------------------------------------------------------- */

window.domReady = function(func) {
    if (/in/.test(document.readyState) || !document.body) {
        setTimeout(function() {
            window.domReady(func);
        }, 9);
    }
    else {
        func();
    }
};

/* ----------------------------------------------------------
  Hide
---------------------------------------------------------- */

Element.hide = function(element) {
    element.style.display = 'none';
};

/* ----------------------------------------------------------
  Show
---------------------------------------------------------- */

Element.show = function(element) {
    element.style.display = '';
};

/* ----------------------------------------------------------
  Toggle
---------------------------------------------------------- */

Element.toggleDisplay = function(element) {
    var els = element.style;
    if (els.display === 'none') {
        Element.show(element);
    }
    else {
        Element.hide(element);
    }
};

/* ----------------------------------------------------------
  $_ : Get Element
---------------------------------------------------------- */

var $_ = function(id) {
    return document.getElementById(id);
};