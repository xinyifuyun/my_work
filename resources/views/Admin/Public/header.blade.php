<!--[if lte IE 7]>
    <div id="errorie"><div>您还在使用老掉牙的IE，正常使用系统前请升级您的浏览器到 IE8以上版本 <a target="_blank" href="http://windows.microsoft.com/zh-cn/internet-explorer/ie-8-worldwide-languages">点击升级</a>&nbsp;&nbsp;强烈建议您更改换浏览器：<a href="http://down.tech.sina.com.cn/content/40975.html" target="_blank">谷歌 Chrome</a></div></div>
<![endif]-->
<header id="bjui-header">
    <div class="bjui-navbar-header">
        <button type="button" class="bjui-navbar-toggle btn-default" data-toggle="collapse" data-target="#bjui-navbar-collapse">
            <i class="fa fa-bars"></i>
        </button>
        <a class="bjui-navbar-logo" href="{{url('index')}}"><img src="/admin/Public/Img/logo.png"></a>
    </div>
    <nav id="bjui-navbar-collapse">
        <ul class="bjui-navbar-right">
            <li class="datetime"><div><span id="bjui-date"></span> <span id="bjui-clock"></span></div></li>
            <li><a href="/" target="_blank">网站首页</a></li>
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">我的账户 <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{url('Admin/Index/myInfo')}}" data-toggle="dialog" data-id="changepwd_page" data-mask="true" data-width="400" data-height="260">&nbsp;<span class="fa fa-lock"></span> 修改密码&nbsp;</a></li>
                    <li><a href="#">&nbsp;<span class="fa fa-user"></span> 我的资料</a></li>
                    <li><a href="{{url('Admin/Index/cache')}}" data-toggle="navtab">&nbsp;<span class="fa fa-trash"></span> 清理缓存</a></li>
                    <li class="divider"></li>
                    <li><a href="{{url('Admin/Public/loginOut')}}" class="red">&nbsp;<span class="fa fa-power-off"></span> 注销登陆</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="#" class="dropdown-toggle theme purple" data-toggle="dropdown"><i class="fa fa-tree"></i></a>
                <ul class="dropdown-menu" role="menu" id="bjui-themes">
                    <li><a href="javascript:;" class="theme_default" data-toggle="theme" data-theme="default">&nbsp;<i class="fa fa-tree"></i> 黑白分明&nbsp;&nbsp;</a></li>
                    <li><a href="javascript:;" class="theme_orange" data-toggle="theme" data-theme="orange">&nbsp;<i class="fa fa-tree"></i> 橘子红了</a></li>
                    <li class="active"><a href="javascript:;" class="theme_purple" data-toggle="theme" data-theme="purple">&nbsp;<i class="fa fa-tree"></i> 紫罗兰</a></li>
                    <li><a href="javascript:;" class="theme_blue" data-toggle="theme" data-theme="blue">&nbsp;<i class="fa fa-tree"></i> 青出于蓝</a></li>
                    <li><a href="javascript:;" class="theme_red" data-toggle="theme" data-theme="red">&nbsp;<i class="fa fa-tree"></i> 红红火火</a></li>
                    <li><a href="javascript:;" class="theme_green" data-toggle="theme" data-theme="green">&nbsp;<i class="fa fa-tree"></i> 绿草如茵</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="bjui-hnav">
        <button type="button" class="btn-default bjui-hnav-more-left" title="导航菜单左移"><i class="fa fa-angle-double-left"></i></button>
        <div id="bjui-hnav-navbar-box">
            <ul id="bjui-hnav-navbar">
                <li class="active"><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-check-square-o"></i> 站点设置</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree1" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="check-square-o">
                            <li data-id="1" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">自定义导航</li>
                            <li data-id="10" data-pid="1" data-url="form-button.html" data-tabid="form-button" data-faicon="hand-o-up">站内链接</li>
                            <li data-id="11" data-pid="1" data-url="form-input.html" data-tabid="form-input" data-faicon="terminal">自定义链接</li>
                            <li data-id="2" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">站点参数</li>
                            <li data-id="20" data-pid="2" data-url="form-select.html" data-tabid="form-select" data-faicon="caret-square-o-down"> 系统参数</li>
                            <li data-id="21" data-pid="2" data-url="form-checkbox.html" data-tabid="table" data-faicon="check-square-o">自定义参数</li>
                            <li data-id="22" data-pid="2" data-url="form.html" data-tabid="form" data-faicon="list">其它参数</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 幻灯片管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree4" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="plane">
                            <li data-id="2" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">弹出窗口</li>
                            <li data-id="20" data-pid="2" data-url="dialog.html" data-tabid="dialog" data-faicon="plane">弹出窗口</li>
                            <li data-id="21" data-pid="2" data-url="alert.html" data-tabid="alert" data-faicon="info-circle">信息提示</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-plane"></i> 单页面管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree4" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="plane">
                            <li data-id="4" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">弹出窗口</li>
                            <li data-id="40" data-pid="4" data-url="dialog.html" data-tabid="dialog" data-faicon="plane">弹出窗口</li>
                            <li data-id="41" data-pid="4" data-url="alert.html" data-tabid="alert" data-faicon="info-circle">信息提示</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-image"></i> 文章管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree5" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="image">
                            <li data-id="5" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">文章管理</li>
                            <li data-id="51" data-pid="5" data-url="highcharts.html" data-tabid="chart" data-faicon="image">文章分类</li>
                            <li data-id="52" data-pid="5" data-url="/admin/article/add" data-tabid="article-list" data-faicon="image">新增文章</li>
                            <li data-id="53" data-pid="5" data-url="{:U('Admin/Article/index')}" data-tabid="article-list" data-faicon="image">文章列表</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-coffee"></i> 商品管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="coffee">
                            <li data-id="6" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">商品管理</li>
                            <li data-id="61" data-pid="6" data-url="tabs.html" data-tabid="tabs" data-faicon="columns">商品分类</li>
                            <li data-id="62" data-pid="6" data-url="tabs.html" data-tabid="tabs" data-faicon="columns">商品列表</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 用户管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="bug">
                            <li data-id="7" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">用户管理</li>
                            <li data-id="71" data-pid="7" data-url="ztree.html" data-tabid="ztree" data-faicon="tree">系统管理员</li>
                            <li data-id="72" data-pid="7" data-url="ztree-select.html" data-tabid="ztree-select" data-faicon="caret-square-o-down">注册用户</li>
                        </ul>
                    </div>
                </li>
                <li><a href="javascript:;" data-toggle="slidebar"><i class="fa fa-bug"></i> 系统管理</a>
                    <div class="items hide" data-noinit="true">
                        <ul id="bjui-hnav-tree6" class="ztree ztree_main" data-toggle="ztree" data-on-click="MainMenuClick" data-expand-all="true" data-faicon="bug">
                            <li data-id="8" data-pid="0" data-faicon="folder-open-o" data-faicon-close="folder-o">数据备份</li>
                            <li data-id="81" data-pid="8" data-url="ztree.html" data-tabid="ztree" data-faicon="tree">系统日志</li>
                            <li data-id="82" data-pid="8" data-url="ztree-select.html" data-tabid="ztree-select" data-faicon="caret-square-o-down">在线列表</li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog"></i> 系统设置 <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">角色权限</a></li>
                        <li><a href="#">用户列表</a></li>
                        <li class="divider"></li>
                        <li><a href="#">关于我们</a></li>
                        <li class="divider"></li>
                        <li><a href="#">友情链接</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <button type="button" class="btn-default bjui-hnav-more-right" title="导航菜单右移"><i class="fa fa-angle-double-right"></i></button>
    </div>
</header>