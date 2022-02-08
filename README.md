# 预览
<a href='http://ng.resume.xiaowiba.com' target='_blank'>**ng.resume.xiaowiba.com**</a>

# 项目介绍
一个简单的个人简历展示系统，前端界面仿照github设计。<br>
支持后台内容的增删改操作，支持前台的展示权限设置等操作。

# 项目背景
为什么写这么一个简历系统，初衷是为了学习下thinkphp3.2框架和angular框架，就着手动起来做了。

# 项目框架
前端：angular + layui<br>
后台：thinkphp3.2<br>
数据库：mysql<br>
php5.4及以下版本

# 运行
git clone https://github.com/xiaowiba/ng.resume.xiaowiba.git<br>
创建数据库 ng_resume<br>
执行 sql 文件夹下的 ng_resume.sql

# 其他
后台账户：test<br>
密码：test

# 伪静态
<pre><code><IfModule mod_rewrite.c>
  Options +FollowSymlinks -Multiviews
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1]
</IfModule></code></pre>

