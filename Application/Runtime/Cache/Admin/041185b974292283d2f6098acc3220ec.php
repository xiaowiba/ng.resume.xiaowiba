<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Sign in to NgResume</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css" />
<link rel="stylesheet" href="/Public/plugins/tm.pagination/css/pagination.css" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css" />
<link rel="stylesheet" href="/Public/css/common/common.css" />

    <link rel="stylesheet" href="/Public/css/admin/login.css?version=<?php echo time();?>" />

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
    <script src="/Public/js/admin/controller/loginController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrAdminApp" ng-controller="loginController">

    <div>
        <input type="hidden" value="" />
    </div>

    <div class="ngrAdmin-login-logo layui-col-md12" onclick="common.goHome('_self');">
        <svg height="48" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="48" aria-hidden="true">
            <path fill-rule="evenodd"
                  d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
        </path>
        </svg>
    </div>

    <div class="ngrAdmin-login-title layui-col-md12">
        <span>Sign in to NgResume(测试账号:test 密码:test)</span>
    </div>

    <div class="ngrAdmin-login-error layui-col-md12" ng-show="errorState">
        <div class="ngrAdmin-login-error-div">
            <div class="ngrAdmin-login-error-font">Incorrect username or password.</div>
            <div class="ngrAdmin-login-error-x" ng-click="closeError();">

                <svg class="octicon octicon-x" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48L7.48 8z">
                    </path>
                </svg>

            </div>
        </div>
    </div>

    <div class="ngrAdmin-login-div layui-col-md12">
        <div class="ngrAdmin-login-form-div">

            <div class="ngrAdmin-login-form">

                <label class="ngrAdmin-login-label layui-col-md12">Username</label>
                <input type="text" name="username" id="username" class="ngrAdmin-login-input layui-col-md12"
                       ng-focus="getFocus('username');" ng-blur="getBlur('username');" ng-model="username" />

                <label class="ngrAdmin-login-label layui-col-md12">Password</label>
                <input type="password" name="pwd" id="pwd" class="ngrAdmin-login-input layui-col-md12"
                       ng-focus="getFocus('pwd');" ng-blur="getBlur('pwd');" ng-model="pwd" />

                <input class="ngrAdmin-login-button layui-btn layui-btn-lg layui-btn-normal"
                       ng-click="login();" type="button" value="Sign in" />

            </div>

        </div>
    </div>

    <div class="ngrAdmin-login-null layui-col-md12"></div>

    <div class="ngrAdmin-register-div layui-col-md12">
        <div class="ngrAdmin-register border">
            <span class="ngrAdmin-register-new">New to NgResume?</span>
            <span class="ngrAdmin-register-create">Create an account.</span>
        </div>
    </div>

    <div class="ngrAdmin-login-footer layui-col-md12">
        <span>Terms</span>
        <span>Privacy</span>
        <span>Security</span>
        <span style="color: #24292e;">Contact NgResume</span>
    </div>

</body>

</html>