ngrAdminApp.controller('userController', function ($rootScope, $scope, $filter, $http, $state, $sce) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.uuid = $('#uuid').val();
        $scope.username = $('#username').val();
        $scope.pwd = $('#pwd').val();
        $scope.realname = $('#realname').val();
        $scope.sex = $('#sex').val();
        $scope.birthday = $('#birthday').val();
        $scope.age = $('#age').val();
        $scope.workinglife = $('#workinglife').val();
        $scope.education = $('#education').val();
        $scope.school = $('#school').val();
        $scope.major = $('#major').val();
        $scope.duties = $('#duties').val();
        $scope.political = $('#political').val();
        $scope.english = $('#english').val();
        $scope.phone = $('#phone').val();
        $scope.qq = $('#qq').val();
        $scope.wechat = $('#wechat').val();
        $scope.github = $('#github').val();
        $scope.email = $('#email').val();
        $scope.blog = $('#blog').val();
        $scope.skill = $('#skill').val();

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use(['element', 'laydate', 'form'], function(){
            var element = layui.element;
            var form = layui.form;

            var birthday = layui.laydate;
            birthday.render({
                value: $scope.birthday,
                elem: '#bir'
            });

            form.render();

        });

    };

    $scope.save = function () {
        NProgress.start();

        $scope.sex = $("input[name='sex']:checked").val();
        $scope.education = $("input[name='education']:checked").val();
        $scope.political = $("input[name='political']:checked").val();
        $scope.english = $("input[name='english']:checked").val();

        var param = {
            uuid:$scope.uuid,
            realname:$scope.realname,
            sex:$scope.sex,
            birthday:$('#bir').val(),
            age:$scope.age,
            workinglife:$scope.workinglife,
            education:$scope.education,
            school:$scope.school,
            major:$scope.major,
            duties:$scope.duties,
            political:$scope.political,
            english:$scope.english,
            phone:$scope.phone,
            qq:$scope.qq,
            wechat:$scope.wechat,
            github:$scope.github,
            email:$scope.email,
            blog:$scope.blog,
            skill:$scope.skill
        };

        $http.post('/admin/user/save', param).success(function (data) {
            NProgress.done();

            if(data.code === 200){
                layer.msg(data.info, {icon: 1, time: 1000});

            }else if(data.code === -1){
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/user/index';
                });

            }else{
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/user/index';
                });
            }

        }).error(function (err) {
            NProgress.done();
        });
    };

    $scope.savePwd = function () {
        NProgress.start();

        if($scope.pwd0 !== $scope.pwd1){
            NProgress.done();
            layer.msg('密码不一致', {icon: 2, time: 2000});
            return false;
        }

        var param = {
            uuid:$scope.uuid,
            pwd0:$scope.pwd0,
            pwd1:$scope.pwd1
        };

        $http.post('/admin/user/savepwd', param).success(function (data) {
            NProgress.done();

            if(data.code === 200){
                layer.msg(data.info, {icon: 1, time: 1000});

            }else if(data.code === -1){
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/user/index';
                });

            }else{
                layer.msg(data.info, {icon: 2, time: 2000}, function () {
                    window.location.href = '/admin/user/index';
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