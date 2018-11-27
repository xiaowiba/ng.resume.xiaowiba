<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>ngrAdmin-user</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css" />
<link rel="stylesheet" href="/Public/plugins/tm.pagination/css/pagination.css" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/css/common/common.css" />

    <link rel="stylesheet" href="/Public/css/admin/user.css?version=<?php echo time();?>" />

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
    <script src="/Public/js/admin/controller/userController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="userController">

<div>
    <input type="hidden" id="uuid" value="<?php echo ($uuid); ?>" />
    <input type="hidden" id="username" value="<?php echo ($username); ?>" />
    <input type="hidden" id="pwd" value="<?php echo ($pwd); ?>" />
    <input type="hidden" id="realname" value="<?php echo ($realname); ?>" />
    <input type="hidden" id="sex" value="<?php echo ($sex); ?>" />
    <input type="hidden" id="birthday" value="<?php echo ($birthday); ?>" />
    <input type="hidden" id="age" value="<?php echo ($age); ?>" />
    <input type="hidden" id="workinglife" value="<?php echo ($workinglife); ?>" />
    <input type="hidden" id="education" value="<?php echo ($education); ?>" />
    <input type="hidden" id="school" value="<?php echo ($school); ?>" />
    <input type="hidden" id="major" value="<?php echo ($major); ?>" />
    <input type="hidden" id="duties" value="<?php echo ($duties); ?>" />
    <input type="hidden" id="political" value="<?php echo ($political); ?>" />
    <input type="hidden" id="english" value="<?php echo ($english); ?>" />
    <input type="hidden" id="phone" value="<?php echo ($phone); ?>" />
    <input type="hidden" id="qq" value="<?php echo ($qq); ?>" />
    <input type="hidden" id="wechat" value="<?php echo ($wechat); ?>" />
    <input type="hidden" id="github" value="<?php echo ($github); ?>" />
    <input type="hidden" id="email" value="<?php echo ($email); ?>" />
    <input type="hidden" id="blog" value="<?php echo ($blog); ?>" />
    <input type="hidden" id="skill" value="<?php echo ($skill); ?>" />
</div>

<div class="ngr-admin-main">

    <div class="ngr-admin-main-div">

        <form class="layui-form" action="">

            <div class="layui-form-item">

                <label class="layui-form-label text-gray">用户名</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="username" ng-disabled="true" />
                </div>

                <label class="layui-form-label">姓名</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="realname" />
                </div>

                <label class="layui-form-label">性别</label>
                <div class="layui-input-inline">
                    <input type="radio" name="sex" value="0" title="男" ng-model="sex" />
                    <input type="radio" name="sex" value="1" title="女" ng-model="sex" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">出生日期</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" id="bir" class="layui-input" ng-model="birthday" />
                </div>

                <label class="layui-form-label">年龄</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="age" />
                </div>

                <label class="layui-form-label">工作经验</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="workinglife" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">学历</label>
                <div class="layui-input-block">
                    <input type="radio" name="education" value="0" title="专科" ng-model="education" />
                    <input type="radio" name="education" value="1" title="本科" ng-model="education" />
                    <input type="radio" name="education" value="2" title="研究生" ng-model="education" />
                    <input type="radio" name="education" value="3" title="保密" ng-model="education" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">毕业院校</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="school" />
                </div>

                <label class="layui-form-label">专业</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="major" />
                </div>

                <label class="layui-form-label">在校职务</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="duties" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">政治面貌</label>
                <div class="layui-input-block">
                    <input type="radio" name="political" value="0" title="群众" ng-model="political" />
                    <input type="radio" name="political" value="1" title="团员" ng-model="political" />
                    <input type="radio" name="political" value="2" title="预备党员" ng-model="political" />
                    <input type="radio" name="political" value="3" title="党员" ng-model="political" />
                    <input type="radio" name="political" value="4   " title="保密" ng-model="political" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">英语等级</label>
                <div class="layui-input-block">
                    <input type="radio" name="english" value="0" title="无" ng-model="english" />
                    <input type="radio" name="english" value="1" title="四级" ng-model="english" />
                    <input type="radio" name="english" value="2" title="六级" ng-model="english" />
                    <input type="radio" name="english" value="3" title="八级" ng-model="english" />
                    <input type="radio" name="english" value="4   " title="保密" ng-model="english" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">电话</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="phone" />
                </div>

                <label class="layui-form-label">QQ</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="qq" />
                </div>

                <label class="layui-form-label">微信</label>
                <div class="layui-input-inline">
                    <input type="text" placeholder="" class="layui-input" ng-model="wechat" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">github</label>
                <div class="layui-input-block">
                    <input type="text" placeholder="" class="layui-input" ng-model="github" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">邮箱</label>
                <div class="layui-input-block">
                    <input type="text" placeholder="" class="layui-input" ng-model="email" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">博客</label>
                <div class="layui-input-block">
                    <input type="text" placeholder="" class="layui-input" ng-model="blog" />
                </div>

            </div>

            <div class="layui-form-item">

                <label class="layui-form-label">技能</label>
                <div class="layui-form-mid layui-word-aux">(用英文,分隔)</div>
                <div class="layui-input-block">
                    <input type="text" placeholder="" class="layui-input" ng-model="skill" />
                </div>

            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" ng-click="save();" type="button">更新信息</button>
                </div>
            </div>

            <hr>

            <div class="layui-form-item">

                <label class="layui-form-label">新密码</label>
                <div class="layui-input-inline">
                    <input type="password" placeholder="" class="layui-input" ng-model="pwd0"/>
                </div>

                <label class="layui-form-label">确认密码</label>
                <div class="layui-input-inline">
                    <input type="password" placeholder="" class="layui-input" ng-model="pwd1"/>
                </div>

            </div>

            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn" ng-click="savePwd();" type="button">更新密码</button>
                </div>
            </div>

        </form>

    </div>

</div>



</body>

</html>