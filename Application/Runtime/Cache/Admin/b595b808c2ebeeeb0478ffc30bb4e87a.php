<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>ngrAdmin-index</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css" />
<link rel="stylesheet" href="/Public/plugins/tm.pagination/css/pagination.css" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/css/common/common.css" />

    <link rel="stylesheet" href="/Public/css/admin/index.css?version=<?php echo time();?>" />

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

    <script src="/Public/js/admin/app.js?version=<?php echo time();?>"></script>
    <script src="/Public/js/admin/controller/indexController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="indexController">

<div class="ngr-admin-header layui-col-md12">

    <div class="ngr-admin-header-div">

        <div class="ngr-admin-left layui-col-md6">

            <div class="ngr-admin-header-item layui-col-md2 ngr-admin-header-item-select" id="main" ng-click="goModel('main');" ng-show="false">
                <span>控制台</span>
            </div>

            <div class="ngr-admin-header-item layui-col-md2" id="write" ng-click="goModel('write');">
                <span>添加</span>
            </div>

            <div class="ngr-admin-header-item layui-col-md2 ngr-admin-header-item-select" id="repertory" ng-click="goModel('repertory');">
                <span>仓库</span>
            </div>

            <div class="ngr-admin-header-item layui-col-md2" id="config" ng-click="goModel('config');">
                <span>设置</span>
            </div>

        </div>

        <div class="ngr-admin-right layui-col-md6">

            <div class="ngr-admin-header-item layui-col-md2 layui-col-md-offset6" id="user" ng-click="goModel('user');">
                <span><?php echo ($username); ?></span>
            </div>

            <div class="ngr-admin-header-item layui-col-md2" ng-click="loginOut();">
                <span>退出</span>
            </div>

            <div class="ngr-admin-header-item layui-col-md2" onclick="common.goHome('_blank');">
                <span>前台</span>
            </div>

        </div>

    </div>

</div>

<div class="ngr-admin-main layui-col-md12">
    <iframe name="r_frame" id="r_frame" src="/admin/repertory/index"
            frameborder="0" scrolling="yes" marginheight="0" width="100%" height="100%"></iframe>
</div>



</body>

</html>