<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>ngrAdmin-repertory</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css" />
<link rel="stylesheet" href="/Public/plugins/tm.pagination/css/pagination.css" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/css/common/common.css" />

    <link rel="stylesheet" href="/Public/css/admin/repertory.css?version=<?php echo time();?>" />

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
    <script src="/Public/js/admin/controller/repertoryController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="repertoryController">

<div>
    <input type="hidden" id="count" value="<?php echo ($count); ?>" />
</div>

<div class="ngr-admin-main">

    <div class="ngr-admin-main-div">

        <div class="ngr-admin-title layui-col-md12">
            <span class="ngr-admin-title-font">仓库管理</span>
            <span class="ngr-admin-title-font">&nbsp;</span>
            <span class="ngr-admin-title-add text-skyblue cursor" ng-click="add();">添加</span>
        </div>

        <table class="layui-table">
            <thead>
                <tr>
                    <th width="6%" class="text-center">排序</th>
                    <th width="20%">公司名称</th>
                    <th width="20%">职位</th>
                    <th width="30%">时间</th>
                    <th width="10%">时长</th>
                    <th width="14%" class="text-center">操作</th>
                </tr>
            </thead>

            <tbody>
                <tr ng-repeat="vo in repertoryData">
                    <!--<td ng-bind="$index+1" class="text-center"></td>-->
                    <td ng-bind="vo.sort" class="text-center cursor text-skyblue" ng-click="editSort(vo.ccid, vo.sort);"></td>
                    <td ng-bind="vo.cname"></td>
                    <td ng-bind="vo.duty"></td>
                    <td>
                        <span ng-bind="vo.stime"></span>
                        <span>-</span>
                        <span ng-bind="vo.etime"></span>
                    </td>
                    <td ng-bind="vo.duration"></td>
                    <td class="text-center">
                        <span class="text-skyblue cursor ngr-admin-detail" ng-click="detail(vo.ccid);" title="预览">
                            <i class="layui-icon layui-icon-search"></i>
                        </span>
                        <span class="text-shallow-grays">&nbsp;&nbsp;</span>
                        <span class="text-skyblue cursor ngr-admin-edit" ng-click="edit(vo.ccid);" title="编辑">
                            <i class="layui-icon layui-icon-edit"></i>
                        </span>
                        <span class="text-shallow-grays">&nbsp;&nbsp;</span>
                        <span class="text-skyblue cursor ngr-admin-delete" ng-click="delete(vo.ccid);" title="删除">
                            <i class="layui-icon layui-icon-delete"></i>
                        </span>
                    </td>
                </tr>
            </tbody>
        </table>

        <tm-pagination conf="paginationConf"></tm-pagination>

    </div>

</div>



</body>

</html>