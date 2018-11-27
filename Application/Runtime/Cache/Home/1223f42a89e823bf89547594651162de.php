<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>detail</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/css/common/common.css?version=<?php echo time();?>" />

    <link rel="stylesheet" href="/Public/plugins/editor.md/css/editormd.css" />

    <link rel="stylesheet" href="/Public/css/home/detail.css?version=<?php echo time();?>" />

    <script src="/Public/plugins/jquery/jquery-2.2.4.min.js?version=<?php echo time();?>"></script>
<script src="/Public/plugins/layui/layui.js?version=<?php echo time();?>"></script>

<script src="/Public/js/common/extendForm.js?version=<?php echo time();?>"></script>
<script src="/Public/js/common/common.js?version=<?php echo time();?>"></script>

<script src="/Public/plugins/angularJs/angular.min.js"></script>
<script src="/Public/plugins/angularJs/angular-messages.js"></script>
<script src="/Public/plugins/angularJs/angular-sanitize.min.js"></script>
<script src="/Public/plugins/angular-ui-router/angular-ui-router.min.js"></script>
<script src="/Public/plugins/angular-resource/angular-resource.min.js"></script>
<script src="/Public/plugins/angular-route/angular-route.min.js"></script>

<script src="/Public/plugins/nprogress/nprogress.js?version=<?php echo time();?>"></script>

    <script src="/Public/plugins/editor.md/lib/marked.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/prettify.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/raphael.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/underscore.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/sequence-diagram.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/flowchart.min.js"></script>
    <script src="/Public/plugins/editor.md/lib/jquery.flowchart.min.js"></script>
    <script src="/Public/plugins/editor.md/editormd.js"></script>

    <script src="/Public/js/home/app.js?version=<?php echo time();?>"></script>
    <script src="/Public/js/home/controller/detailController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrApp" ng-controller="detailController">

<div>
    <input type="hidden" id="ccid" value="<?php echo ($ccid); ?>" />
</div>

<div class="ngr-header f14 border">

    <div class="d-flex flex-justify-between container-lg">

        <div class="d-flex flex-justify-between" onclick="common.goHome('_self');">
            <div>
                <a class="header-logo-invertocat" href="#" >
                    <svg height="32" class="octicon octicon-mark-github" viewBox="0 0 16 16" version="1.1" width="32" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                        </path>
                    </svg>
                </a>
            </div>
        </div>

        <div class="d-flex flex-justify-between">
            <div class="d-flex">

                <ul class="layui-nav">
                    <li class="layui-nav-item">
                        <a href="#">
                            <img class="ngr-avatar"
                                 style="width: 20px;height: 20px;" src="https://avatars3.githubusercontent.com/u/15308542?s=460&amp;v=4" />
                            <span>&nbsp;</span>
                        </a>
                        <dl class="layui-nav-child">
                            <dd><a href="">后台登录</a></dd>
                        </dl>
                    </li>
                </ul>

            </div>
        </div>

    </div>

</div>

<div class="layui-col-md12" style="background-color: #fafbfc;">

    <div class="ngr-container container-lg" >

        <div class="ngr-detail-crumb layui-col-md12">

            <svg class="octicon octicon-repo" viewBox="0 0 12 16" version="1.1" width="12" height="16" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z">
                </path>
            </svg>

            <span class="ngr-detail-realname" onclick="common.goHome('_self');">xiaowiba</span>

            <span>/</span>

            <span class="ngr-detail-cname" ng-bind="cname"></span>

        </div>

    </div>

</div>

<div class="ngr-detail-tab layui-col-md12">

    <div class="ngr-container container-lg">

        <div class="ngr-detail-tab-item">

            <svg class="octicon octicon-code" viewBox="0 0 14 16" version="1.1" width="14" height="16" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z">
                </path>
            </svg>

            <span>Code</span>

        </div>

    </div>

</div>

<div class="layui-col-md12">

    <div class="ngr-container container-lg">

        <div class="ngr-detail-title">

            <div class="ngr-detail-title-cname">

                <img class="avatar" width="20" height="20" alt=""
                     src="https://camo.githubusercontent.com/39618b8a1efd25ea093c2e6e9b65e9b406a008a8/68747470733a2f2f322e67726176617461722e636f6d2f6176617461722f39383739663630396662313162323135323534663639613338643661303564643f643d68747470732533412532462532466173736574732d63646e2e6769746875622e636f6d253246696d6167657325324667726176617461727325324667726176617461722d757365722d3432302e706e6726723d6726733d313430"
                     data-canonical-src="https://2.gravatar.com/avatar/9879f609fb11b215254f69a38d6a05dd?d=https%3A%2F%2Fassets-cdn.github.com%2Fimages%2Fgravatars%2Fgravatar-user-420.png&amp;r=g&amp;s=140">

                <span>&nbsp;</span>
                <span ng-bind="duty"></span>

            </div>

            <div class="ngr-detail-title-time">
                <span ng-bind="stime"></span>
                <span>-</span>
                <span ng-bind="etime"></span>
                <span>-</span>
                <span ng-bind="duration"></span>
            </div>

        </div>

        <div class="ngr-detail-md-title layui-col-md12"></div>

        <div class="ngr-detail-md layui-col-md12">
            <div id="ngr-detail-editor-md" style="width: 95%;"></div>
        </div>

    </div>

</div>

<div class="ngr-footer-div layui-col-md12">

    <div class="ngr-footer container-lg">

        <div class="layui-col-md4 ngr-footer-copyright">
            <span class="text-gray">© 2018 ngResume, Inc.</span>
            <span>&nbsp;&nbsp;</span>
            <span>Terms</span>
            <span>&nbsp;&nbsp;</span>
            <span>Privacy</span>
            <span>&nbsp;&nbsp;</span>
            <span>Security</span>
            <span>&nbsp;&nbsp;</span>
            <span>Status</span>
        </div>

        <div class="layui-col-md4 ngr-footer-github">
            <svg height="24" class="octicon" viewBox="0 0 16 16" version="1.1" width="24" aria-hidden="true">
                <path fill-rule="evenodd"
                      d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z">
                </path>
            </svg>
        </div>

        <div class="layui-col-md4 ngr-footer-copyright text-right">
            <span>Contact</span>
            <span>&nbsp;&nbsp;</span>
            <span>Pricing</span>
            <span>&nbsp;&nbsp;</span>
            <span>API</span>
            <span>&nbsp;&nbsp;</span>
            <span>ngResume</span>
            <span>&nbsp;&nbsp;</span>
            <span>Github</span>
            <span>&nbsp;&nbsp;</span>
            <span>Blog</span>
        </div>

    </div>

</div>

</body>

</html>