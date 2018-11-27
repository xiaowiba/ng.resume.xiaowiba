ngrAdminApp.controller('loginController', function ($rootScope, $scope, $filter, $http, $state, $sce) {
    NProgress.start();

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.errorState = false;

        setTimeout(function() {
            NProgress.done();
        }, 1000);

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use('element', function(){
            var element = layui.element;

        });

    };

    //回车提交
    $scope.keyUpLogin = function () {
        $(document).keyup(function(e){
            if(e.keyCode == 13){
                $scope.login();
            }
        });

    };

    $scope.getFocus = function (type) {
        $('#' + type).addClass('ngrAdmin-login-input-focus');

    };

    $scope.getBlur = function (type) {
        $('#' + type).removeClass('ngrAdmin-login-input-focus');

    };

    $scope.closeError = function () {
        $scope.errorState = false;
    };

    $scope.login = function () {
        NProgress.start();

        if($scope.username === '' || $scope.pwd === ''){
            $scope.errorState = true;
            NProgress.done();
            return false;
        }

        var param = {
            username: $scope.username,
            pwd: $scope.pwd
        };

        $http.post('/admin/login/login', param).success(function (data) {
            NProgress.done();

            if(data.code === 200){
                window.location.href = '/admin/index/index';
            }else if(data.code === -1){
                $scope.errorState = true;
            }else{
                $scope.errorState = true;
            }

        }).error(function (err) {
            NProgress.done();

        });

    };

    /****************************************************方法*end*******************************************************/

    /****************************************************逻辑*start*****************************************************/
    //初始化数据
    $scope.INIT();

    //初始化layui
    $scope.initLayui();

    //回车提交
    $scope.keyUpLogin();

    /****************************************************逻辑*end*******************************************************/
});