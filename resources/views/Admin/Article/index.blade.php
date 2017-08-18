<!DOCTYPE HTML>
<html>
<head>
    <title> 表格跟弹出框联动</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="/assets/css/dpl-min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/bui-min.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/page-min.css" rel="stylesheet" type="text/css"/>
</head>
<body>

<div class="container">
    <div id="grid"></div>
    {{--store = new Store({autoLoad:true,url : data/records.php,//autoSync : true, //保存数据后自动调用store.load()方法            proxy : {              method : POST, //更改为POS--}}
    <div id="content" class="hide">
        <form id="J_Form" class="form-horizontal">
            <div class="row">
                <div class="control-group span8">
                    <label class="control-label"><s>*</s>文章标题：</label>
                    <div class="controls">
                        <input name="title" type="text" data-rules="{required:true}" class="input-normal control-text">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="control-group span15">
                    <label class="control-label">备注：</label>
                    <div class="controls control-row4">
                        <textarea name="body" class="input-large"></textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<script type="text/javascript" src="/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript" src="/assets/js/bui-min.js"></script>

<script type="text/javascript" src="/assets/js/config-min.js"></script>
<script type="text/javascript">
    BUI.use('common/page');
</script>
<script type="text/javascript">


    BUI.use(['bui/grid', 'bui/data'], function (Grid, Data) {

        var columns = [{title: '文章标题', dataIndex: 'title'},
                {title: '文章分类', dataIndex: 'content_type'},
                {title: '创建者', dataIndex: 'author'},
                {title: '创建时间', dataIndex: 'created_at'},
                {
                    title: '操作', renderer: function () {
                    return '<span class="grid-command btn-edit">编辑</span>';
                }
                }
            ],
            //默认的数据
            data = <?php echo $list?>,


            store = new Store({
                autoLoad:true,
                url : 'admin/article/dataList'
            }),

//            {url : data/records.php,//autoSync : true, //保存数据后自动调用store.load()方法            proxy : {              method : POST, //更改为POS--}

            editing = new Grid.Plugins.DialogEditing({
                contentId: 'content',
                triggerCls: 'btn-edit'
            }),
            grid = new Grid.Grid({
                render: '#grid',
                columns: columns,
                forceFit: true,
                store: store,
                plugins: [Grid.Plugins.CheckSelection, editing],
                tbar: {
                    items: [{
                        btnCls: 'button button-small',
                        text: '<i class="icon-plus"></i>添加',
                        listeners: {
                            'click': addFunction
                        }
                    },
                        {
                            btnCls: 'button button-small',
                            text: '<i class="icon-remove"></i>删除',
                            listeners: {
                                'click': delFunction
                            }
                        }]
                }

            });
        grid.render();

        function addFunction() {
            var newData = {title: '请输入文章标题'};
            editing.add(newData); //添加记录后，直接编辑
        }

        function delFunction() {
            var selections = grid.getSelection();
            store.remove(selections);
        }

        $('#btnSave').on('click', function () {

            var records = store.getResult();

        });
    });
</script>

</body>
</html> 