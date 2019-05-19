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

/* admin/userlist.twig */
class __TwigTemplate_13d0423dda8a642b30ee00ed07722dd0d0211f107efa85bcbe9ca17e30b370b5 extends \Twig_Template
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
      <a><cite>用户管理</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">封号</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    ";
        // line 25
        echo "{{ d.status==1?'正常':'封号' }}";
        echo "
</script>


<script type=\"text/html\" id=\"picTpl\">
    <img src=\"";
        // line 30
        echo "{{ d.pic }}";
        echo "\" alt=\"\" style=\"height:50px;\">
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    ";
        // line 35
        echo "{{# if(d.status == 1){ }}";
        echo "
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">封号</a>
    ";
        // line 37
        echo "{{# } else { }}";
        echo "
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">解封</a>
    ";
        // line 39
        echo "{{# } }}";
        echo "
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/user/getlist' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'username', title: '用户名'}
            ,{field: 'pic', title: '头像', width:80, templet: '#picTpl'}
            ,{field: 'mobile', title: '电话'}
            ,{field: 'email', title: 'email'}
            ,{field: 'nick', title: '昵称'}
            ,{field: 'intro', title: '签名'}
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
                fetch('user/deluser?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: '/user/getlist'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改用户信息',
                type: 2,
                area: ['500px', '600px'],
                fixed: false, //不固定
                content: 'user/edituser?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: '/user/getlist'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加用户',
            type: 2,
            area: ['500px', '600px'],
            fixed: false, //不固定
            content: 'user/adduser',
            end:function () {
                table.reload('userlist', {
                    url: '/user/getlist'
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
        return "admin/userlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 39,  82 => 37,  77 => 35,  69 => 30,  61 => 25,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a><cite>用户管理</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
        </div>
        <div class=\"layui-card-body\">
            <button class=\"layui-btn layui-btn-danger\" id=\"del\">封号</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
            <table id=\"userlist\" lay-filter=\"userlist\"></table>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script type=\"text/html\" id=\"statusTpl\">
    {{ \"{{ d.status==1?'正常':'封号' }}\" }}
</script>


<script type=\"text/html\" id=\"picTpl\">
    <img src=\"{{ \"{{ d.pic }}\" }}\" alt=\"\" style=\"height:50px;\">
</script>

<script type=\"text/html\" id=\"bar\">
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"edit\">编辑</a>
    {{ \"{{# if(d.status == 1){ }}\" }}
    <a class=\"layui-btn layui-btn-danger layui-btn-sm\" lay-event=\"delete\">封号</a>
    {{ \"{{# } else { }}\" }}
    <a class=\"layui-btn layui-btn-sm\" lay-event=\"lifted\">解封</a>
    {{ \"{{# } }}\" }}
</script>
<script>
    var table = layui.table;

    //第一个实例
    table.render({
        elem: '#userlist'
        ,url: '/user/getlist' //数据接口
        ,page: true //开启分页
        ,cols: [[ //表头
            {type: 'checkbox', fixed: 'left'}
            ,{field: 'id', title: 'ID', width:80, sort: true}
            ,{field: 'username', title: '用户名'}
            ,{field: 'pic', title: '头像', width:80, templet: '#picTpl'}
            ,{field: 'mobile', title: '电话'}
            ,{field: 'email', title: 'email'}
            ,{field: 'nick', title: '昵称'}
            ,{field: 'intro', title: '签名'}
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
                fetch('user/deluser?id='+data.id,{
                    method: 'GET'
                }).then(function(response) {
                    return response.text();
                }).then(function(response) {
                    response = JSON.parse(response)
                    if(response.status == 1){
                        layer.msg(response.msg, {icon: 1});
                        table.reload('userlist', {
                            url: '/user/getlist'
                            ,where: {} //设定异步数据接口的额外参数
                            //,height: 300
                        });
                    }
                    return;
                });
            });
        } else if(obj.event === 'edit'){
            layer.open({
                title: '修改用户信息',
                type: 2,
                area: ['500px', '600px'],
                fixed: false, //不固定
                content: 'user/edituser?id='+data.id,
                end:function () {
                    table.reload('userlist', {
                        url: '/user/getlist'
                        ,where: {} //设定异步数据接口的额外参数
                        //,height: 300
                    });
                }
            });
        }
    });
    \$('#add').click(function () {
        layer.open({
            title: '添加用户',
            type: 2,
            area: ['500px', '600px'],
            fixed: false, //不固定
            content: 'user/adduser',
            end:function () {
                table.reload('userlist', {
                    url: '/user/getlist'
                    ,where: {} //设定异步数据接口的额外参数
                    //,height: 300
                });
            }
        });
    });
</script>
", "admin/userlist.twig", "D:\\web\\wxuns\\resources\\views\\admin\\userlist.twig");
    }
}
