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

/* admin/test.twig */
class __TwigTemplate_19e54999fe1ee03dbb939b8be8e015e3f088d38bab10bd4ed1f94aa2b14164bf extends \Twig_Template
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
        echo "<fieldset class=\"layui-elem-field\" style=\"margin-left: 0px;\">
  <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a><cite>导航元素</cite></a>
    </span>
  </div>
</fieldset>

<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
layer.msg(321321)
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/test.twig";
    }

    public function getDebugInfo()
    {
        return array (  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field\" style=\"margin-left: 0px;\">
  <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a><cite>导航元素</cite></a>
    </span>
  </div>
</fieldset>

<!-- 注意：如果你直接复制所有代码到本地，上述js路径需要改成你本地的 -->
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
layer.msg(321321)
</script>
", "admin/test.twig", "D:\\web\\wxuns\\resources\\views\\admin\\test.twig");
    }
}
