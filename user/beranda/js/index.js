(function () {
    var swipeEl = document.querySelector('.kotak1'), mouseDown = false, state = {
        marginLeft: 0,
        startPos: 0,
        currentPos: 0
    };
    console.log(swipeEl);
    function updateEl() {
        var startPos = state.startPos, currentPos = state.currentPos;
        swipeEl.style.marginLeft = currentPos - startPos + "px";
    }
    swipeEl.addEventListener('mousedown', function (event) {
        console.log(event, 'marginLeft: ' + swipeEl.style.marginLeft);
        state.marginLeft = 0;
        state.startPos = event.x;
        state.currentPos = event.x;
        updateEl();
        mouseDown = true;
    });
    document.addEventListener('mouseup', function (event) {
        console.log(event);
        mouseDown = false;
    });
    document.addEventListener('mousemove', function (event) {
        if (mouseDown) {
            console.log(event);
            state.currentPos = event.x;
            updateEl();
        }
    });
})();