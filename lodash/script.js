/* const Lodash = require("lodash.js"); 
lodash = require('lodash.js');
*/


const lodash = {
    clamp(num, low, up) {
        if (typeof num !== "number" || typeof low !== "number" || typeof up !== "number") {
            return "You need to pass three numbers."
        }
        if (num >= low && num <= up) {
            return num;
        } else if (num < low) {
            return low;
        } else if (num > up) {
            return up;
        }
    },

    inRange(num, start, end) {
        if (!end) {
            end = start;
            start = 0;
        }
        if (start > end) {
            let temp = start;
            start = end;
            end = temp;
        }
        return num > start && num < end;
    },

    words(str) {
        return str.split(" ");
    }

}


$(document).ready(function() {
    // .clamp()
    function clamp() {
        var clampNum = +$("#clampNum").val();
        var clampLow = +$("#clampLow").val();
        var clampUp = +$("#clampUp").val();
        var clampAnswer = $("#clampAnswer");

        if (typeof clampNum === "number" && typeof clampLow === "number" && typeof clampUp === "number") {
            let result = lodash.clamp(clampNum, clampLow, clampUp);
            clampAnswer.html(result);
            // alert(result);
        } else {
            clampAnswer.html("You can only enter number");
        }
    }
    $("#clampSubmit").on("click", clamp);

    // .inRange()
    function inRange() {
        var inRangenum = +$("#inRangenum").val();
        var inRangestart = +$("#inRangestart").val();
        var inRangeend = +$("#inRangeend").val();
        var inRangeAnswer = $("#imRangeAnswer");

        if (typeof inRangenum === "number" && typeof inRangestart === "number" && typeof inRangeend === "number") {
            let result = lodash.inRange(inRangenum, inRangestart, inRangeend);
            console.log(result);
            inRangeAnswer.html(result);
            // alert(result);
        } else {
            inRangeAnswer.html("You can only enter number");
        }
    }
    $("#inRangeSubmit").on("click", inRange);
});