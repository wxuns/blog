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
                    <th>图标</th>
                    <th>是否显示</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rangelist"]);
        foreach ($context['_seq'] as $context["key"] => $context["rangelist"]) {
            // line 35
            echo "                <tr>
                    <td style=\"width: 8%;\">
                        ";
            // line 37
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [])) {
                // line 38
                echo "                        <i class=\"layui-icon layui-icon-right\" style=\"cursor:pointer;\" onclick=\"down(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
                echo ",this)\"></i>
                        ";
            }
            // line 40
            echo "                         ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "name", []), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "path", []), "html", null, true);
            echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "icon", []), "html", null, true);
            echo "\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus(";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo ")\" id=\"changestatus";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" ";
            // line 46
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "status", [])) {
                echo "checked=\"\"";
            }
            echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", []));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [])) {
                    // line 57
                    echo "                <tr class=\"level";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", []), "html", null, true);
                    echo "\" hidden>
                    <td style=\"width: 8%;\">&emsp;&emsp;";
                    // line 58
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 59
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "name", []), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "path", []), "html", null, true);
                    echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "icon", []), "html", null, true);
                    echo "\"></i></td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus(";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo ")\" id=\"changestatus";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo "\">
                            <input type=\"checkbox\" ";
                    // line 64
                    if (twig_get_attribute($this->env, $this->source, $context["level"], "status", [])) {
                        echo "checked=\"\"";
                    }
                    echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
                    // line 69
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", []), "html", null, true);
                    echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
                    // line 70
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
            // line 75
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rangelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "                </tbody>
            </table>
        </div>
    </div>
</div>

<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script>
    var form = layui.form;
    var status = '';
    \$('#add').click(function () {
        layer.open({
            title: '添加权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/addrange',
            end:function () {
                var route = new Router();
                route.refresh()
            }
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
                var route = new Router();
                route.refresh()
            }
        });
    }
    del = function (id) {
        layer.confirm('删除操作不可逆，确定删除？', {
            title:'提示信息'
            ,btn: ['确定','取消'] //按钮
            ,icon: 2
        }, function(){
            fetch('power/delrange?id='+id,{
                method: 'GET'
            }).then(function(response) {
                return response.text();
            }).then(function(response) {
                response = JSON.parse(response)
                if(response.status == 1){
                    layer.msg(response.msg, {icon: 1});
                    var route = new Router();
                    route.refresh()
                }
                return;
            });
        });
    }
    changestatus = function (id) {
        var status = \$('#changestatus'+id+'>.layui-unselect>em').html() == '是'?1:0
        fetch('power/changestatus?id='+id+'&status='+status,{
            method: 'GET'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                layer.msg(response.msg, {icon: 1});
                var route = new Router();
                route.refresh()
            }
            return;
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
        return array (  196 => 76,  190 => 75,  178 => 70,  174 => 69,  164 => 64,  158 => 63,  153 => 61,  149 => 60,  145 => 59,  141 => 58,  136 => 57,  131 => 56,  124 => 52,  120 => 51,  110 => 46,  104 => 45,  99 => 43,  95 => 42,  91 => 41,  86 => 40,  80 => 38,  78 => 37,  74 => 35,  70 => 34,  35 => 1,);
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
                    <th>图标</th>
                    <th>是否显示</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                {% for key,rangelist in rangelist %}
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
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus({{ rangelist.id }})\" id=\"changestatus{{ rangelist.id }}\">
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
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus({{ level.id }})\" id=\"changestatus{{ level.id }}\">
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
    var form = layui.form;
    var status = '';
    \$('#add').click(function () {
        layer.open({
            title: '添加权限',
            type: 2,
            area: ['700px', '450px'],
            fixed: false, //不固定
            content: 'power/addrange',
            end:function () {
                var route = new Router();
                route.refresh()
            }
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
                var route = new Router();
                route.refresh()
            }
        });
    }
    del = function (id) {
        layer.confirm('删除操作不可逆，确定删除？', {
            title:'提示信息'
            ,btn: ['确定','取消'] //按钮
            ,icon: 2
        }, function(){
            fetch('power/delrange?id='+id,{
                method: 'GET'
            }).then(function(response) {
                return response.text();
            }).then(function(response) {
                response = JSON.parse(response)
                if(response.status == 1){
                    layer.msg(response.msg, {icon: 1});
                    var route = new Router();
                    route.refresh()
                }
                return;
            });
        });
    }
    changestatus = function (id) {
        var status = \$('#changestatus'+id+'>.layui-unselect>em').html() == '是'?1:0
        fetch('power/changestatus?id='+id+'&status='+status,{
            method: 'GET'
        }).then(function(response) {
            return response.text();
        }).then(function(response) {
            response = JSON.parse(response)
            if(response.status == 1){
                layer.msg(response.msg, {icon: 1});
                var route = new Router();
                route.refresh()
            }
            return;
        });
    }
</script>
", "admin/range.twig", "D:\\web\\wxuns\\resources\\views\\admin\\range.twig");
    }
}
