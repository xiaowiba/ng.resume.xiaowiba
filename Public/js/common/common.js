var common = {
    getStateParam: function (name) {
        //构造一个含有目标参数的正则表达式对象
        var reg = new RegExp("(^|&)state=([^&]*)(&|$)");
        //匹配目标参数
        var r = decodeURI(window.location.search.substr(1)).match(reg);
        if (r != null) {
            var stateArr = unescape(r[2]).split('!');
            var result = null;
            $.each(stateArr, function (index, itemobj) {
                var array = itemobj.split('=');
                if (array[0] == name) {
                    result = array[1];
                }
            });
            return result;
        }
        return null;
    },

    /**
     * 获取url参数
     * @param name
     * @returns {*}
     */
    getUrlParam: function (name) {
        //构造一个含有目标参数的正则表达式对象
        var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
        //匹配目标参数
        var r = decodeURI(window.location.search.substr(1)).match(reg);
        if (r != null) {
            return unescape(r[2]);
        } else {
            return common.getStateParam(name);
        }
    },

    /**
     * 判断手机
     * @param phone
     * @returns {boolean}
     */
    isPhoneNo: function (phone) {
        var pattern = /^1[3456789]\d{9}$/;
        return pattern.test(phone);
    },

    /**
     * 判断身份证
     * @param val
     * @returns {boolean}
     */
    isIDCard: function (val) {
        var pattern = /(^\d{15}$)|(^\d{17}([0-9]|X)$)/;
        return pattern.test(val);
    },

    /**
     * 获取滚动条当前的位置
     * @returns {number}
     */
    getScrollTop: function () {
        var scrollTop = 0;
        if (document.documentElement && document.documentElement.scrollTop) {
            scrollTop = document.documentElement.scrollTop;
        } else if (document.body) {
            scrollTop = document.body.scrollTop;
        }
        return scrollTop;
    },

    /**
     * 获取当前可视范围的高度
     * @returns {number}
     */
    getClientHeight: function () {
        var clientHeight = 0;
        if (document.body.clientHeight && document.documentElement.clientHeight) {
            clientHeight = Math.min(document.body.clientHeight, document.documentElement.clientHeight);
        } else {
            clientHeight = Math.max(document.body.clientHeight, document.documentElement.clientHeight);
        }
        return clientHeight;
    },

    /**
     * 获取文档完整的高度
     * @returns {number}
     */
    getScrollHeight: function () {
        return Math.max(document.body.scrollHeight, document.documentElement.scrollHeight);
    },

    /**
     * 体重，血糖，腰围，运动时间精确到小数点后一位；其他为整数
     * @param id 输入框的id
     * @param min 最小值
     * @param max 最大值
     * @param accurate 精确到小数点后几位，一位就传数字1，整数就传数字0
     * @returns {boolean}
     */
    judge: function (id, min, max, accurate) {
        var val = $('#' + id).val();

        if (!val) {
            return false;
        }

        //判断是汉字,英文,字母等其他非数字
        var isZH_CN = /^[\u4e00-\u9fa5]{0,}$/;
        if (isZH_CN.test(val)) {
            $('#' + id).val('');
            if (accurate == 1) {
                layer.open({
                    content: '数字格式精确到小数点后一位,且最大值限定' + max,
                    btn: '确定'
                });
            } else {
                layer.open({
                    content: '数字格式为整数,且最大值限定' + max,
                    btn: '确定'
                });
            }
            return false;
        }

        if (accurate == 1) {
            //精确到后一位
            var numberOne = /^\d+(\.\d{1})?$/;
            if (!numberOne.test(val)) {
                $('#' + id).val('');
                layer.open({
                    content: '数字格式精确到小数点后一位,且最大值限定' + max,
                    btn: '确定'
                });
                return false;
            }
        } else {
            //整数
            if (val == 0) {
                return false;
            }
            var numberTwo = /^[0-9]*[1-9][0-9]*$/;
            if (!numberTwo.test(val)) {
                $('#' + id).val('');
                layer.open({
                    content: '数字格式为整数,且最大值限定' + max,
                    btn: '确定'
                });
                return false;
            }
        }

        if (+val > +max) {
            $('#' + id).val(max);
            layer.open({
                content: '最大值限定为' + max,
                btn: '确定'
            });
            return false;
        }

        if (val < min) {
            $('#' + id).val(min);
            return false;
        }
    },

    /**
     * 获取当前 年-月-日 时：分：秒
     * type:0=>年-月-日;1=>时：分：秒
     * @param type
     * @returns {*}
     */
    getTIME: function (type) {
        var date = new Date();
        var n, m, d, t, h, min, s;
        n = date.getFullYear();
        m = date.getMonth() + 1;
        d = date.getDate();
        h = date.getHours();
        min = date.getMinutes();
        s = date.getSeconds();
        if (m < 10) {
            m = "0" + m;
        }
        if (d < 10) {
            d = "0" + d;
        }
        if (h < 10) {
            h = "0" + h;
        }
        if (min < 10) {
            min = "0" + min;
        }
        if (s < 10) {
            s = "0" + s;
        }
        t = h + ":" + min + ":" + s;

        if (type == 0) {
            return n + "-" + m + "-" + d;
        }

        if (type == 1) {
            return t;
        }

    },

    /**
     * 多余字数用省略号代替
     * @param str
     * @param num
     * @returns {*|string}
     */
    opStr: function (str, num) {
        var str1 = str;
        var str2 = '';
        if (str1.length > num) {
            str2 = str1.substring(0, num) + '..';
        } else {
            str2 = str1;
        }

        return str2;
    },

    /**
     * 去掉数组中重复的数据
     * @param arr
     * @returns {Array}
     */
    unique: function (arr) {
        var result = [], hash = {};
        for (var i = 0, elem; (elem = arr[i]) != null; i++) {
            if (!hash[elem]) {
                result.push(elem);
                hash[elem] = true;
            }
        }
        return result;
    },

    /**
     * 复杂的身份证验证
     * @param num
     * @returns {boolean}
     */
    isIdCardNo: function (num) {
        var factorArr = new Array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2, 1);
        var parityBit = new Array("1", "0", "X", "9", "8", "7", "6", "5", "4", "3", "2");
        var varArray = new Array();
        var intValue;
        var lngProduct = 0;
        var intCheckDigit;
        var intStrLen = num.length;
        var idNumber = num;

        // initialize
        if ((intStrLen != 15) && (intStrLen != 18)) {
            return false;
        }

        // check and set value
        for (i = 0; i < intStrLen; i++) {
            varArray[i] = idNumber.charAt(i);
            if ((varArray[i] < '0' || varArray[i] > '9') && (i != 17)) {
                return false;
            } else if (i < 17) {
                varArray[i] = varArray[i] * factorArr[i];
            }
        }

        if (intStrLen == 18) {
            //check date
            var date8 = idNumber.substring(6, 14);

            if (common.isDate8(date8) == false) {
                return false;
            }

            // calculate the sum of the products
            for (i = 0; i < 17; i++) {
                lngProduct = lngProduct + varArray[i];
            }

            // calculate the check digit
            intCheckDigit = parityBit[lngProduct % 11];

            // check last digit
            if (varArray[17] != intCheckDigit) {
                return false;
            }
        } else {//length is 15
            //check date
            var date6 = idNumber.substring(6, 12);
            if (common.isDate6(date6) == false) {
                return false;
            }
        }

        return true;
    },

    isDate6: function (sDate) {
        if (!/^[0-9]{6}$/.test(sDate)) {
            return false;
        }

        var year, month, day;
        year = sDate.substring(0, 4);
        month = sDate.substring(4, 6);

        if (year < 1700 || year > 2500) {
            return false;
        }

        if (month < 1 || month > 12) {
            return false;
        }

        return true;
    },

    isDate8: function (sDate) {
        if (!/^[0-9]{8}$/.test(sDate)) {
            return false;
        }

        var year, month, day;
        year = sDate.substring(0, 4);
        month = sDate.substring(4, 6);
        day = sDate.substring(6, 8);
        var iaMonthDays = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        if (year < 1700 || year > 2500) {
            return false;
        }

        if (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) {
            iaMonthDays[1] = 29;
        }

        if (month < 1 || month > 12) {
            return false;
        }

        if (day < 1 || day > iaMonthDays[month - 1]) {
            return false;
        }

        return true;
    },

    /**
     * 去掉十位数中的十位数中的0
     * @param val
     * @returns {*}
     */
    removeTens: function (val) {
        var arr = val.split('');
        var tens = arr[0];
        var unit = arr[1];
        var res = val;

        if(tens === '0' && unit !== '0'){
            res = unit;
        }

        return res;

    },

    /**
     * 将日期转为时间戳
     * @param val 2018-01-01
     * @returns {number}
     */
    dateToTimestamp: function (val) {
        var date = new Date(val);
        return date.getTime();

    },

    /**
     * 将\r\n正则为<br>
     * @param val
     * @returns {*}
     */
    nToBr: function (val) {
        if(val === '' || val === null){
            return '';
        }else{
            return val.replace(/\n|\r\n/g, '<br>');
        }

    },

    /**
     * 将<br>正则为\n
     * @param val
     * @returns {*}
     */
    brToN: function (val) {
        if(val === '' || val === null){
            return '';
        }else{
            return val.replace(/<br>/g, '\n');
        }
    },

    goHome: function (target) {
        if(target === ''){
            target = '_blank';
        }

        ExtendForm.init({
            action : '/home/index/index',
            target : target,//'_blank',
            method : 'post'
        }).bind({
            param : 'goHome'
        }).send();

    }

};