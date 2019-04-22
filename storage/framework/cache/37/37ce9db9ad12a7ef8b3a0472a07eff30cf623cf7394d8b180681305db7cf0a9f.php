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

/* admin/addrange.twig */
class __TwigTemplate_4178544944ee0b73a9bde6124ae7bc4171d81e6a800cc3dd8f5aef942c0179d1 extends \Twig_Template
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
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 0 0 -50px; text-align: center;\">

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"name\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["range"] ?? null), "name", []), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">icon</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"icon\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["range"] ?? null), "icon", []), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">父级栏目</label>
            <div class=\"layui-input-inline\">
                <select name=\"parent_id\" lay-search=\"\">
                    <option value=\"0\">直接选择或搜索选择</option>
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["parent"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["par"]) {
            // line 40
            echo "                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["par"], "id", []), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["range"] ?? null), "parent_id", []) == twig_get_attribute($this->env, $this->source, $context["par"], "id", []))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["par"], "name", []), "html", null, true);
            echo "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['par'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                </select>
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">path</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"path\" placeholder=\"xxx/xxx\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["range"] ?? null), "path", []), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>
    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">是否显示</label>
            <div class=\"layui-input-block\">
                <input type=\"checkbox\" ";
        // line 59
        if (twig_get_attribute($this->env, $this->source, ($context["range"] ?? null), "status", [])) {
            echo "checked=\"\"";
        }
        echo " name=\"status\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
            </div>
        </div>
    </div>
    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 63
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
        return "admin/addrange.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 63,  120 => 59,  109 => 51,  98 => 42,  85 => 40,  81 => 39,  67 => 28,  55 => 19,  35 => 1,);
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
<form class=\"layui-form\" action=\"\" style=\"margin: 30px 0 0 -50px; text-align: center;\">

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">权限名</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"name\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ range.name }}\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">icon</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"icon\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ range.icon }}\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">父级栏目</label>
            <div class=\"layui-input-inline\">
                <select name=\"parent_id\" lay-search=\"\">
                    <option value=\"0\">直接选择或搜索选择</option>
                    {% for par in parent %}
                    <option value=\"{{ par.id }}\" {{ range.parent_id==par.id ? 'selected':''}}>{{ par.name }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">path</label>
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"path\" placeholder=\"xxx/xxx\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ range.path }}\">
            </div>
        </div>
    </div>
    <div class=\"layui-form-item\">
        <div class=\"layui-inline\">
            <label class=\"layui-form-label\">是否显示</label>
            <div class=\"layui-input-block\">
                <input type=\"checkbox\" {% if(range.status) %}checked=\"\"{% endif %} name=\"status\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
            </div>
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
", "admin/addrange.twig", "D:\\web\\wxuns\\resources\\views\\admin\\addrange.twig");
    }
}
