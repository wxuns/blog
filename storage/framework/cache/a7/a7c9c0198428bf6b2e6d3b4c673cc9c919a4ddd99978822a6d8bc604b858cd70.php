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

/* admin/range.twig */
class __TwigTemplate_faa47e82ef7f6e709579aaacb052452119b4831e243a307f585afafd3267a7f3 extends \Twig_Template
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
        echo "<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a href=\"#/power/range\"><cite>权限管理</cite></a>
    </span>
    </div>
</fieldset>
<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
            <button class=\"layui-btn\">删除</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
        </div>
        <div class=\"layui-card-body\">
            <table class=\"layui-table\">
                <colgroup>
                    <col width=\"150\">
                    <col width=\"150\">
                    <col width=\"200\">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>权限名称</th>
                    <th>权限路径</th>
                    <th class=\"wx-center\">图标</th>
                    <th class=\"wx-center\">是否显示</th>
                    <th class=\"wx-center\">操作</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rangelist"]);
        foreach ($context['_seq'] as $context["_key"] => $context["rangelist"]) {
            // line 36
            echo "                <tr>
                    <td style=\"width: 8%;\">
                        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [])) {
                // line 39
                echo "                        <i class=\"layui-icon layui-icon-right\" style=\"cursor:pointer;\" onclick=\"down(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
                echo ",this)\"></i>
                        ";
            }
            // line 41
            echo "                         ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "name", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "path", []), "html", null, true);
            echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "icon", []), "html", null, true);
            echo "\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\">
                            <input type=\"checkbox\" ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "status", [])) {
                echo "checked=\"\"";
            }
            echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", []));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [])) {
                    // line 58
                    echo "                <tr class=\"level";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
                    echo "\" hidden>
                    <td style=\"width: 8%;\">&emsp;&emsp;";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "name", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "path", []), "html", null, true);
                    echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "icon", []), "html", null, true);
                    echo "\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\">
                            <input type=\"checkbox\" ";
                    // line 65
                    if (twig_get_attribute($this->env, $this->source, $context["level"], "status", [])) {
                        echo "checked=\"\"";
                    }
                    echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
                    // line 70
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
                    // line 71
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo ")\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rangelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script>
    \$('#add').click(function () {
        layer.open({
            title: '添加权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/addrange'
        });
    });
    down = function (id,that) {
        if (\$('.level'+id).is(':hidden')) {
            \$('.level'+id).show();
            \$(that).removeClass('layui-icon-right')
            \$(that).addClass('layui-icon-down')
        }else {
            \$('.level'+id).hide();
            \$(that).addClass('layui-icon-right')
            \$(that).removeClass('layui-icon-down')
        }
    }
    edit = function (id) {
        layer.open({
            title: '修改权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/editrange?id='+id,
            end:function () {
                window.location.href = '#/power/range'
            }
        });
    }
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/range.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 77,  181 => 76,  169 => 71,  165 => 70,  155 => 65,  149 => 62,  145 => 61,  141 => 60,  137 => 59,  132 => 58,  127 => 57,  120 => 53,  116 => 52,  106 => 47,  100 => 44,  96 => 43,  92 => 42,  87 => 41,  81 => 39,  79 => 38,  75 => 36,  71 => 35,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a href=\"#/power/range\"><cite>权限管理</cite></a>
    </span>
    </div>
</fieldset>
<div class=\"wx-body\">
    <div class=\"layui-card\">
        <div class=\"layui-card-header wx-header\">
            <button class=\"layui-btn\">删除</button>
            <button class=\"layui-btn\" id=\"add\">添加</button>
        </div>
        <div class=\"layui-card-body\">
            <table class=\"layui-table\">
                <colgroup>
                    <col width=\"150\">
                    <col width=\"150\">
                    <col width=\"200\">
                    <col>
                </colgroup>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>权限名称</th>
                    <th>权限路径</th>
                    <th class=\"wx-center\">图标</th>
                    <th class=\"wx-center\">是否显示</th>
                    <th class=\"wx-center\">操作</th>
                </tr>
                </thead>
                <tbody>
                {% for rangelist in rangelist %}
                <tr>
                    <td style=\"width: 8%;\">
                        {% if(rangelist.level) %}
                        <i class=\"layui-icon layui-icon-right\" style=\"cursor:pointer;\" onclick=\"down({{ rangelist.id }},this)\"></i>
                        {% endif %}
                         {{ rangelist.id }}</td>
                    <td>{{ rangelist.name }}</td>
                    <td>{{ rangelist.path }}</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"{{ rangelist.icon }}\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\">
                            <input type=\"checkbox\" {% if(rangelist.status) %}checked=\"\"{% endif %} name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit({{ rangelist.id }})\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del({{ rangelist.id }})\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    {% for level in rangelist.level if rangelist.level %}
                <tr class=\"level{{ rangelist.id }}\" hidden>
                    <td style=\"width: 8%;\">&emsp;&emsp;{{ level.id }}</td>
                    <td>{{ level.name }}</td>
                    <td>{{ level.path }}</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"{{ level.icon }}\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\">
                            <input type=\"checkbox\" {% if(level.status) %}checked=\"\"{% endif %} name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit({{ level.id }})\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del({{ level.id }})\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    {% endfor %}
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script>
    \$('#add').click(function () {
        layer.open({
            title: '添加权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/addrange'
        });
    });
    down = function (id,that) {
        if (\$('.level'+id).is(':hidden')) {
            \$('.level'+id).show();
            \$(that).removeClass('layui-icon-right')
            \$(that).addClass('layui-icon-down')
        }else {
            \$('.level'+id).hide();
            \$(that).addClass('layui-icon-right')
            \$(that).removeClass('layui-icon-down')
        }
    }
    edit = function (id) {
        layer.open({
            title: '修改权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/editrange?id='+id,
            end:function () {
                window.location.href = '#/power/range'
            }
        });
    }
</script>
", "admin/range.twig", "D:\\web\\wxuns\\resources\\views\\admin\\range.twig");
    }
}
