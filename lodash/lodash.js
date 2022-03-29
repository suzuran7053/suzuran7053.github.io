/* module.exports.lodash = {
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



const Lodash = {
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

module.exports = Lodash; */