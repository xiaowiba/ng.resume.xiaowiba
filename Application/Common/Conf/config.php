<?php
return array(
    //URL地址不区分大小写
    'URL_CASE_INSENSITIVE' => true,

    //伪静态路由
    'URL_MODEL'=> 2,

    //
    'LOAD_EXT_CONFIG' => 'db',

    //
    'MD5_PRE' => 'ngr_resume',

    'HTML_FILE_SUFFIX' => '.html',

    'SHOW_PAGE_TRACE' => false,

    //过滤机制
    //'DEFAULT_FILTER' => 'strip_tags,stripslashes',

    //404
    'TMPL_EXCEPTION_FILE' => './Public/404/404.html'
);
