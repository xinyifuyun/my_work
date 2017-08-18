<!DOCTYPE HTML>
<html>
<head>
    <title> BUI 管理系统</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/main-min.css" rel="stylesheet" type="text/css" />
</head>
<body>

<div class="header">

    <div class="dl-title">
        <a href="http://www.builive.com" title="文档库地址" target="_blank"><!-- 仅仅为了提供文档的快速入口，项目中请删除链接 -->
            <span class="lp-title-port">BUI</span><span class="dl-title-text">前端框架</span>
        </a>
    </div>

    <div class="dl-log">欢迎您，<span class="dl-log-user">**.**@alibaba-inc.com</span><a href="###" title="退出系统" class="dl-log-quit">[退出]</a><a href="http://http://www.builive.com/" title="文档库" class="dl-log-quit">文档库</a>
    </div>
</div>
<div class="content">
    <div class="dl-main-nav">
        <div class="dl-inform"><div class="dl-inform-title">贴心小秘书<s class="dl-inform-icon dl-up"></s></div></div>
        <ul id="J_Nav"  class="nav-list ks-clear">
            <li class="nav-item dl-selected"><div class="nav-item-inner nav-home">首页</div></li>
            <li class="nav-item"><div class="nav-item-inner nav-order">文章管理</div></li>
        </ul>
    </div>
    <ul id="J_NavContent" class="dl-tab-conten">

    </ul>
</div>
<script type="text/javascript" src="/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/assets/js/bui.js"></script>
<script type="text/javascript" src="/assets/js/config.js"></script>

<script>
    BUI.use('common/main',function(){
        var config = [{
            id:'menu',
            homePage : 'code',
            menu:[{
                text:'首页内容',
                items:[
                    {id:'code',text:'首页代码',href:'/admin/main/code',closeable : false},
                    {id:'main-menu',text:'顶部导航',href:'/admin/main/menu'},
                    {id:'second-menu',text:'右边菜单',href:'/admin/main/second'},
                    {id:'dyna-menu',text:'动态菜单',href:'/admin/main/dyna_menu'}
                ]
            }]
        },{
            id:'form',
            menu:[{
                text:'文章分类管理',
                items:[
                    {id:'code',text:'文章分类列表',href:'/admin/article/type'}
                ]
            },{
                text:'文章管理',
                items:[
                    {id:'success',text:'文章列表',href:'/admin/article/'}

                ]
            }]
        }];
        new PageUtil.MainPage({
            modulesConfig : config
        });
    });
</script>
</body>
</html>
