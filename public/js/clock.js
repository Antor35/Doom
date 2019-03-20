(function() {

    function x2(n, i, x1, r) {
        return x1 + r * Math.sin(2 * Math.PI * n / i);
    }

    function y2(n, i, y1, r) {
        return y1 - r * Math.cos(2 * Math.PI * n / i);
    }

    function getTime() {
        var date = new Date();
        return {
            hours: date.getHours(),
            minutes: (date.getMinutes() < 10) ? "0" + date.getMinutes() : date.getMinutes(),
            seconds: (date.getSeconds() < 10) ? "0" + date.getSeconds() : date.getSeconds()
        };
    }

    function drawCircle(ctx, x, y, r, width, strokeColor, background) {
        ctx.beginPath();
        ctx.strokeStyle = strokeColor;
        ctx.fillStyle = background;
        ctx.lineWidth = width;
        ctx.arc(x, y, r, 0, 2 * Math.PI);
        ctx.fill();
        ctx.stroke();
        ctx.closePath();
    }

    function drawLine(ctx, xStart, yStart, xStop, yStop, width, color) {
        ctx.beginPath();
        ctx.strokeStyle = color;
        ctx.lineWidth = width;
        ctx.moveTo(xStart, yStart);
        ctx.lineTo(xStop, yStop);
        ctx.stroke();
        ctx.closePath();
    }

    function drawText(ctx, text, x, y, maxWidth) {
        ctx.textAlign = "center";
        ctx.font = "36px Droid Serif";
        ctx.fillStyle = "#EEE";
        ctx.fillText(text, x, y, maxWidth);
    }

    function startClock(ctx) {
        var hw = 22.5, hh = 22.5;
        var time = getTime();
        ctx.clearRect(0, 0, 2*hw, 2*hh); // reset canvas
        drawCircle(ctx, hw, hh, hw-.5, 1, "#EEE", "#333");
        drawLine(ctx, hw, hh, x2(time.hours, 12, hw, 17), y2(time.hours, 12, hh, 17), 3.7, "#EEE"); // hours
        drawLine(ctx, hw, hh, x2(time.minutes, 60, hw, 17), y2(time.minutes, 60, hh, 17), 2.4, "#999"); // minutes
        drawLine(ctx, hw, hh, x2(time.seconds, 60, hw, 20), y2(time.seconds, 60, hh, 20), 1.5, "red"); // seconds
    }

    var canvas = document.getElementById("clock-canvas"),
        ctx;
    if (canvas.getContext) {
        ctx = canvas.getContext("2d");
        startClock(ctx);
        setInterval(function() {
            startClock(ctx);
        }, 1000);
    }
})();
