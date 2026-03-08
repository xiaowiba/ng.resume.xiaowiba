<div align="center">

# 🎯 个人简历展示系统

<p align="center">
  <img src="https://img.shields.io/badge/PHP-5.4+-blue.svg" alt="PHP Version">
  <img src="https://img.shields.io/badge/ThinkPHP-3.2-green.svg" alt="ThinkPHP">
  <img src="https://img.shields.io/badge/AngularJS-1.x-red.svg" alt="AngularJS">
  <img src="https://img.shields.io/badge/License-MIT-yellow.svg" alt="License">
  <img src="https://img.shields.io/badge/PRs-welcome-brightgreen.svg" alt="PRs Welcome">
</p>

<p align="center">
  一个简洁优雅的个人简历展示系统，前端界面仿照 GitHub 设计 ✨
</p>

<p align="center">
  <a href="http://ng.resume.xiaowiba.com" target="_blank">
    <strong>🌐 在线预览</strong>
  </a>
</p>

</div>

---

## 📖 项目介绍

一个简单而强大的个人简历展示系统，采用前后端分离架构设计。

✅ 支持后台内容的增删改操作  
✅ 支持前台的展示权限设置  
✅ 响应式设计，完美适配移动端  
✅ 界面简洁美观，用户体验优秀

## 💡 项目背景

为什么写这么一个简历系统？初衷是为了学习 ThinkPHP 3.2 框架和 AngularJS 框架，于是就着手动起来做了这个项目。

通过这个项目，你可以：
- 🎓 学习 ThinkPHP MVC 架构
- 🚀 掌握 AngularJS 前端框架
- 💼 拥有一个专业的在线简历
- 🔧 了解前后端分离开发模式

## 🛠️ 技术栈

<table>
  <tr>
    <td align="center"><strong>前端</strong></td>
    <td>AngularJS + Layui</td>
  </tr>
  <tr>
    <td align="center"><strong>后端</strong></td>
    <td>ThinkPHP 3.2</td>
  </tr>
  <tr>
    <td align="center"><strong>数据库</strong></td>
    <td>MySQL</td>
  </tr>
  <tr>
    <td align="center"><strong>PHP 版本</strong></td>
    <td>5.4 及以上</td>
  </tr>
</table>

## ✨ 主要功能

### 🎨 前台功能

- 👤 个人信息展示（姓名、性别、生日、学历等）
- 💼 工作经历展示
- 🚀 项目经验展示
- 🎯 技能展示
- 🔒 隐私权限控制（支持公开/登录可见两种模式）
- 📱 响应式设计，支持移动端访问

### ⚙️ 后台管理

- 🔐 用户登录/登出
- 📝 个人信息管理
- 💼 工作经历管理（增删改查）
- 🚀 项目经验管理
- 🔑 密码修改
- 🎛️ 前台展示权限配置

## 📁 项目结构

```text
ng.resume.xiaowiba/
├── 📂 Application/              # 应用目录
│   ├── 📂 Admin/               # 后台管理模块
│   │   ├── 📂 Controller/      # 控制器
│   │   ├── 📂 View/           # 视图模板
│   │   └── 📂 Conf/           # 配置文件
│   ├── 📂 Home/               # 前台展示模块
│   │   ├── 📂 Controller/      # 控制器
│   │   ├── 📂 View/           # 视图模板
│   │   └── 📂 Conf/           # 配置文件
│   ├── 📂 Common/             # 公共模块
│   │   ├── 📂 Model/          # 数据模型
│   │   ├── 📂 Common/         # 公共函数
│   │   └── 📂 Conf/           # 公共配置
│   └── 📂 Runtime/            # 运行时缓存
├── 📂 Public/                 # 静态资源目录
│   ├── 📂 css/               # 样式文件
│   ├── 📂 js/                # JavaScript 文件
│   ├── 📂 images/            # 图片资源
│   └── 📂 plugins/           # 第三方插件
├── 📂 ThinkPHP/              # ThinkPHP 框架核心
├── 📂 sql/                   # 数据库文件
├── 📄 index.php              # 前台入口文件
├── 📄 admin.php              # 后台入口文件
└── 📄 README.md              # 项目说明
```

