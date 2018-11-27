ngrApp.controller('detailController', function ($rootScope, $scope, $filter, $http, $state, $sce) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.ccid = $('#ccid').val();

    };

    //初始化layui
    $scope.initLayui = function () {
        console.log('run layui');

        layui.use(['element', 'laydate', 'form'], function () {
            var element = layui.element;

            var form = layui.form;

            form.render();

        });

    };

    $scope.initData = function () {
        NProgress.start();

        var param = {
            ccid:$scope.ccid
        };

        $http.post('/home/detail/detail', param).success(function (data) {
            NProgress.done();

            $scope.cname = data.data.cname;
            $scope.duty = data.data.duty;
            $scope.stime = data.data.stime;
            $scope.etime = data.data.etime;
            $scope.duration = data.data.duration;
            $scope.sort = data.data.sort;
            $scope.content = data.data.content;

            $scope.initEditorMd($scope.content);

        }).error(function (err) {
            NProgress.done();

        });
    };

    $scope.initEditorMd = function (md) {
        $scope.editor = editormd.markdownToHTML("ngr-detail-editor-md", {
            emoji           : true,
            taskList        : true,
            tex             : true,  // 默认不解析
            flowChart       : true,  // 默认不解析
            sequenceDiagram : true,  // 默认不解析
            width: "100%",
            height: 500,
            path: '/Public/plugins/editor.md/lib/',
            markdown : md,
            htmlDecode: "style,script,iframe",            // 开启 HTML 标签解析，为了安全性，默认不开启
            toolbar  : false,             //关闭工具栏
        });

    };

    /****************************************************方法*end*******************************************************/

    /****************************************************逻辑*start*****************************************************/
    //初始化数据
    $scope.INIT();

    //初始化layui
    $scope.initLayui();

    $scope.initData();

    /****************************************************逻辑*end*******************************************************/
});