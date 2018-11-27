ngrApp.controller('indexController', function ($rootScope, $scope, $filter, $http, $state, $sce) {
    NProgress.start();

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        //php,html,css,js,jQuery,layui,mui,weui,angular,vue,bootstra,ajax,git,svn,thinkphp,mvc,mysql,linux,微信小程序
        $scope.skill  = ($('#ngr-user-skill').val()).split(',');

        //是否允许访问 0:不允许访问 ; 1:允许访问但数据加密 ; 2:允许访问且数据不加密
        $scope.configAccess = $('#ngr-user-configAccess').val();

        //左侧的隐私化处理
        if($scope.configAccess === '1'){
           $scope.leftVoid = true;
        }else{
            $scope.leftVoid = false;
        }

        setTimeout(function() {
            NProgress.done();
        }, 1000);

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use(['element', 'form'], function(){
            var element = layui.element;
            var form = layui.form;

            form.render();

        });

    };

    $scope.goDetail = function (ccid) {
        if($scope.configAccess !== '2'){
            layer.msg('no access', {icon: 2, time: 1000});
        }else{
            window.location.href = '/home/detail/index/ccid/' + ccid;
        }

    };

    /****************************************************方法*end*******************************************************/

    /****************************************************逻辑*start*****************************************************/
    //初始化数据
    $scope.INIT();

    //初始化layui
    $scope.initLayui();

    /****************************************************逻辑*end*******************************************************/
});