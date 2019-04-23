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
class __TwigTemplate_3a7267076082960069b941dc673163f9d5c23dd27e4174b4b31d35c19e9da1d6 extends \Twig_Template
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
  <link rel=\"stylesheet\" href=\"./css/base.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
  <script type=\"text/javascript\" src=\"/js/menu.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header\">
    <div class=\"layui-logo\" style=\"border-right: 0.1px solid #393d49;\">
      <img src=\"/images/logo.gif\" alt=\"\" style=\"width: 35px\">&emsp;管理后台
    </div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class=\"layui-nav layui-layout-left\">
      <li class=\"layui-nav-item\"><a href=\"\">控制台</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">商品管理</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">用户</a></li>
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">其它系统</a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">邮件管理</a></dd>
          <dd><a href=\"\">消息管理</a></dd>
          <dd><a href=\"\">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class=\"layui-nav layui-layout-right\">
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">
          <img src=\"//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\" class=\"layui-nav-img\">
          贤心
        </a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">基本资料</a></dd>
          <dd><a href=\"\">安全设置</a></dd>
        </dl>
      </li>
      <li class=\"layui-nav-item\"><a href=\"\">退出</a></li>
    </ul>
  </div>
  <div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\" id=\"menudom\">
            <li class=\"treeview active\">
              <a href=\"#/\">
                <i class=\"fa fa-dashboard\"></i> <span>仪表盘</span> <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 仪表盘 v1</a></li>
                <li><a href=\"#/power/range\"><i class=\"fa fa-circle-o\"></i> 权限范围</a></li>
              </ul>
            </li>
            ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rangelist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rangelist"]) {
            // line 66
            echo "            <li class=\"treeview\">
              <a href=\"javascript:;\">
                <i class=\"";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "icon", []), "html", null, true);
            echo "\"></i>
                <span>";
            // line 69
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "name", []), "html", null, true);
            echo "</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", []));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if ((twig_get_attribute($this->env, $this->source, $context["level"], "status", []) == 1)) {
                    // line 74
                    echo "                <li><a href=\"#/";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "path", []), "html", null, true);
                    echo "\"><i class=\"fa fa-circle-o\"></i> ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "name", []), "html", null, true);
                    echo "</a></li>
                ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "              </ul>
            </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rangelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "          </ul>
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
  \$.sidebarMenu(\$('.sidebar-menu'))
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
        return array (  145 => 79,  137 => 76,  125 => 74,  120 => 73,  113 => 69,  109 => 68,  105 => 66,  101 => 65,  35 => 1,);
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
  <link rel=\"stylesheet\" href=\"./css/base.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
  <script type=\"text/javascript\" src=\"/js/menu.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header\">
    <div class=\"layui-logo\" style=\"border-right: 0.1px solid #393d49;\">
      <img src=\"/images/logo.gif\" alt=\"\" style=\"width: 35px\">&emsp;管理后台
    </div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class=\"layui-nav layui-layout-left\">
      <li class=\"layui-nav-item\"><a href=\"\">控制台</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">商品管理</a></li>
      <li class=\"layui-nav-item\"><a href=\"\">用户</a></li>
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">其它系统</a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">邮件管理</a></dd>
          <dd><a href=\"\">消息管理</a></dd>
          <dd><a href=\"\">授权管理</a></dd>
        </dl>
      </li>
    </ul>
    <ul class=\"layui-nav layui-layout-right\">
      <li class=\"layui-nav-item\">
        <a href=\"javascript:;\">
          <img src=\"//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg\" class=\"layui-nav-img\">
          贤心
        </a>
        <dl class=\"layui-nav-child\">
          <dd><a href=\"\">基本资料</a></dd>
          <dd><a href=\"\">安全设置</a></dd>
        </dl>
      </li>
      <li class=\"layui-nav-item\"><a href=\"\">退出</a></li>
    </ul>
  </div>
  <div class=\"layui-side layui-bg-black\">
    <div class=\"layui-side-scroll\">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <aside class=\"main-sidebar\">
        <section class=\"sidebar\">
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\" id=\"menudom\">
            <li class=\"treeview active\">
              <a href=\"#/\">
                <i class=\"fa fa-dashboard\"></i> <span>仪表盘</span> <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 仪表盘 v1</a></li>
                <li><a href=\"#/power/range\"><i class=\"fa fa-circle-o\"></i> 权限范围</a></li>
              </ul>
            </li>
            {% for rangelist in rangelist %}
            <li class=\"treeview\">
              <a href=\"javascript:;\">
                <i class=\"{{ rangelist.icon }}\"></i>
                <span>{{ rangelist.name }}</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                {% for level in rangelist.level if level.status == 1 %}
                <li><a href=\"#/{{ level.path }}\"><i class=\"fa fa-circle-o\"></i> {{ level.name }}</a></li>
                {% endfor %}
              </ul>
            </li>
            {% endfor %}
          </ul>
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
  \$.sidebarMenu(\$('.sidebar-menu'))
</script>
</body>
</html>

", "admin/index.twig", "D:\\web\\wxuns\\resources\\views\\admin\\index.twig");
    }
}