## 🚀 安装部署

### 📋 环境要求

- ✅ PHP >= 5.4
- ✅ MySQL >= 5.5
- ✅ Apache/Nginx 服务器

### 📝 安装步骤

#### 1️⃣ 克隆项目

```bash
git clone https://github.com/xiaowiba/ng.resume.xiaowiba.git
cd ng.resume.xiaowiba
```

#### 2️⃣ 创建数据库

```sql
CREATE DATABASE ng_resume DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
```

#### 3️⃣ 导入数据库

```bash
# 执行 sql 文件夹下的 ng_resume.sql
mysql -u root -p ng_resume < sql/ng_resume.sql
```

#### 4️⃣ 配置数据库连接

编辑 `Application/Common/Conf/db.php` 文件，修改数据库连接信息：

```php
<?php
return array(
    'DB_TYPE'   => 'mysql',
    'DB_HOST'   => 'localhost',
    'DB_NAME'   => 'ng_resume',
    'DB_USER'   => 'root',
    'DB_PWD'    => 'your_password',
    'DB_PORT'   => 3306,
    'DB_PREFIX' => '',
);
```

#### 5️⃣ 配置伪静态

参考下方的伪静态配置说明

#### 6️⃣ 访问项目

- 🏠 前台：<http://your-domain.com>
- 🔧 后台：<http://your-domain.com/admin.php>

## 🔑 默认账户

| 项目 | 值 |
|------|-----|
| 👤 账户 | `test` |
| 🔒 密码 | `test` |

> ⚠️ **安全提示**：首次登录后请立即修改默认密码！

## ⚙️ 伪静态配置

### 🔧 Apache (.htaccess)

```apache
<IfModule mod_rewrite.c>
  Options +FollowSymlinks -Multiviews
  RewriteEngine On
  RewriteCond %{REQUEST_FILENAME} !-d
  RewriteCond %{REQUEST_FILENAME} !-f
  RewriteRule ^(.*)$ index.php [L,E=PATH_INFO:$1]
</IfModule>
```

### 🔧 Nginx

```nginx
location / {
    if (!-e $request_filename) {
        rewrite ^(.*)$ /index.php?s=$1 last;
        break;
    }
}
```

## 💻 开发说明

### 🐛 调试模式

在 `index.php` 和 `admin.php` 中可以开启调试模式：

```php
define('APP_DEBUG', true);  // 开启调试
define('APP_DEBUG', false); // 关闭调试（生产环境建议关闭）
```

### 🔐 权限控制

系统支持两种访问权限：

| 权限值 | 说明 | 图标 |
|--------|------|------|
| 0 | 完全公开，所有信息可见 | 🌍 |
| 1 | 需要登录，登录后可见完整信息 | 🔒 |

## ⚠️ 注意事项

- 🔴 生产环境请关闭调试模式
- 🔴 请及时修改默认管理员密码
- 🔴 建议定期备份数据库
- 🔴 上传到服务器后请检查目录权限，确保 Runtime 目录可写

<!-- ## 📸 项目截图

> 💡 提示：可以在这里添加项目的实际截图 -->

## 🤝 贡献指南

欢迎提交 Issue 和 Pull Request！

1. 🍴 Fork 本仓库
2. 🔀 创建新的分支 (`git checkout -b feature/AmazingFeature`)
3. 💾 提交你的修改 (`git commit -m 'Add some AmazingFeature'`)
4. 📤 推送到分支 (`git push origin feature/AmazingFeature`)
5. 🎉 提交 Pull Request

## 📄 License

本项目采用 MIT 许可证 - 详见 [LICENSE](LICENSE) 文件

## 📮 联系方式

如有问题或建议，欢迎通过以下方式联系：

- 💬 提交 [Issue](https://github.com/xiaowiba/ng.resume.xiaowiba/issues)
- 📧 发送邮件
- 🌟 Star 本项目以示支持

---

<div align="center">

**⭐ 如果这个项目对你有帮助，请给一个 Star 支持一下！⭐**

Made with ❤️ by [xiaowiba](https://github.com/xiaowiba)

</div>
