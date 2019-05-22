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

/* admin/login.twig */
class __TwigTemplate_f3af66ccf4ac73f8fc09ca8cb3a7b2d9278056775b07e345d859a10763f3b5f4 extends \Twig_Template
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
<html lang=\"zh-cn\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>登录 - 文讯后台 - Never GiveUP</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./css/register-login.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
<body class=\"show-number\" style=\"position: static;\">
<div id=\"box\"><canvas class=\"particles-js-canvas-el\" width=\"1920\" height=\"888\" style=\"width: 100%; height: 100%;\"></canvas></div>
<div class=\"cent-box\">
    <div class=\"cent-box-header\">
        <h2 class=\"sub-title\">因为热爱 - Never GiveUP</h2>
    </div>

    <div class=\"cont-main clearfix\">
        <div class=\"index-tab\">
            <div class=\"index-slide-nav\">
                <a href=\"\" class=\"active\">登录</a>
                <div class=\"slide-bar\"></div>
            </div>
        </div>
        <form class=\"layui-form\" action=\"\">
        <div class=\"login form\">
            <div class=\"group\">
                <div class=\"group-ipt email\">
                    <input type=\"text\" name=\"username\" lay-verify=\"required\" placeholder=\"用户名，手机号，邮箱 三选一\">
                </div>
                <div class=\"group-ipt password border\">
                    <input type=\"password\" name=\"password\" lay-verify=\"required\" placeholder=\"输入您的登录密码\">
                </div>
                <div class=\"group-ipt verify border\">
                    <input type=\"text\" name=\"verify\" lay-verify=\"required\" placeholder=\"输入验证码\">
                    <img src=\"https://www.oschina.net/action/user/captcha\" class=\"imgcode\">
                </div>
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
        echo "\">
            </div>
        </div>

        <div class=\"button\">
            <button lay-submit class=\"layui-btn layui-btn-normal layui-btn-fluid\" lay-filter=\"form\">登录</button>
        </div>
        </form>
    </div>
</div>

<div class=\"footer\">
    <p>© ";
        // line 47
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " 文讯天下</p>
</div>

<script src=\"./js/particles.js\" type=\"text/javascript\"></script>
<script src=\"./js/background.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
    var form = layui.form;
    form.on('submit(form)', function(data){
        fetch('',{
            body: JSON.stringify(data.field),
            method: 'post'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                window.location.href = '/#'
                layer.msg(response.msg,{icon:1})
            }else{
                layer.msg(response.msg,{icon:2})
            }
            return;
        });
        return false;
    });
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "admin/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 47,  71 => 35,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"zh-cn\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <title>登录 - 文讯后台 - Never GiveUP</title>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./css/register-login.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
<body class=\"show-number\" style=\"position: static;\">
<div id=\"box\"><canvas class=\"particles-js-canvas-el\" width=\"1920\" height=\"888\" style=\"width: 100%; height: 100%;\"></canvas></div>
<div class=\"cent-box\">
    <div class=\"cent-box-header\">
        <h2 class=\"sub-title\">因为热爱 - Never GiveUP</h2>
    </div>

    <div class=\"cont-main clearfix\">
        <div class=\"index-tab\">
            <div class=\"index-slide-nav\">
                <a href=\"\" class=\"active\">登录</a>
                <div class=\"slide-bar\"></div>
            </div>
        </div>
        <form class=\"layui-form\" action=\"\">
        <div class=\"login form\">
            <div class=\"group\">
                <div class=\"group-ipt email\">
                    <input type=\"text\" name=\"username\" lay-verify=\"required\" placeholder=\"用户名，手机号，邮箱 三选一\">
                </div>
                <div class=\"group-ipt password border\">
                    <input type=\"password\" name=\"password\" lay-verify=\"required\" placeholder=\"输入您的登录密码\">
                </div>
                <div class=\"group-ipt verify border\">
                    <input type=\"text\" name=\"verify\" lay-verify=\"required\" placeholder=\"输入验证码\">
                    <img src=\"https://www.oschina.net/action/user/captcha\" class=\"imgcode\">
                </div>
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
            </div>
        </div>

        <div class=\"button\">
            <button lay-submit class=\"layui-btn layui-btn-normal layui-btn-fluid\" lay-filter=\"form\">登录</button>
        </div>
        </form>
    </div>
</div>

<div class=\"footer\">
    <p>© {{ \"now\"|date(\"Y\") }} 文讯天下</p>
</div>

<script src=\"./js/particles.js\" type=\"text/javascript\"></script>
<script src=\"./js/background.js\" type=\"text/javascript\"></script>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
    var form = layui.form;
    form.on('submit(form)', function(data){
        fetch('',{
            body: JSON.stringify(data.field),
            method: 'post'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                window.location.href = '/#'
                layer.msg(response.msg,{icon:1})
            }else{
                layer.msg(response.msg,{icon:2})
            }
            return;
        });
        return false;
    });
</script>
</body>
</html>
", "admin/login.twig", "D:\\web\\wxuns\\resources\\views\\admin\\login.twig");
    }
}
