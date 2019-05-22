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

/* admin/addrole.twig */
class __TwigTemplate_844fe60d8934cd31268c3aab6ba6cc417193b4e97fa1e546485aa54b5e4db6ce extends \Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>layui</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/layui/css/layui.css\">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 30px 0 0px;\" enctype=\"multipart/form-data\">

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">角色名</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"rolename\" lay-verify=\"required\" placeholder=\"请输入角色名\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "rolename", [], "any", false, false, false, 19), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">简介</label>
        <div class=\"layui-input-block\">
            <textarea placeholder=\"请输入简介\" name=\"description\" lay-verify=\"required\" class=\"layui-textarea\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "description", [], "any", false, false, false, 27), "html", null, true);
        echo "</textarea>
        </div>
    </div>
    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">星级</label>
        <div class=\"layui-input-block\">
            <div id=\"star\"></div>
            <input type=\"hidden\" name=\"star\" value=\"";
        // line 34
        ((twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "star", [], "any", false, false, false, 34)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "star", [], "any", false, false, false, 34), "html", null, true))) : (print (1)));
        echo "\" id=\"stardom\">
        </div>
    </div>
    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
        echo "\">
    <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
            <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
            <button type=\"reset\" class=\"layui-btn layui-btn-primary\">重置</button>
        </div>
    </div>
</form>


<script type=\"text/javascript\" src=\"/layui/layui.all.js\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    var form = layui.form
        ,layer = layui.layer
        ,rate = layui.rate;

    //渲染
    var ins1 = rate.render({
        elem: '#star'  //绑定元素
        ,length:5
        ,value: ";
        // line 58
        ((twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "star", [], "any", false, false, false, 58)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["auth"] ?? null), "star", [], "any", false, false, false, 58), "html", null, true))) : (print (1)));
        echo "
        ,theme: '#FE0000'
        ,choose: function(value){
            document.getElementById('stardom').value = value
        }
    });
    //监听提交
    form.on('submit(demo1)', function(data){
        fetch('',{
            body: JSON.stringify(data.field),
            method: 'post'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.msg,{icon:1})
                parent.layer.close(index);
            }
            return;
        });
        return false;
    });

</script>
";
    }

    public function getTemplateName()
    {
        return "admin/addrole.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 58,  82 => 37,  76 => 34,  66 => 27,  55 => 19,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>layui</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/layui/css/layui.css\">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
</head>
<body>
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 30px 0 0px;\" enctype=\"multipart/form-data\">

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">角色名</label>
            <div class=\"layui-input-block\">
                <input type=\"text\" name=\"rolename\" lay-verify=\"required\" placeholder=\"请输入角色名\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ auth.rolename }}\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">简介</label>
        <div class=\"layui-input-block\">
            <textarea placeholder=\"请输入简介\" name=\"description\" lay-verify=\"required\" class=\"layui-textarea\">{{ auth.description }}</textarea>
        </div>
    </div>
    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">星级</label>
        <div class=\"layui-input-block\">
            <div id=\"star\"></div>
            <input type=\"hidden\" name=\"star\" value=\"{{ auth.star?:1 }}\" id=\"stardom\">
        </div>
    </div>
    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
    <div class=\"layui-form-item\">
        <div class=\"layui-input-block\">
            <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
            <button type=\"reset\" class=\"layui-btn layui-btn-primary\">重置</button>
        </div>
    </div>
</form>


<script type=\"text/javascript\" src=\"/layui/layui.all.js\"></script>
<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script>
    var form = layui.form
        ,layer = layui.layer
        ,rate = layui.rate;

    //渲染
    var ins1 = rate.render({
        elem: '#star'  //绑定元素
        ,length:5
        ,value: {{ auth.star?:1 }}
        ,theme: '#FE0000'
        ,choose: function(value){
            document.getElementById('stardom').value = value
        }
    });
    //监听提交
    form.on('submit(demo1)', function(data){
        fetch('',{
            body: JSON.stringify(data.field),
            method: 'post'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.msg,{icon:1})
                parent.layer.close(index);
            }
            return;
        });
        return false;
    });

</script>
", "admin/addrole.twig", "D:\\web\\wxuns\\resources\\views\\admin\\addrole.twig");
    }
}
