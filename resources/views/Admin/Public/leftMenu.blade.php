<div id="bjui-leftside">
    <div id="bjui-sidebar-s">
        <div class="collapse"></div>
    </div>
    <div id="bjui-sidebar">
        <div class="toggleCollapse"><h2><i class="fa fa-bars"></i> 导航栏 <i class="fa fa-bars"></i></h2><a
                    href="javascript:;" class="lock"><i class="fa fa-lock"></i></a></div>
        <div class="panel-group panel-main" data-toggle="accordion" id="bjui-accordionmenu"
             data-heightbox="#bjui-sidebar" data-offsety="26">

            @foreach($level  as $k => $v)

                <div class="panel panel-default">
                    <div class="panel-heading panelContent">
                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#bjui-accordionmenu"
                                                   href="#bjui-collapse{$k}"
                                                   class="<php>if($k == 0){echo 'active';}</php>"><i
                                        class="fa fa-caret-square-o-down"></i>&nbsp;{{$v['name']}}</a></h4>
                    </div>
                    <div id="bjui-collapse{{$k}}"
                         class="panel-collapse panelContent collapse <php>if($k == 0){echo 'in';}</php>">
                        <div class="panel-body">
                            <ul id="bjui-tree{$k}" class="ztree ztree_main" data-toggle="ztree"
                                data-on-click="MainMenuClick"
                                data-expand-all="{{($k == 0)?'true':'false'}}">
                                @foreach($leftMenu[$k] as $k2 => $v2)
                                    <li data-id="{{$v2['id']}}" data-pid="{{$v2['pid']}}" {{($v2['url'] != '#') ? 'data-url='.url($v2['url'])."data-tabid=leftMenu_{$v2['id']}".'data-fresh="true" data-reloadWarn="true"':''}} >{{$v2['name']}}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="panelFooter">
                        <div class="panelFooterContent"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>