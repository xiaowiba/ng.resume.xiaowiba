ngrAdminApp.controller('indexController', function ($rootScope, $scope, $filter, $http, $state, $sce) {
    NProgress.start();

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {

        setTimeout(function() {
            NProgress.done();
        }, 1000);

    };

    //初始化iframe
    $scope.initIframe = function () {
        var ifm = document.getElementById('r_frame');
        ifm.height = document.documentElement.clientHeight - 50;

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use('element', function(){
            var element = layui.element;

        });

    };

    $scope.goModel = function (type) {
        $('.ngr-admin-header-item').removeClass('ngr-admin-header-item-select');
        $('#' + type).addClass('ngr-admin-header-item-select');
        $('#r_frame').attr('src', '/admin/' + type + '/index');
    };

    //退出
    $scope.loginOut = function () {
        window.location.href = '/admin/login/loginout';
    };

    /****************************************************方法*end*******************************************************/

    /****************************************************逻辑*start*****************************************************/
    //初始化数据
    $scope.INIT();

    //初始化iframe
    $scope.initIframe();

    //初始化layui
    $scope.initLayui();

    /****************************************************逻辑*end*******************************************************/
});