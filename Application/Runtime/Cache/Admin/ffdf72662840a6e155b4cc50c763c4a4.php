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

    <link rel="stylesheet" href="/Public/css/admin/config.css?version=<?php echo time();?>" />

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
    <script src="/Public/js/admin/controller/configController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="configController">

<div>
    <input type="hidden" id="access" value="<?php echo ($configAccess); ?>" />
</div>

<div class="ngr-admin-main">

    <div class="ngr-admin-main-div">

        <form class="layui-form" action="">
            <div class="layui-form-item">
                <div class="layui-input-block ngr-admin-label">权限</div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <input type="radio" name="access" id="access0" value="0" title="不允许访问" ng-model="access">
                    <input type="radio" name="access" id="access1" value="1" title="允许访问但数据加密" ng-model="access">
                    <input type="radio" name="access" id="access2" value="2" title="允许访问且数据不加密" ng-model="access">
                </div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block"></div>
            </div>
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" ng-click="save();" type="button">保存设置</button>
                </div>
            </div>
        </form>

    </div>

</div>



</body>

</html>