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
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\">
            <li class=\"treeview active\">
              <a href=\"#/\">
                <i class=\"fa fa-dashboard\"></i> <span>仪表盘</span> <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 仪表盘 v1</a></li>
                <li><a href=\"#/power/range\"><i class=\"fa fa-circle-o\"></i> 权限范围</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-files-o\"></i>
                <span>布局选项</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 顶部导航</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 盒子布局</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 固定布局</a></li>
                <li class=\"\"><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 折叠侧边栏</a>
                </li>
              </ul>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-th\"></i> <span>窗口小部件</span>
                <small class=\"label pull-right label-info\">新的</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>图表</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-laptop\"></i>
                <span>UI 元素</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一般</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Icons图标</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 按钮</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 滑块</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 时间表</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 模态框</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-edit\"></i> <span>表单</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一般表单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 高级表单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 可编辑表单</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-table\"></i> <span>表格</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 简单表格</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 时间表格</a></li>
              </ul>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-calendar\"></i> <span>日历</span>
                <small class=\"label pull-right label-danger\">3</small>
              </a>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-envelope\"></i> <span>邮箱</span>
                <small class=\"label pull-right label-warning\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-folder\"></i> <span>实例</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 清单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 简况</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 登录</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 注册</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 锁频</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 404 错误</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 500 错误</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 空白页面</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 自适应页面</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-share\"></i> <span>多级</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级</a></li>
                <li>
                  <a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级 <i class=\"fa fa-angle-right pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 二级</a></li>
                    <li>
                      <a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 二级 <i class=\"fa fa-angle-right pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 三级</a></li>
                        <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 三级</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级</a></li>
              </ul>
            </li>
            <li><a href=\"#/\"><i class=\"fa fa-book\"></i> <span>文档</span></a></li>
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
  <link href=\"./css/font-awesome.4.6.0.css\" rel=\"stylesheet\" media=\"screen\">
  <link rel=\"stylesheet\" href=\"./css/sidebar-menu.css\">
  <link rel=\"stylesheet\" type=\"text/css\" href=\"./layui/css/layui.css\">
  <link rel=\"stylesheet\" href=\"./css/base.css\">
  <script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
  <script type=\"text/javascript\" src=\"/js/base.js\"></script>
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
          <ul class=\"sidebar-menu layui-nav layui-nav-tree site-demo-nav\">
            <li class=\"treeview active\">
              <a href=\"#/\">
                <i class=\"fa fa-dashboard\"></i> <span>仪表盘</span> <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu menu-open\" style=\"display: block;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 仪表盘 v1</a></li>
                <li><a href=\"#/power/range\"><i class=\"fa fa-circle-o\"></i> 权限范围</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-files-o\"></i>
                <span>布局选项</span>
                <span class=\"label label-primary pull-right\">4</span>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 顶部导航</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 盒子布局</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 固定布局</a></li>
                <li class=\"\"><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 折叠侧边栏</a>
                </li>
              </ul>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-th\"></i> <span>窗口小部件</span>
                <small class=\"label pull-right label-info\">新的</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-pie-chart\"></i>
                <span>图表</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> ChartJS</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Morris</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Flot</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Inline charts</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-laptop\"></i>
                <span>UI 元素</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一般</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> Icons图标</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 按钮</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 滑块</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 时间表</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 模态框</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-edit\"></i> <span>表单</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一般表单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 高级表单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 可编辑表单</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-table\"></i> <span>表格</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\" style=\"display: none;\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 简单表格</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 时间表格</a></li>
              </ul>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-calendar\"></i> <span>日历</span>
                <small class=\"label pull-right label-danger\">3</small>
              </a>
            </li>
            <li>
              <a href=\"#/\">
                <i class=\"fa fa-envelope\"></i> <span>邮箱</span>
                <small class=\"label pull-right label-warning\">12</small>
              </a>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-folder\"></i> <span>实例</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 清单</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 简况</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 登录</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 注册</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 锁频</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 404 错误</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 500 错误</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 空白页面</a></li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 自适应页面</a></li>
              </ul>
            </li>
            <li class=\"treeview\">
              <a href=\"#/\">
                <i class=\"fa fa-share\"></i> <span>多级</span>
                <i class=\"fa fa-angle-right pull-right\"></i>
              </a>
              <ul class=\"treeview-menu\">
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级</a></li>
                <li>
                  <a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级 <i class=\"fa fa-angle-right pull-right\"></i></a>
                  <ul class=\"treeview-menu\">
                    <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 二级</a></li>
                    <li>
                      <a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 二级 <i class=\"fa fa-angle-right pull-right\"></i></a>
                      <ul class=\"treeview-menu\">
                        <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 三级</a></li>
                        <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 三级</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li><a href=\"#/\"><i class=\"fa fa-circle-o\"></i> 一级</a></li>
              </ul>
            </li>
            <li><a href=\"#/\"><i class=\"fa fa-book\"></i> <span>文档</span></a></li>
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
