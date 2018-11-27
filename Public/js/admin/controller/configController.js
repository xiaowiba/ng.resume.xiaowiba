ngrAdminApp.controller('configController', function ($rootScope, $scope, $filter, $http, $state, $sce) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.access = $('#access').val();

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use(['element', 'form'], function(){
            var element = layui.element;
            var form = layui.form;

            form.render();

        });

    };

    $scope.save = function () {
        NProgress.start();

        var access = $("input[name='access']:checked").val();

        if(access === $scope.access){
            NProgress.done();
            layer.msg('保存成功', {icon: 1, time: 1000});
            return false;
        }

        var param = {
            access: access
        };

        $http.post('/admin/config/save', param).success(function (data) {
            NProgress.done();

            if(data.code === 200){
                layer.msg(data.info, {icon: 1, time: 1000});

            }else if(data.code === -1){
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/config/index';
                });

            }else{
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/config/index';
                });
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

    /****************************************************逻辑*end*******************************************************/
});