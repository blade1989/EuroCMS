/*
Big Thanks To:
https://developer.mozilla.org/en-US/docs/Rich-Text_Editing_in_Mozilla#Executing_Commands
*/

$('#editControls a').click(function(e) {
    switch ($(this).data('role')) {
        case 'h1':
        case 'h2':
        case 'p':
            document.execCommand('formatBlock', false, $(this).data('role'));
            break;
        default:
            document.execCommand($(this).data('role'), false, null);
            break;
    }
})



(function() {

    /**
     * Capture all errors for this pen
     **/
    window.onerror = function(message, file, line) {
        return true;
    }

    /**
     * Capture and kill Web Audio
     **/
    // Kill webKitAudioContext function and mozAudioContext so that they
    // cannot play sounds in the grid
    if (typeof(webkitAudioContext) != "undefined") {
        webkitAudioContext = function() {
            return false;
        };
    }

    if (typeof(webkitAudioContext) != "undefined") {
        mozAudioContext = function() {
            return false;
        };
    }

    // Kill the browser asking for access to the video cam or audio
    navigator.webkitGetUserMedia = function(params, func) {
        // stop all calls in the grid.
    };

    /**
     * Capture and kill animations after X number of seconds
     **/
    window.__animationDuration = 4000;
    window.__animationsTimedOut = false;
    window.__animationRequests = [];
    window.__requestAnimationFrame = false;
    window.__cancelAnimationFrame = false;

    var vendorsReqestAnimationFrame = ['requestAnimationFrame',
        'mozRequestAnimationFrame',
        'webkitRequestAnimationFrame'
    ];

    // find the browsers requestAnimationFrame and cancelAnimationFrame
    for (var x = 0; x < vendorsReqestAnimationFrame.length; x++) {
        if (!window.__requestAnimationFrame) {
            window.__requestAnimationFrame = window[vendorsReqestAnimationFrame[x]];
        }
    }

    window.__cancelAnimationFrame = window.cancelAnimationFrame || window.mozCancelAnimationFrame;

    // Wrap the requestAnimationFrame so we can stop it in the future
    var __reqFrame = function(callback, element) {
        // after the timeout we no longer take requests
        if (__animationsTimedOut) {
            return 0;
        } else {
            timerID = __requestAnimationFrame(callback, element);
            __animationRequests.push(timerID);

            return timerID;
        }
    }

    for (var x = 0; x < vendorsReqestAnimationFrame.length; x++) {
        window[vendorsReqestAnimationFrame[x]] = __reqFrame;
    }

    // Cancel the animations after expiration
    setTimeout(function() {
        for (var i = 0; i < __animationRequests.length; i++) {
            window.__cancelAnimationFrame(__animationRequests[i]);
        }

        __animationsTimedOut = true;
    }, __animationDuration, 'push');

    /**
     * Capture setInterval and setTimeout to kill after X number of seconds
     **/
    window.setInterval = (function(oldSetInterval) {
        var registered = [];

        var f = function(a, b) {
            // check if the time has expired,
            // after __animationDuration expires don't take anymore setIntervals
            if (this.timedOut) {
                return 0;
            } else {
                return registered[registered.length] = oldSetInterval(a, b);
            }
        };

        f.clearAll = function() {
            var r;

            while (r = registered.pop()) {
                clearInterval(r);
            }

            this.timedOut = true;
        };

        f.timedOut = false;

        return f;
    })(window.setInterval);

    window.setTimeout = (function(oldSetTimeout) {
        var registered = [];

        // because some of our timeouts may time out afterwards
        // we want to make sure they know the secret sauce to still use
        // setTimeout after the time has expired, thats why we have a
        // third param
        var f = function(a, b, push) {
            // check if the time has expired,
            // after __animationDuration expires don't take anymore requests
            if (this.timedOut && typeof(push) == 'undefined') {
                return 0;
            } else {
                // If push is there, never clear that interval
                // so never add it to the registry
                if (push) {
                    return oldSetTimeout(a, b);
                } else {
                    return registered[registered.length] = oldSetTimeout(a, b);
                }
            }
        };

        f.clearAll = function() {
            var r;

            while (r = registered.pop()) {
                clearTimeout(r);
            }

            this.timedOut = true;
        };

        f.timedOut = false;

        return f;
    })(window.setTimeout);

    setTimeout(function() {
        setTimeout.clearAll();
        setInterval.clearAll();
    }, __animationDuration, 'push');

}());



(function() {

    setTimeout(function() {
        // If onload hasn't been called, stop all requests after 2 seconds
        if (typeof(_l) == 'undefined') {
            if (window.stop !== undefined) window.stop();
            else if (document.execCommand !== undefined) document.execCommand("Stop", false);
        }
    }, 2000, 'push');

    /*
     * Capture and kill CSS animations after X number of seconds
     */
    function pauseAnimations() {
        var body = document.getElementsByTagName('body')[0];

        if (body.addEventListener) {
            body.addEventListener("webkitAnimationStart", listener, false);
            body.addEventListener("webkitAnimationIteration", listener, false);
            body.addEventListener("animationstart", listener, false);
            body.addEventListener("animationiteration", listener, false);
        }
    }

    function listener(e) {
        if (e.type == "webkitAnimationStart" || e.type == "webkitAnimationIteration") {
            var targetEl = e.target;

            setTimeout(function() {
                targetEl.style.webkitAnimationPlayState = 'paused';
            }, __animationDuration, 'push');
        } else if (e.type == "animationstart" || e.type == "animationiteration") {
            var targetEl = e.target;

            setTimeout(function() {
                targetEl.style.MozAnimationPlayState = 'paused';
            }, __animationDuration, 'push');
        }
    }

    pauseAnimations();

    // Pause all audio elements, allow the audio/video
    // elements to render before stopping them
    function pauseElementTypes(type) {
        for (var i = 0, els = document.getElementsByTagName(type); i < els.length; i++) {
            els[i].pause();
        }
    }

    // Wait until the elements have been created to pause them
    setTimeout(function() {
        pauseElementTypes('audio');
        pauseElementTypes('video');
    }, 100);

}());