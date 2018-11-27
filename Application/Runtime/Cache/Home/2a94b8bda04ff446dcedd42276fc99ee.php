<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <title>Wecolme to NgResume</title>

    <link rel="stylesheet" href="/Public/plugins/layui/css/layui.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/plugins/nprogress/nprogress.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/plugins/font-awesome/css/font-awesome.min.css?version=<?php echo time();?>" />
<link rel="stylesheet" href="/Public/css/common/common.css?version=<?php echo time();?>" />

    <link rel="stylesheet" href="/Public/css/home/index.css?version=<?php echo time();?>" />

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

    <script src="/Public/js/home/app.js?version=<?php echo time();?>"></script>
    <script src="/Public/js/home/controller/indexController.js?version=<?php echo time();?>"></script>
</head>

<body ng-app="ngrApp" ng-controller="indexController">

    <div>
        <input type="hidden" id="ngr-user-skill" value="<?php echo ($skill); ?>" />
        <input type="hidden" id="ngr-user-configAccess" value="<?php echo ($configAccess); ?>" />
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
                                <dd><a href="/admin/login/index">后台管理</a></dd>
                            </dl>
                        </li>
                    </ul>

                </div>
            </div>

        </div>

    </div>

    <div class="ngr-container container-lg">

        <div class="ngr-left-div layui-col-md3">

            <a href="#">
                <img class="ngr-avatar" src="https://avatars3.githubusercontent.com/u/15308542?s=460&amp;v=4" />
            </a>

            <div class="ngr-person-item-one-div">

                <div class="ngr-name-div">
                    <span class="ngr-name"><?php echo ($realName); ?></span>
                </div>

            </div>

            <div class="ngr-left-void" ng-show="leftVoid"></div>

            <div class="ngr-person-item-two-div">

                <div class="ngr-person-div">
                    <span class="ngr-person"><?php echo ($birthday); ?></span>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09" ng-bind="<?php echo ($sex); ?>|sexFilter"></span>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09" ng-bind="<?php echo ($political); ?>|politicalFilter"></span>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09"><?php echo ($workingLife); ?></span>
                </div>

                <div class="ngr-person-div">
                    <span class="ngr-person"><?php echo ($school); ?></span>
                    <sup class="ngr-person-sup" ng-bind="<?php echo ($education); ?>|educationFilter"></sup>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09"><?php echo ($major); ?></span>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09"><?php echo ($duties); ?></span>
                </div>

            </div>

            <div class="ngr-person-item-three-div">

                <div class="ngr-person-div">
                    <i class="fa fa-wechat"></i>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09 text-blue"><?php echo ($wechat); ?></span>
                </div>

                <div class="ngr-person-div">
                    <i class="fa fa-qq"></i>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09 text-blue"><?php echo ($qq); ?></span>
                </div>

                <div class="ngr-person-div">
                    <i class="fa fa-phone"></i>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09 text-blue"><?php echo ($phone); ?></span>
                </div>

                <div class="ngr-person-div">
                    <i class="fa fa-link"></i>
                    <span>&nbsp;</span>
                    <a href="<?php echo ($blog); ?>" target="_blank">
                        <span class="ngr-person f09 text-blue cursor"><?php echo ($blog); ?></span>
                    </a>
                </div>

                <div class="ngr-person-div">
                    <i class="fa fa-envelope"></i>
                    <span>&nbsp;</span>
                    <span class="ngr-person f09 text-blue"><?php echo ($email); ?></span>
                </div>

                <div class="ngr-person-div">
                    <i class="fa fa-github"></i>
                    <span>&nbsp;</span>
                    <a href="<?php echo ($github); ?>" target="_blank">
                        <span class="ngr-person f09 text-blue cursor"><?php echo ($github); ?></span>
                    </a>
                </div>

            </div>

            <div class="ngr-person-item-four-div">
                <a class="ngr-skill-item" ng-repeat="val in skill" ng-bind="val"></a>
            </div>

        </div>

        <div class="ngr-right-div layui-col-md9">

            <div class="layui-col-md12 ngr-nav">
                <a class="layui-col-md2 ngr-nav-item">Overview</a>
            </div>

            <div class="layui-col-md12 ngr-popular">
                <span>Popular repositories</span>
            </div>

            <div class="layui-col-md12 ngr-content-div">

                <?php if(is_array($indexArticleData)): foreach($indexArticleData as $key=>$vo): ?><div class="layui-col-md6 ngr-content-item-div" ng-click="goDetail('<?php echo ($vo["ccid"]); ?>');">

                        <div class="layui-col-md12 ngr-content-item" ng-class="{1 : 'ngr-content-item-void'}[configAccess]">

                            <div class="layui-col-md12 ngr-company-name">

                                <?php if($configAccess == 2 ): ?><span><?php echo ($vo["cname"]); ?></span>
                                    <?php else: ?>
                                    <span></span><?php endif; ?>

                            </div>

                            <div class="layui-col-md12 ngr-company-time">

                                <?php if($configAccess == 2 ): ?><span><?php echo ($vo["stime"]); ?>-<?php echo ($vo["etime"]); ?></span>
                                    <?php else: ?>
                                    <span></span><?php endif; ?>

                                <span>&nbsp;</span>

                                <?php if($configAccess == 2 ): ?><span>[<?php echo ($vo["duration"]); ?>]</span>
                                    <?php else: ?>
                                    <span></span><?php endif; ?>

                            </div>

                            <div class="layui-col-md12 ngr-company-duty">

                                <?php if($configAccess == 2 ): ?><span><?php echo ($vo["duty"]); ?></span>
                                    <?php else: ?>
                                    <span></span><?php endif; ?>

                            </div>

                        </div>

                    </div><?php endforeach; endif; ?>

                <!--div class="layui-col-md6 ngr-content-item-div" ng-click="goDetail();">

                    <div class="layui-col-md12 ngr-content-item">
                        <div class="layui-col-md12 ngr-company-name">
                            <span>***</span>
                        </div>
                        <div class="layui-col-md12 ngr-company-time">
                            <span>*******-*******</span> <span>****</span>
                        </div>
                        <div class="layui-col-md12 ngr-company-duty">
                            <span>****</span>
                        </div>
                    </div>

                </div-->

            </div>

            <div class="layui-col-md12 ngr-contributions">
                <span>999 contributions in the last year</span>
            </div>

            <div class="layui-col-md12 ngr-calendar-div">
                <div class="ngr-calendar"></div>
            </div>

        </div>

    </div>

    <div class="layui-col-md12">
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
    </div>

</body>

</html>