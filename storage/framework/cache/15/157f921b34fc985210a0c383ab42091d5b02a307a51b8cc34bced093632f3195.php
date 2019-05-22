<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* admin/article/list.twig */
class __TwigTemplate_de137a5d292907214ce703703993bb9511bcc6b24e89507b2bc0602619e594b1 extends \Twig_Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>文章</a>
      <a><cite>文章列表</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">
                <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
            </button>
            <button class=\"layui-btn\" id=\"add\">
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
            <table class=\"layui-hide\" id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    ";
        // line 28
        echo "{{ d.status==1?'正常':'回收' }}";
        echo "
</script>

<script type=\"text/html\" id=\"ontopTpl\">
    ";
        // line 32
        echo "{{ d.ontop==1?'是':'否' }}";
        echo "
</script>

<script type=\"text/html\" id=\"eliteTpl\">
    ";
        // line 36
        echo "{{ d.elite==1?'是':'否' }}";
        echo "
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    ";
        // line 41
        echo "{{# if(d.status == 1){ }}";
        echo "
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">删除</a>
    ";
        // line 43
        echo "{{# } else { }}";
        echo "
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">恢复</a>
    ";
        // line 45
        echo "{{# } }}";
        echo "
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/article/getlist' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:60, sort: true, fixed: 'left', unresize: true}
            ,{field: 'title', title: '标题', width:180}
            ,{field: 'username', title: '作者', width:80}
            ,{field: 'classname', title: '类别名称', width:100}
            ,{field: 'keyword', title: '关键字', width:100}
            ,{field: 'copyright', title: '版权'}
            ,{field: 'url', title: '三方来源'}
            ,{field: 'count', title: '访问量', width: 80}
            ,{field: 'laud', title: '点赞数', width: 80}
            ,{field: 'comment', title: '评论数', width: 80}
            ,{field: 'ontop', title: '置顶', width: 60, templet: '#ontopTpl',align:'center'}
            ,{field: 'elite', title: '加精', width: 60, templet: '#eliteTpl',align:'center'}
            ,{field: 'status', title: '状态', width: 70, templet: '#statusTpl',align:'center'}
            ,{field: 'time', title: '时间', width: 160}
            ,{field: 'last_time', title: '最后时间', width: 160}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:150}
        ]]
    });
    table.on('tool(userlist)', function(obj){
        var data = obj.data;
        if(obj.event === 'detail'){
            layer.msg('ID：'+ data.id + ' 的查看操作');
        } else if(obj.event === 'delete'||obj.event === 'lifted'){
            layer.confirm('简单提示，确定？', {
                title:'提示信息'
                ,btn: ['确定','取消'] //按钮
                ,icon: 2
            }, function(){
                fetch('article/delarticle?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: '/article/getlist'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改文章',
                type: 2,
                area: ['100%', '100%'],
                fixed: false, //不固定
                content: 'article/edit?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: 'article/getlist'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加文章',
            type: 2,
            area: ['100%', '100%'],
            fixed: false, //不固定
            content: '/article/add',
            end:function () {
                table.reload('userlist', {
                    url: '/article/getlist'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/article/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 45,  91 => 43,  86 => 41,  78 => 36,  71 => 32,  64 => 28,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>文章</a>
      <a><cite>文章列表</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">
                <i class=\"fa fa-trash-o\" aria-hidden=\"true\"></i>
            </button>
            <button class=\"layui-btn\" id=\"add\">
                    <i class=\"fa fa-pencil\" aria-hidden=\"true\"></i></button>
            <table class=\"layui-hide\" id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    {{ \"{{ d.status==1?'正常':'回收' }}\" }}
</script>

<script type=\"text/html\" id=\"ontopTpl\">
    {{ \"{{ d.ontop==1?'是':'否' }}\" }}
</script>

<script type=\"text/html\" id=\"eliteTpl\">
    {{ \"{{ d.elite==1?'是':'否' }}\" }}
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    {{ \"{{# if(d.status == 1){ }}\" }}
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">删除</a>
    {{ \"{{# } else { }}\" }}
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">恢复</a>
    {{ \"{{# } }}\" }}
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/article/getlist' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:60, sort: true, fixed: 'left', unresize: true}
            ,{field: 'title', title: '标题', width:180}
            ,{field: 'username', title: '作者', width:80}
            ,{field: 'classname', title: '类别名称', width:100}
            ,{field: 'keyword', title: '关键字', width:100}
            ,{field: 'copyright', title: '版权'}
            ,{field: 'url', title: '三方来源'}
            ,{field: 'count', title: '访问量', width: 80}
            ,{field: 'laud', title: '点赞数', width: 80}
            ,{field: 'comment', title: '评论数', width: 80}
            ,{field: 'ontop', title: '置顶', width: 60, templet: '#ontopTpl',align:'center'}
            ,{field: 'elite', title: '加精', width: 60, templet: '#eliteTpl',align:'center'}
            ,{field: 'status', title: '状态', width: 70, templet: '#statusTpl',align:'center'}
            ,{field: 'time', title: '时间', width: 160}
            ,{field: 'last_time', title: '最后时间', width: 160}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:150}
        ]]
    });
    table.on('tool(userlist)', function(obj){
        var data = obj.data;
        if(obj.event === 'detail'){
            layer.msg('ID：'+ data.id + ' 的查看操作');
        } else if(obj.event === 'delete'||obj.event === 'lifted'){
            layer.confirm('简单提示，确定？', {
                title:'提示信息'
                ,btn: ['确定','取消'] //按钮
                ,icon: 2
            }, function(){
                fetch('article/delarticle?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: '/article/getlist'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改文章',
                type: 2,
                area: ['100%', '100%'],
                fixed: false, //不固定
                content: 'article/edit?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: 'article/getlist'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加文章',
            type: 2,
            area: ['100%', '100%'],
            fixed: false, //不固定
            content: '/article/add',
            end:function () {
                table.reload('userlist', {
                    url: '/article/getlist'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>
", "admin/article/list.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\list.twig");
    }
}
