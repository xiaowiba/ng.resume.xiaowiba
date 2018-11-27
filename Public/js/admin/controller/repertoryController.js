ngrAdminApp.controller('repertoryController', function ($rootScope, $scope, $filter, $http, $state, $sce, $location) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.totalItems = parseInt($('#count').val());

    };

    //初始化layui
    $scope.initLayui = function () {
        layui.use(['element', 'form'], function(){
            var element = layui.element;
            var form = layui.form;

            form.render();

        });

    };

    //初始化分页
    $scope.initPage = function () {
        $scope.paginationConf = {
            currentPage: $location.search().currentPage ? $location.search().currentPage : 1,
            totalItems: $scope.totalItems,
            itemsPerPage: 10,
            // pagesLength: 2,
            // perPageOptions: [10, 20, 30, 40, 50],
            onChange: function(){
                //$location.search('currentPage', $scope.paginationConf.currentPage);

                $scope.getdata();

            }
        };

    };

    $scope.getdata = function () {
        NProgress.start();

        var postData = {
            page: $scope.paginationConf.currentPage,
            pageSize: $scope.paginationConf.itemsPerPage
        };

        $http.post('/admin/repertory/getdata', postData).success(function (data) {
            NProgress.done();

            $scope.repertoryData = data.data;


        }).error(function (err) {
            NProgress.done();

        });

    };

    $scope.add = function () {
        $('.ngr-admin-header-item', window.parent.document).removeClass('ngr-admin-header-item-select');
        $('#write', window.parent.document).addClass('ngr-admin-header-item-select');
        window.location.href = '/admin/write/index';
    };

    $scope.edit = function (ccid) {
        window.location.href = '/admin/detail/index/ccid/' + ccid;
    };

    $scope.delete = function (ccid) {
        layer.confirm('确定要删除吗?', function(index){
            NProgress.start();

            var param = {
                ccid: ccid
            };

            $http.post('/admin/repertory/delete', param).success(function (data) {
                NProgress.done();
                layer.close(index);

                if(data.code === 200){
                    layer.msg(data.info, {icon: 1, time: 1000}, function () {

                        $scope.getdata();

                    });

                }else if(data.code === -1){
                    layer.msg(data.info, {icon: 2, time: 1000});

                }else{
                    layer.msg(data.info, {icon: 2, time: 1000});

                }

            }).error(function (err) {
                NProgress.done();
                layer.close(index);

            });

        });

    };

    $scope.editSort = function (ccid, sort) {
        layer.prompt({
            value: sort,
            title: '修改排序',
        }, function(value, index, elem){
            NProgress.start();

            var param = {
                ccid:ccid,
                sort:value
            };

            if(sort == value){
                layer.msg('修改成功', {icon: 1, time: 1000}, function () {
                    layer.close(index);

                });

                return false;
            }

            $http.post('/admin/repertory/updatesort', param).success(function (data) {
                NProgress.done();

                if(data.code === 200){
                    layer.msg(data.info, {icon: 1, time: 1000}, function () {
                        layer.close(index);
                        $scope.getdata();

                    });

                }else if(data.code === -1){
                    layer.msg(data.info, {icon: 2, time: 1000});
                    layer.close(index);

                }else{
                    layer.msg(data.info, {icon: 2, time: 1000});
                    layer.close(index);

                }

            }).error(function (err) {
                NProgress.done();

            });

        });

    };

    $scope.detail = function (ccid) {
        ExtendForm.init({
            action : '/home/detail/index/ccid/' + ccid,
            target : '_blank',
            method : 'post'
        }).bind({
            //param : 'goHome'
        }).send();
    };

    /****************************************************方法*end*******************************************************/

    /****************************************************逻辑*start*****************************************************/
    //初始化数据
    $scope.INIT();

    //初始化layui
    $scope.initLayui();

    //初始化分页
    $scope.initPage();

    /****************************************************逻辑*end*******************************************************/
});