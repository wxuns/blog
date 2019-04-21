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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"./css/base.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header\">
    <div class=\"layui-logo\">管理后台</div>
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
      <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
        <li class=\"layui-nav-item layui-nav-itemed\">
          <a class=\"\" href=\"javascript:;\">用户</a>
          <dl class=\"layui-nav-child\">
            <dd><a href=\"#/power/range\">权限范围</a></dd>
            <dd><a href=\"javascript:;\">列表二</a></dd>
            <dd><a href=\"javascript:;\">列表三</a></dd>
            <dd><a href=\"\">超链接</a></dd>
          </dl>
        </li>
        <li class=\"layui-nav-item\">
          <a href=\"javascript:;\">解决方案</a>
          <dl class=\"layui-nav-child\">
            <dd><a href=\"javascript:;\">列表一</a></dd>
            <dd><a href=\"javascript:;\">列表二</a></dd>
            <dd><a href=\"\">超链接</a></dd>
          </dl>
        </li>
        <li class=\"layui-nav-item\"><a href=\"\">云市场</a></li>
        <li class=\"layui-nav-item\"><a href=\"\">发布商品</a></li>
      </ul>
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

</body>
</html>

";
    }

    public function getTemplateName()
    {
        return "admin/index.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
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
  <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"./css/base.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
</head>
<body class=\"layui-layout-body\">
<div class=\"layui-layout layui-layout-admin\">
  <div class=\"layui-header\">
    <div class=\"layui-logo\">管理后台</div>
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
      <ul class=\"layui-nav layui-nav-tree\"  lay-filter=\"test\">
        <li class=\"layui-nav-item layui-nav-itemed\">
          <a class=\"\" href=\"javascript:;\">用户</a>
          <dl class=\"layui-nav-child\">
            <dd><a href=\"#/power/range\">权限范围</a></dd>
            <dd><a href=\"javascript:;\">列表二</a></dd>
            <dd><a href=\"javascript:;\">列表三</a></dd>
            <dd><a href=\"\">超链接</a></dd>
          </dl>
        </li>
        <li class=\"layui-nav-item\">
          <a href=\"javascript:;\">解决方案</a>
          <dl class=\"layui-nav-child\">
            <dd><a href=\"javascript:;\">列表一</a></dd>
            <dd><a href=\"javascript:;\">列表二</a></dd>
            <dd><a href=\"\">超链接</a></dd>
          </dl>
        </li>
        <li class=\"layui-nav-item\"><a href=\"\">云市场</a></li>
        <li class=\"layui-nav-item\"><a href=\"\">发布商品</a></li>
      </ul>
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

</body>
</html>

", "admin/index.twig", "D:\\web\\wxuns\\resources\\views\\admin\\index.twig");
    }
}
