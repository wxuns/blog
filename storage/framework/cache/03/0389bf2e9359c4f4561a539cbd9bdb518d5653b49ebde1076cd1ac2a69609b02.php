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

/* admin/adduser.twig */
class __TwigTemplate_2fb823371f88a8626e1dc87fac6954acfcd45336434b9bf59378ec790817d703 extends \Twig_Template
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
        <label class=\"layui-form-label\">用户名</label>
        <div class=\"layui-input-block\">
            <input type=\"text\" name=\"username\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入用户名\" class=\"layui-input\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "username", [], "any", false, false, false, 17), "html", null, true);
        echo "\">
        </div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">密码</label>
        <div class=\"layui-input-inline\">
            <input type=\"password\" name=\"password\"";
        // line 23
        echo ((twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "password", [], "any", false, false, false, 23)) ? ("") : ("lay-verify=\"pass\""));
        echo " placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\" value=\"\">
        </div>
        <div class=\"layui-form-mid layui-word-aux\">请填写6到12位密码</div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">验证手机</label>
        <div class=\"layui-inline\">
            <div class=\"layui-input-inline\">
                <input type=\"tel\" name=\"mobile\" lay-verify=\"required|phone\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "mobile", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">验证邮箱</label>
        <div class=\"layui-inline\">
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "email", [], "any", false, false, false, 40), "html", null, true);
        echo "\">
            </div>
        </div>
    </div>

        <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                <label class=\"layui-form-label\">nick</label>
                <div class=\"layui-input-inline\">
                    <input type=\"text\" name=\"nick\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "nick", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                </div>
            </div>

        </div>


        <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                <label class=\"layui-form-label\">用户类别</label>
                <div class=\"layui-input-inline\">
                    <select name=\"auth\" lay-verify=\"required\" lay-search=\"\">
                        <option value=\"\">直接选择或搜索选择</option>
                        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["auth"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aa"]) {
            // line 63
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aa"], "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\"";
            echo (((twig_get_attribute($this->env, $this->source, $context["aa"], "id", [], "any", false, false, false, 63) == twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "auth", [], "any", false, false, false, 63))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aa"], "rolename", [], "any", false, false, false, 63), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        echo "                    </select>
                </div>
            </div>
        </div>
        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">签名</label>
            <div class=\"layui-input-block\">
                <textarea placeholder=\"请输入内容\" class=\"layui-textarea\" name=\"intro\">";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["usermsg"] ?? null), "intro", [], "any", false, false, false, 72), "html", null, true);
        echo "</textarea>
            </div>
        </div>
    <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 75
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
        console.log(data.field)
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
            if(value.length < 5){
                return '用户名至少得5个字符啊';
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
        return "admin/adduser.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 75,  139 => 72,  130 => 65,  117 => 63,  113 => 62,  97 => 49,  85 => 40,  73 => 31,  62 => 23,  53 => 17,  35 => 1,);
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
        <label class=\"layui-form-label\">用户名</label>
        <div class=\"layui-input-block\">
            <input type=\"text\" name=\"username\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请输入用户名\" class=\"layui-input\" value=\"{{ usermsg.username }}\">
        </div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">密码</label>
        <div class=\"layui-input-inline\">
            <input type=\"password\" name=\"password\"{{ usermsg.password?'': 'lay-verify=\"pass\"'}} placeholder=\"请输入密码\" autocomplete=\"off\" class=\"layui-input\" value=\"\">
        </div>
        <div class=\"layui-form-mid layui-word-aux\">请填写6到12位密码</div>
    </div>
    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">验证手机</label>
        <div class=\"layui-inline\">
            <div class=\"layui-input-inline\">
                <input type=\"tel\" name=\"mobile\" lay-verify=\"required|phone\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ usermsg.mobile }}\">
            </div>
        </div>
    </div>

    <div class=\"layui-form-item\">
        <label class=\"layui-form-label\">验证邮箱</label>
        <div class=\"layui-inline\">
            <div class=\"layui-input-inline\">
                <input type=\"text\" name=\"email\" lay-verify=\"email\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ usermsg.email }}\">
            </div>
        </div>
    </div>

        <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                <label class=\"layui-form-label\">nick</label>
                <div class=\"layui-input-inline\">
                    <input type=\"text\" name=\"nick\" lay-verify=\"required\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ usermsg.nick }}\">
                </div>
            </div>

        </div>


        <div class=\"layui-form-item\">
            <div class=\"layui-inline\">
                <label class=\"layui-form-label\">用户类别</label>
                <div class=\"layui-input-inline\">
                    <select name=\"auth\" lay-verify=\"required\" lay-search=\"\">
                        <option value=\"\">直接选择或搜索选择</option>
                        {% for aa in auth %}
                        <option value=\"{{ aa.id }}\"{{ aa.id==usermsg.auth ? 'selected':''}}>{{ aa.rolename }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
        </div>
        <div class=\"layui-form-item layui-form-text\">
            <label class=\"layui-form-label\">签名</label>
            <div class=\"layui-input-block\">
                <textarea placeholder=\"请输入内容\" class=\"layui-textarea\" name=\"intro\">{{ usermsg.intro }}</textarea>
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
        console.log(data.field)
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
            if(value.length < 5){
                return '用户名至少得5个字符啊';
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
", "admin/adduser.twig", "D:\\web\\wxuns\\resources\\views\\admin\\adduser.twig");
    }
}
