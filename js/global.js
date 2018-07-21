/* ----------------------------------------------------------
  DOM Ready
---------------------------------------------------------- */

window.domReady(function() {
    setDragNDrop();
    checkForm();
    setOptions();
    uxEffects();
});

/* ----------------------------------------------------------
  Dragndrop form
---------------------------------------------------------- */

function setDragNDrop() {
    var timeoutDrop;

    document.body.addEventListener('drop', function(e) {
        setTimeout(function() {
            $_('img2-form').submit();
        }, 100);
    });

    document.body.addEventListener('dragover', function(e) {
        $_('img2-file').style.left = (e.clientX - 10) + 'px';
        $_('img2-file').style.top = (e.clientY - 10) + 'px';
        document.body.setAttribute('data-dragging', 1);
        clearTimeout(timeoutDrop);
        timeoutDrop = setTimeout(setTimeoutDrop, 100);
    }, 1);

    function setTimeoutDrop() {
        document.body.setAttribute('data-dragging', 0);
    }
}

/* ----------------------------------------------------------
  UX Effects
---------------------------------------------------------- */

var uxEffects = function() {
    var rawbase64 = $_('rawbase64');
    if (!rawbase64) {
        return;
    }
    rawbase64.onclick = function() {
        this.focus();
        this.select();
    };
};

/* ----------------------------------------------------------
  Form
---------------------------------------------------------- */

var checkForm = function() {
    var form = $_('img2-form'),
        file = $_('img2-file'),
        url = $_('img2-url');
    if (!form || !file || !url) {
        return;
    }
    form.onsubmit = function(e) {
        if (!file.value && !url.value) {
            e.preventDefault();
        }
    };
};

/* ----------------------------------------------------------
  Plus d'options
---------------------------------------------------------- */

var setOptions = function() {
    var a = $_('display-fieldset-options'),
        fieldset = $_('fieldset-options');

    if (!a || !fieldset) {
        return;
    }

    // Hide fieldset
    Element.hide(fieldset);

    // On "a" click
    a.onclick = function(e) {
        e.preventDefault();
        // - display fieldset
        Element.show(fieldset);
        // - hide click
        Element.hide(a);
    };
};
