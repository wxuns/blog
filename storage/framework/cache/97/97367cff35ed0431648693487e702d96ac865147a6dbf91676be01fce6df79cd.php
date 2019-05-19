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

/* admin/article/classlist.twig */
class __TwigTemplate_14fe061ce1233e3edb4b1e47918de9a2e48a5999b6cf39756f8e5fb4e2864cf7 extends \Twig_Template
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
      <a>博客系统</a>
      <a><cite>栏目分类</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">回收</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    ";
        // line 25
        echo "{{ d.status==1?'正常':'回收' }}";
        echo "
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    ";
        // line 30
        echo "{{# if(d.status == 1){ }}";
        echo "
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">回收</a>
    ";
        // line 32
        echo "{{# } else { }}";
        echo "
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">恢复</a>
    ";
        // line 34
        echo "{{# } }}";
        echo "
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: 'article/getclass' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'classname', title: '类名'}
            ,{field: 'time', title: '时间'}
            ,{field: 'itro', title: '签名'}
            ,{field: 'rolename', title: '角色权限'}
            ,{field: 'status', title: '状态', width: 80, templet: '#statusTpl'}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:180}
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
                fetch('article/delclass?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: 'article/getclass'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改分类',
                type: 2,
                area: ['500px', '600px'],
                fixed: false, //不固定
                content: 'article/classedit?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: 'article/getclass'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加分类',
            type: 2,
            area: ['500px', '600px'],
            fixed: false, //不固定
            content: 'article/classadd',
            end:function () {
                table.reload('userlist', {
                    url: 'article/getclass'
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
        return "admin/article/classlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 34,  74 => 32,  69 => 30,  61 => 25,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>博客系统</a>
      <a><cite>栏目分类</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">回收</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    {{ \"{{ d.status==1?'正常':'回收' }}\" }}
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    {{ \"{{# if(d.status == 1){ }}\" }}
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">回收</a>
    {{ \"{{# } else { }}\" }}
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">恢复</a>
    {{ \"{{# } }}\" }}
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: 'article/getclass' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'classname', title: '类名'}
            ,{field: 'time', title: '时间'}
            ,{field: 'itro', title: '签名'}
            ,{field: 'rolename', title: '角色权限'}
            ,{field: 'status', title: '状态', width: 80, templet: '#statusTpl'}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:180}
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
                fetch('article/delclass?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: 'article/getclass'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改分类',
                type: 2,
                area: ['500px', '600px'],
                fixed: false, //不固定
                content: 'article/classedit?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: 'article/getclass'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加分类',
            type: 2,
            area: ['500px', '600px'],
            fixed: false, //不固定
            content: 'article/classadd',
            end:function () {
                table.reload('userlist', {
                    url: 'article/getclass'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>
", "admin/article/classlist.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\classlist.twig");
    }
}
