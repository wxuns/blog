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

/* admin/article/addclass.twig */
class __TwigTemplate_71feb40ffd332d4185ebfc7e6f0a9645048d3b825285ebba8e29caf51a2e03b5 extends \Twig_Template
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
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 30px 0 0px;\">
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">类名</label>
        <div class=\"layui-input-block\">
            <input type=\"text\" name=\"classname\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入类名\" class=\"layui-input\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["class"] ?? null), "classname", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限</label>
            <div class=\"layui-input-inline\">
                <select name=\"auth\" lay-verify=\"required\" lay-search=\"\">
                    <option value=\"\">直接选择或搜索选择</option>
                    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auth"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aa"]) {
            // line 28
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aa"], "id", [], "any", false, false, false, 28), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["aa"], "id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, ($context["class"] ?? null), "auth", [], "any", false, false, false, 28))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aa"], "rolename", [], "any", false, false, false, 28), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "                </select>
            </div>
        </div>
    </div>
    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">简介</label>
        <div class=\"layui-input-block\">
            <textarea placeholder=\"请输入内容\" class=\"layui-textarea\" name=\"itro\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["class"] ?? null), "itro", [], "any", false, false, false, 37), "html", null, true);
        echo "</textarea>
        </div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">是否显示</label>
        <div class=\"layui-input-block\">
            <input type=\"checkbox\" ";
        // line 43
        echo ((twig_get_attribute($this->env, $this->source, ($context["class"] ?? null), "status", [], "any", false, false, false, 43)) ? ("checked") : (""));
        echo " name=\"status\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"ON|OFF\">
        </div>
    </div>
    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 46
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
        ,upload = layui.upload;
    //监听提交
    form.on('submit(demo1)', function(data){
        data.field.status = data.field.status=='on'?1:0;
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
    form.verify({
        title: function(value){
            if(value.length < 2){
                return '类名至少得2个字符啊';
            }
        }
        ,pass: [
            /^[\\S]{6,12}\$/
            ,'密码必须6到12位，且不能出现空格'
        ]
        ,content: function(value){
            layedit.sync(editIndex);
        }
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/article/addclass.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 46,  101 => 43,  92 => 37,  83 => 30,  70 => 28,  66 => 27,  53 => 17,  35 => 1,);
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
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 30px 0 0px;\">
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">类名</label>
        <div class=\"layui-input-block\">
            <input type=\"text\" name=\"classname\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入类名\" class=\"layui-input\" value=\"{{ class.classname }}\">
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限</label>
            <div class=\"layui-input-inline\">
                <select name=\"auth\" lay-verify=\"required\" lay-search=\"\">
                    <option value=\"\">直接选择或搜索选择</option>
                    {% for aa in auth %}
                        <option value=\"{{ aa.id }}\"{{ aa.id==class.auth ? 'selected':''}}>{{ aa.rolename }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
    </div>
    <div class=\"layui-form-item layui-form-text\">
        <label class=\"layui-form-label\">简介</label>
        <div class=\"layui-input-block\">
            <textarea placeholder=\"请输入内容\" class=\"layui-textarea\" name=\"itro\">{{ class.itro }}</textarea>
        </div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">是否显示</label>
        <div class=\"layui-input-block\">
            <input type=\"checkbox\" {{ class.status?'checked':'' }} name=\"status\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"ON|OFF\">
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
        ,upload = layui.upload;
    //监听提交
    form.on('submit(demo1)', function(data){
        data.field.status = data.field.status=='on'?1:0;
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
    form.verify({
        title: function(value){
            if(value.length < 2){
                return '类名至少得2个字符啊';
            }
        }
        ,pass: [
            /^[\\S]{6,12}\$/
            ,'密码必须6到12位，且不能出现空格'
        ]
        ,content: function(value){
            layedit.sync(editIndex);
        }
    });
</script>
", "admin/article/addclass.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\addclass.twig");
    }
}
