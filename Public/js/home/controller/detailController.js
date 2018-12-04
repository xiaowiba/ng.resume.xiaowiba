ngrApp.controller('detailController', function ($rootScope, $scope, $filter, $http, $state, $sce) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        function scroll_fn() {
            var document_height = $(document).height();
            var scroll_so_far = $(window).scrollTop();
            var window_height = $(window).height();
            var max_scroll = document_height - window_height;
            var scroll_percentage = scroll_so_far / (max_scroll / 100);
            $('#load').width(scroll_percentage + '%');
        }

        $(window).scroll(function() {
            scroll_fn();
        });

        $(window).resize(function() {
            scroll_fn();
        });

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

        tocbot.init({
            // Where to render the table of contents.
            tocSelector: '.toc', // 放置目录的容器
            // Where to grab the headings to build the table of contents.
            contentSelector: '#ngr-detail-editor-md', // 正文内容所在
            // Which headings to grab inside of the contentSelector element.
            headingSelector: 'h1, h2, h3, h4, h5', // 需要索引的标题级别
            positionFixedSelector: ".toc", //目录位置固定
            scrollEndCallback: function (e) { //回调函数
                //window.scrollTo(window.scrollX, window.scrollY - 80);
                //修正滚动后页面的位置，80 是自己顶部栏的高度
            },
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