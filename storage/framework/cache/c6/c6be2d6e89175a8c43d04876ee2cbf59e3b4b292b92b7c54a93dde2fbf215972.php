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

/* admin/article/addarticle.twig */
class __TwigTemplate_813e05948fc2bcfe18e9947acfd75d85aaa8c21284c67832fe791a671314970e extends \Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />


<div class=\"wx-body\">
    <input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">

    <div id=\"editormd\">
        <textarea style=\"display:none;\">### Hello Editor.md !</textarea>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        var editor = editormd(\"editormd\", {
            height:'89%',
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            emoji: false
        });

        /*
        // or
        var editor = editormd({
            id   : \"editormd\",
            path : \"../lib/\"
        });
        */
    });
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
        return "admin/article/addarticle.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />


<div class=\"wx-body\">
    <input type=\"text\" name=\"title\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">

    <div id=\"editormd\">
        <textarea style=\"display:none;\">### Hello Editor.md !</textarea>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        var editor = editormd(\"editormd\", {
            height:'89%',
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            emoji: false
        });

        /*
        // or
        var editor = editormd({
            id   : \"editormd\",
            path : \"../lib/\"
        });
        */
    });
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
", "admin/article/addarticle.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\addarticle.twig");
    }
}
