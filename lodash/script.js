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
        return num > start && num < end ? "true" : "false";
    },

    words(str) {
        if (typeof str == "string") {
            let arr = str.split(" ");
            return arr.join("*");
        }
    },

    pad(str, num) {
        let length = str.length;
        let spaces = num - length;
        if (spaces <= 0) {
            return str;
        } else {
            if (spaces % 2 != 0) {
                var endSpace = Math.floor(spaces / 2) + 1;
                var frontSpace = Math.floor(spaces / 2);
            } else {
                // NOTE HOW TO DECLARE MULTIPLE CARIABLES TO THE SAME VALUE
                var frontSpace = endSpace = Math.floor(spaces / 2);
            }
            let space = "*";
            let front = space.repeat(frontSpace);
            let end = space.repeat(endSpace);
            return front.concat(str, end);
        }
    }

}


$(document).ready(function() {

    function clamp() {
        var clampNum = +$("#clampNum").val();
        var clampLow = +$("#clampLow").val();
        var clampUp = +$("#clampUp").val();
        var clampAnswer = $("#clampAnswer");

        let result = lodash.clamp(clampNum, clampLow, clampUp);
        clampAnswer.html(result);
    }
    $("#clampSubmit").on("click", clamp);


    function inRange() {
        var inRangeNum = +$("#inRangeNum").val();
        var inRangeStart = +$("#inRangeStart").val();
        var inRangeEnd = +$("#inRangeEnd").val();
        var inRangeAnswer = $("#inRangeAnswer");

        let result = lodash.inRange(inRangeNum, inRangeStart, inRangeEnd);
        console.log(result);
        inRangeAnswer.html(result);
    }
    $("#inRangeSubmit").on("click", inRange);


    function words() {
        var wordsText = $("#wordsText").val();
        var wordsAnswer = $("#wordsAnswer");

        let result = lodash.words(wordsText);
        wordsAnswer.html(result);
    }
    $("#wordsSubmit").on("click", words);

    function pad() {
        var padText = $("#padText").val();
        var padNum = $("#padNum").val();
        var padAnswer = $("#padAnswer");
        padNum
        let result = lodash.pad(padText, padNum);
        padAnswer.html(result);
    }
    $("#padSubmit").on("click", pad);


});