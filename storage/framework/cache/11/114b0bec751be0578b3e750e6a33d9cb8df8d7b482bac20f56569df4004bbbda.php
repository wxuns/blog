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

/* admin/index.twig */
class __TwigTemplate_3331f065ccca525805f941ca454b80dc2a2a0f6be6fb2420a7c162ab66ac3db3 extends \Twig_Template
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
        echo "<html>
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\"
        content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>后台系统</title>
  <link href=\"./css/font-awesome.4.6.0.css\" rel=\"stylesheet\" media=\"screen\">
  <link rel=\"stylesheet\" href=\"./css/sidebar-menu.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"./css/admin.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
  <script type=\"text/javascript\" src=\"/js/menu.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header layui-bg-green\">
    <div class=\"layui-logo\" style=\"box-shadow: 0 1px 2px 0 rgba(0,0,0,.15);\">
      <img src=\"/images/logo.jpg\" alt=\"\" style=\"width: 35px\">
      <span style=\"color: #fff;font-family: ZCOOL XiaoWei\">管理后台</span>
    </div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class=\"layui-nav layui-layout-left\">
      <li class=\"layui-nav-item\"><a href=\"http://wxuns.cn\" target=\"_blank\">前台</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">用户</a></li>
    </ul>
    <ul class=\"layui-nav layui-layout-right\">
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">
          <img src=\"";
        // line 31
        ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pic", [], "any", false, false, false, 31)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pic", [], "any", false, false, false, 31), "html", null, true))) : (print ("/images/tx.jpeg")));
        echo "\" class=\"layui-nav-img\">
          ";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nick", [], "any", false, false, false, 32), "html", null, true);
        echo "
        </a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">基本资料</a></dd>
          <dd><a href=\"\">安全设置</a></dd>
          <dd><a href=\"/login\">退出</a></dd>
        </dl>
      </li>
    </ul>
  </div>
  <div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\" id=\"menudom\"></ul>
        </section>
      </aside>
    </div>
  </div>
  <div class=\"layui-body\" id=\"app\">
  </div>

  <div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 文讯天下 - 版权所有
  </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script src=\"./js/sidebar-menu.js\"></script>
<script>
  var route = new Router();
  route.init()
  var menu = new Menu();
  menu.init();
</script>
</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 32,  67 => 31,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
  <meta charset=\"UTF-8\">
  <meta name=\"viewport\"
        content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
  <title>后台系统</title>
  <link href=\"./css/font-awesome.4.6.0.css\" rel=\"stylesheet\" media=\"screen\">
  <link rel=\"stylesheet\" href=\"./css/sidebar-menu.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"./css/admin.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
  <script type=\"text/javascript\" src=\"/js/menu.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header layui-bg-green\">
    <div class=\"layui-logo\" style=\"box-shadow: 0 1px 2px 0 rgba(0,0,0,.15);\">
      <img src=\"/images/logo.jpg\" alt=\"\" style=\"width: 35px\">
      <span style=\"color: #fff;font-family: ZCOOL XiaoWei\">管理后台</span>
    </div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class=\"layui-nav layui-layout-left\">
      <li class=\"layui-nav-item\"><a href=\"http://wxuns.cn\" target=\"_blank\">前台</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">用户</a></li>
    </ul>
    <ul class=\"layui-nav layui-layout-right\">
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">
          <img src=\"{{ user.pic ?: '/images/tx.jpeg'}}\" class=\"layui-nav-img\">
          {{ user.nick }}
        </a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">基本资料</a></dd>
          <dd><a href=\"\">安全设置</a></dd>
          <dd><a href=\"/login\">退出</a></dd>
        </dl>
      </li>
    </ul>
  </div>
  <div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\" id=\"menudom\"></ul>
        </section>
      </aside>
    </div>
  </div>
  <div class=\"layui-body\" id=\"app\">
  </div>

  <div class=\"layui-footer\">
    <!-- 底部固定区域 -->
    © 文讯天下 - 版权所有
  </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script src=\"./js/sidebar-menu.js\"></script>
<script>
  var route = new Router();
  route.init()
  var menu = new Menu();
  menu.init();
</script>
</body>
</html>

", "admin/index.twig", "D:\\web\\wxuns\\resources\\views\\admin\\index.twig");
    }
}
