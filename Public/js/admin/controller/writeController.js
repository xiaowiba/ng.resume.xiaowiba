ngrAdminApp.controller('writeController', function ($rootScope, $scope, $filter, $http, $state, $sce, $location) {

    /****************************************************方法*start*****************************************************/
    //初始化数据
    $scope.INIT = function () {
        $scope.sort = (parseInt($('#count').val())) + 1;

        $scope.cname = '';
        $scope.duty = '';
        $scope.stime = '';
        $scope.etime = '';
        $scope.duration = '';

    };

    //初始化layui
    $scope.initLayui = function () {
        console.log('run layui');

        layui.use(['element', 'laydate', 'form'], function () {
            var element = layui.element;

            var stime = layui.laydate;
            stime.render({
                elem: '#stime',
                type: 'month',
                format: 'yyyy-MM'
            });

            var etime = layui.laydate;
            etime.render({
                elem: '#etime',
                type: 'month',
                format: 'yyyy-MM'
            });

            var form = layui.form;

            form.render();

        });

    };

    $scope.initEditorMd = function () {
        $scope.editor = editormd("ngr-admin-editor-md", {
            toolbarIcons : function() {
                return [
                    "undo", "redo", "|",
                    "bold", "del", "italic", "quote", "ucwords", "uppercase", "lowercase", "|",
                    "h1", "h2", "h3", "h4", "h5", "h6", "|",
                    "list-ul", "list-ol", "hr", "|",
                    "link", "reference-link", "code", "preformatted-text", "code-block", "table", "datetime", "emoji", "html-entities", "pagebreak", "|",
                    "goto-line", "watch", "preview", "clear", "search"
                ]
            },
            width: "100%",
            height: 500,
            path: '/Public/plugins/editor.md/lib/',
            //theme : "dark",
            //previewTheme : "dark",
            //editorTheme : "pastel-on-dark",
            //markdown : md,
            codeFold: true,
            //syncScrolling : false,
            saveHTMLToTextarea: true,    // 保存 HTML 到 Textarea
            searchReplace: true,
            //watch : false,                // 关闭实时预览
            htmlDecode: "style,script,iframe|on*",            // 开启 HTML 标签解析，为了安全性，默认不开启
            //toolbar  : false,             //关闭工具栏
            //previewCodeHighlight : false, // 关闭预览 HTML 的代码块高亮，默认开启
            emoji: true,
            taskList: true,
            tocm: true,         // Using [TOCM]
            tex: true,                   // 开启科学公式TeX语言支持，默认关闭
            flowChart: true,             // 开启流程图支持，默认关闭
            sequenceDiagram: true,       // 开启时序/序列图支持，默认关闭,
            //dialogLockScreen : false,   // 设置弹出层对话框不锁屏，全局通用，默认为true
            //dialogShowMask : false,     // 设置弹出层对话框显示透明遮罩层，全局通用，默认为true
            //dialogDraggable : false,    // 设置弹出层对话框不可拖动，全局通用，默认为true
            //dialogMaskOpacity : 0.4,    // 设置透明遮罩层的透明度，全局通用，默认值为0.1
            //dialogMaskBgColor : "#000", // 设置透明遮罩层的背景颜色，全局通用，默认为#fff
            imageUpload: true,
            imageFormats: ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL: "./php/upload.php",
            onload: function () {
                console.log('onload', this);
                //this.fullscreen();
                //this.unwatch();
                //this.watch().fullscreen();

                //this.setMarkdown("#PHP");
                //this.width("100%");
                //this.height(480);
                //this.resize("100%", 640);
            }
        });
    };

    $scope.add = function () {
        NProgress.start();

        $scope.content = $scope.editor.getHTML();
        $scope.markdown = $scope.editor.getMarkdown();

        if($scope.cname === '' || $scope.duty === '' || $('#stime').val() === '' || $('#etime').val() === '' || $scope.duration === '' || $scope.content === ''){
            layer.msg('未全部填写', {icon: 2, time: 1000});
            NProgress.done();
            return false;
        }

        var param = {
            cname: $scope.cname,
            duty: $scope.duty,
            stime: $('#stime').val(),
            etime: $('#etime').val(),
            duration: $scope.duration,
            sort: $scope.sort,
            content: $scope.content,
            markdown: $scope.markdown
        };

        $http.post('/admin/write/add', param).success(function (data) {
            NProgress.done();

            if(data.code === 200){
                layer.msg(data.info, {icon: 1, time: 2000}, function () {
                    $('.ngr-admin-header-item', window.parent.document).removeClass('ngr-admin-header-item-select');
                    $('#repertory', window.parent.document).addClass('ngr-admin-header-item-select');
                    window.location.href = '/admin/repertory/index';
                });

            }else if(data.code === -1){
                layer.msg(data.info, {icon: 2, time: 1000});

            }else{
                layer.msg(data.info, {icon: 2, time: 1000});

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

    $scope.initEditorMd();

    /****************************************************逻辑*end*******************************************************/
});