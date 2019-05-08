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

/* admin/userrole.twig */
class __TwigTemplate_8ece4e117c31bdf4d0c071f300ee8f45c42b76b836443ad1f9024a09a05ceff6 extends \Twig_Template
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
      <a>用户</a>
      <a><cite>角色管理</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-form layui-card-header wx-header\" lay-filter=\"layadmin-userfront-formlist\">
            <button class=\"layui-btn\" id=\"add\">添加</button>
        </div>
        <div class=\"layui-card-body\">
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/user/roleapi' //数据接口
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'rolename', title: '角色名', width:120}
            ,{field: 'time', title: '时间', sort: true, width:180}
            ,{field: 'description', title: '描述'}
            ,{field: 'star', title: '星级'}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:180}
        ]]
        ,page: true //开启分页
    });
    table.on('tool(userlist)', function(obj){
        var data = obj.data;
        if(obj.event === 'detail'){
            layer.msg('ID：'+ data.id + ' 的查看操作');
        } else if(obj.event === 'del'){
            layer.confirm('真的删除行么', function(index){
                obj.del();
                layer.close(index);
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改角色',
                type: 2,
                area: ['500px', '400px'],
                fixed: false, //不固定
                content: 'user/editrole?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: '/user/roleapi'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加角色',
            type: 2,
            area: ['500px', '400px'],
            fixed: false, //不固定
            content: 'user/addrole',
            end:function () {
                table.reload('userlist', {
                    url: '/user/roleapi'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "admin/userrole.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a><cite>角色管理</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-form layui-card-header wx-header\" lay-filter=\"layadmin-userfront-formlist\">
            <button class=\"layui-btn\" id=\"add\">添加</button>
        </div>
        <div class=\"layui-card-body\">
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/user/roleapi' //数据接口
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'rolename', title: '角色名', width:120}
            ,{field: 'time', title: '时间', sort: true, width:180}
            ,{field: 'description', title: '描述'}
            ,{field: 'star', title: '星级'}
            ,{fixed: 'right', title:'操作', toolbar: '#bar',align:'center', width:180}
        ]]
        ,page: true //开启分页
    });
    table.on('tool(userlist)', function(obj){
        var data = obj.data;
        if(obj.event === 'detail'){
            layer.msg('ID：'+ data.id + ' 的查看操作');
        } else if(obj.event === 'del'){
            layer.confirm('真的删除行么', function(index){
                obj.del();
                layer.close(index);
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改角色',
                type: 2,
                area: ['500px', '400px'],
                fixed: false, //不固定
                content: 'user/editrole?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: '/user/roleapi'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加角色',
            type: 2,
            area: ['500px', '400px'],
            fixed: false, //不固定
            content: 'user/addrole',
            end:function () {
                table.reload('userlist', {
                    url: '/user/roleapi'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>", "admin/userrole.twig", "D:\\web\\wxuns\\resources\\views\\admin\\userrole.twig");
    }
}
