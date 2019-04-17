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

/* admin/range.twig */
class __TwigTemplate_faa47e82ef7f6e709579aaacb052452119b4831e243a307f585afafd3267a7f3 extends \Twig_Template
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
      <a><cite>导航元素</cite></a>
    </span>
    </div>
</fieldset>
<table class=\"layui-hide\" id=\"test\" lay-filter=\"test\"></table>
<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"edit\">编辑</a>
    <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
</script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script>
    var table = layui.table;

    table.render({
        elem: '#test'
        ,url:'/test/table/demo1.json'
        ,toolbar: '#toolbarDemo'
        ,title: '用户数据表'
        ,cols: [[
            {type: 'checkbox', fixed: 'left'}
            ,{field:'id', title:'ID', width:80, fixed: 'left', unresize: true, sort: true}
            ,{field:'username', title:'用户名', width:120, edit: 'text'}
            ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                    return '<em>'+ res.email +'</em>'
                }}
            ,{field:'sex', title:'性别', width:80, edit: 'text', sort: true}
            ,{field:'city', title:'城市', width:100}
            ,{field:'sign', title:'签名'}
            ,{field:'experience', title:'积分', width:80, sort: true}
            ,{field:'ip', title:'IP', width:120}
            ,{field:'logins', title:'登入次数', width:100, sort: true}
            ,{field:'joinTime', title:'加入时间', width:120}
            ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:150}
        ]]
        ,page: true
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/range.twig";
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
      <a><cite>导航元素</cite></a>
    </span>
    </div>
</fieldset>
<table class=\"layui-hide\" id=\"test\" lay-filter=\"test\"></table>
<script type=\"text/html\" id=\"barDemo\">
    <a class=\"layui-btn layui-btn-xs\" lay-event=\"edit\">编辑</a>
    <a class=\"layui-btn layui-btn-danger layui-btn-xs\" lay-event=\"del\">删除</a>
</script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script>
    var table = layui.table;

    table.render({
        elem: '#test'
        ,url:'/test/table/demo1.json'
        ,toolbar: '#toolbarDemo'
        ,title: '用户数据表'
        ,cols: [[
            {type: 'checkbox', fixed: 'left'}
            ,{field:'id', title:'ID', width:80, fixed: 'left', unresize: true, sort: true}
            ,{field:'username', title:'用户名', width:120, edit: 'text'}
            ,{field:'email', title:'邮箱', width:150, edit: 'text', templet: function(res){
                    return '<em>'+ res.email +'</em>'
                }}
            ,{field:'sex', title:'性别', width:80, edit: 'text', sort: true}
            ,{field:'city', title:'城市', width:100}
            ,{field:'sign', title:'签名'}
            ,{field:'experience', title:'积分', width:80, sort: true}
            ,{field:'ip', title:'IP', width:120}
            ,{field:'logins', title:'登入次数', width:100, sort: true}
            ,{field:'joinTime', title:'加入时间', width:120}
            ,{fixed: 'right', title:'操作', toolbar: '#barDemo', width:150}
        ]]
        ,page: true
    });
</script>
", "admin/range.twig", "D:\\web\\wxuns\\resources\\views\\admin\\range.twig");
    }
}
