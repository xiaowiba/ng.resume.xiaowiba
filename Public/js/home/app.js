/**
 * 20181117
 * superChao
 */
var ngrApp = angular.module('ngrApp', ['ui.router', 'ngResource', 'ngMessages', 'ngSanitize']);

ngrApp.run(['$rootScope', '$resource', '$sce', function ($rootScope, $resource, $sce, $state, $stateParams) {
    $rootScope.$state = $state;
    $rootScope.$stateParams = $stateParams;

}]);

/**
 * 配置$http使其可在tp3中使用
 */
ngrApp.config(function ($stateProvider, $urlRouterProvider, $httpProvider){
    // Use x-www-form-urlencoded Content-Type
    $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';

    /**
     * The workhorse; converts an object to x-www-form-urlencoded serialization.
     * @param {Object} obj
     * @return {String}
     */
    var param = function(obj) {
        var query = '', name, value, fullSubName, subName, subValue, innerObj, i;

        for(name in obj) {
            value = obj[name];

            if(value instanceof Array) {
                for(i=0; i<value.length; ++i) {
                    subValue = value[i];
                    fullSubName = name + '[' + i + ']';
                    innerObj = {};
                    innerObj[fullSubName] = subValue;
                    query += param(innerObj) + '&';
                }
            }
            else if(value instanceof Object) {
                for(subName in value) {
                    subValue = value[subName];
                    fullSubName = name + '[' + subName + ']';
                    innerObj = {};
                    innerObj[fullSubName] = subValue;
                    query += param(innerObj) + '&';
                }
            }
            else if(value !== undefined && value !== null)
                query += encodeURIComponent(name) + '=' + encodeURIComponent(value) + '&';
        }

        return query.length ? query.substr(0, query.length - 1) : query;
    };

    // Override $http service's default transformRequest
    $httpProvider.defaults.transformRequest = [function(data) {
        return angular.isObject(data) && String(data) !== '[object File]' ? param(data) : data;
    }];

});


//过滤器
ngrApp.filter('sexFilter', function () {
        return function (obj) {
            switch (obj) {
                case 0:
                    return '男';
                case 1:
                    return '女';
                case 2:
                    return '保密';
                case 9:
                    return '*';
            }

        };

    })
    //0:群众 ; 1:团员 ; 2:预备党员 ; 3:党员 ; 4:保密
    .filter('politicalFilter', function () {
        return function (obj) {
            switch (obj) {
                case 0:
                    return '群众';
                case 1:
                    return '团员';
                case 2:
                    return '预备党员';
                case 3:
                    return '党员';
                case 4:
                    return '保密';
                case 9:
                    return '*';
            }

        }

    })
    //0:专科 ; 1:本科 ; 2:研究生 ; 3:保密
    .filter('educationFilter', function () {
        return function (obj) {
            switch (obj) {
                case 0:
                    return '专科';
                case 1:
                    return '本科';
                case 2:
                    return '研究生';
                case 3:
                    return '党员';
                case 4:
                    return '保密';
                case 9:
                    return '*';
            }

        }

    });