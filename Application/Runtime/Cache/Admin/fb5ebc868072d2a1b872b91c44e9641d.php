<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>ngrAdmin-detail</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css" />
<link rel="stylesheet" href="/Public/plugins/tm.pagination/css/pagination.css" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/css/common/common.css" />

    <link rel="stylesheet" href="/Public/plugins/editor.md/css/editormd.css" />

    <link rel="stylesheet" href="/Public/css/admin/detail.css?version=<?php echo time();?>" />

    <script src="/Public/plugins/jquery/jquery-2.2.4.min.js"></script>
<script src="/Public/plugins/layui/layui.js"></script>

<script src="/Public/js/common/extendForm.js"></script>
<script src="/Public/js/common/common.js"></script>

<script src="/Public/plugins/angularJs/angular.min.js"></script>
<script src="/Public/plugins/angularJs/angular-messages.js"></script>
<script src="/Public/plugins/angularJs/angular-sanitize.min.js"></script>
<script src="/Public/plugins/angular-ui-router/angular-ui-router.min.js"></script>
<script src="/Public/plugins/angular-resource/angular-resource.min.js"></script>
<script src="/Public/plugins/angular-route/angular-route.min.js"></script>

<script src="/Public/plugins/tm.pagination/js/tm.pagination.js"></script>

<script src="/Public/plugins/nprogress/nprogress.js"></script>

    <script src="/Public/plugins/editor.md/editormd.js"></script>

    <script src="/Public/js/admin/app.js?version=<?php echo time();?>"></script>
    <script src="/Public/js/admin/controller/detailController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="detailController">

<div>
    <input type="hidden" id="ccid" value="<?php echo ($ccid); ?>" />
</div>

<div class="ngr-admin-main">

    <div class="ngr-admin-main-div">

        <div class="ngr-admin-title layui-col-md12">
            <span class="ngr-admin-title-font">修改</span>
        </div>

        <div class="ngr-admin-add layui-col-md12">

            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <!--<label class="layui-form-label">公司名称</label>-->
                    <div class="layui-input-inline">
                        <input type="text" name="cname" placeholder="" class="layui-input" ng-model="cname" />
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" name="duty" placeholder="" class="layui-input" ng-model="duty" />
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" name="stime" id="stime" placeholder="" class="layui-input" ng-model="stime" />
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" name="etime" id="etime" placeholder="" class="layui-input" ng-model="etime" />
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" name="duration" placeholder="" class="layui-input" ng-model="duration" />
                    </div>

                    <div class="layui-input-inline">
                        <input type="text" name="sort" placeholder="" class="layui-input" ng-model="sort" />
                    </div>

                </div>

            </form>

        </div>

        <div class="ngr-admin-container layui-col-md12">
            <div id="ngr-admin-editor-md"></div>
        </div>

        <div class="layui-col-md12">
            <button class="layui-btn" ng-click="list();" type="button">返回</button>
            <button class="layui-btn" ng-click="update();" type="button">确认修改</button>
        </div>

    </div>

</div>



</body>

</html>