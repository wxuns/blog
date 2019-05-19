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
class __TwigTemplate_5eb266df98f3ada2e05cbf9af55bb930a9f25f7f9a2fc778e89ed44cc84ba9ce extends \Twig_Template
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
      <a><cite>权限管理</cite></a>
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
                    <th>访问权限</th>
                    <th>是否显示</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["rangelist"]);
        foreach ($context['_seq'] as $context["key"] => $context["rangelist"]) {
            // line 36
            echo "                <tr>
                    <td style=\"width: 8%;\">
                        ";
            // line 38
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [], "any", false, false, false, 38)) {
                // line 39
                echo "                        <i class=\"layui-icon layui-icon-right\" style=\"cursor:pointer;\" onclick=\"down(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 39), "html", null, true);
                echo ",this)\"></i>
                        ";
            }
            // line 41
            echo "                         ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                    <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "name", [], "any", false, false, false, 42), "html", null, true);
            echo "</td>
                    <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "path", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "icon", [], "any", false, false, false, 44), "html", null, true);
            echo "\"></i></td>
                    <td style=\"width: 80px;text-align: center\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "rolename", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus(";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo ")\" id=\"changestatus";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 47), "html", null, true);
            echo "\">
                            <input type=\"checkbox\" ";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "status", [], "any", false, false, false, 48)) {
                echo "checked=\"\"";
            }
            echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 54), "html", null, true);
            echo ")\"><i class=\"layui-icon\"></i></button>
                        </div>
                    </td>
                </tr>
                    ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [], "any", false, false, false, 58));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (twig_get_attribute($this->env, $this->source, $context["rangelist"], "level", [], "any", false, false, false, 58)) {
                    // line 59
                    echo "                <tr class=\"level";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "id", [], "any", false, false, false, 59), "html", null, true);
                    echo "\" hidden>
                    <td style=\"width: 8%;\">&emsp;&emsp;";
                    // line 60
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", [], "any", false, false, false, 60), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 61
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "name", [], "any", false, false, false, 61), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 62
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "path", [], "any", false, false, false, 62), "html", null, true);
                    echo "</td>
                    <td style=\"width: 30px;text-align: center\"><i class=\"";
                    // line 63
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "icon", [], "any", false, false, false, 63), "html", null, true);
                    echo "\"></i></td>
                    <td style=\"width: 80px;text-align: center\">";
                    // line 64
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rangelist"], "rolename", [], "any", false, false, false, 64), "html", null, true);
                    echo "</td>
                    <td style=\"width: 10%;text-align: center\">
                        <form class=\"layui-form\" action=\"\" onclick=\"changestatus(";
                    // line 66
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo ")\" id=\"changestatus";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", [], "any", false, false, false, 66), "html", null, true);
                    echo "\">
                            <input type=\"checkbox\" ";
                    // line 67
                    if (twig_get_attribute($this->env, $this->source, $context["level"], "status", [], "any", false, false, false, 67)) {
                        echo "checked=\"\"";
                    }
                    echo " name=\"open\" lay-skin=\"switch\" lay-filter=\"switchTest\" lay-text=\"是|否\">
                        </form>
                    </td>
                    <td style=\"width: 15%;text-align: center\">
                        <div class=\"layui-btn-group\">
                            <button class=\"layui-btn layui-btn-sm\" onclick=\"edit(";
                    // line 72
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", [], "any", false, false, false, 72), "html", null, true);
                    echo ")\"><i class=\"layui-icon\"></i></button>
                            <button class=\"layui-btn layui-btn-sm layui-btn-danger\" onclick=\"del(";
                    // line 73
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["level"], "id", [], "any", false, false, false, 73), "html", null, true);
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
            // line 78
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['rangelist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
            area: ['600px', '500px'],
            fixed: false, //不固定
            content: 'power/addrange',
            end:function () {
                var route = new Router();
                route.refresh();
                var menu = new Menu();
                menu.relMenu();
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
            area: ['600px', '500px'],
            fixed: false, //不固定
            content: 'power/editrange?id='+id,
            end:function () {
                var route = new Router();
                route.refresh()
                var menu = new Menu();
                menu.relMenu();
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
                    var menu = new Menu();
                    menu.relMenu();
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
                var menu = new Menu();
                menu.relMenu();
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
        return array (  205 => 79,  199 => 78,  187 => 73,  183 => 72,  173 => 67,  167 => 66,  162 => 64,  158 => 63,  154 => 62,  150 => 61,  146 => 60,  141 => 59,  136 => 58,  129 => 54,  125 => 53,  115 => 48,  109 => 47,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  87 => 41,  81 => 39,  79 => 38,  75 => 36,  71 => 35,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>用户</a>
      <a><cite>权限管理</cite></a>
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
                    <th>访问权限</th>
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
                    <td style=\"width: 80px;text-align: center\">{{ rangelist.rolename }}</td>
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
                    <td style=\"width: 80px;text-align: center\">{{ rangelist.rolename }}</td>
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
            area: ['600px', '500px'],
            fixed: false, //不固定
            content: 'power/addrange',
            end:function () {
                var route = new Router();
                route.refresh();
                var menu = new Menu();
                menu.relMenu();
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
            area: ['600px', '500px'],
            fixed: false, //不固定
            content: 'power/editrange?id='+id,
            end:function () {
                var route = new Router();
                route.refresh()
                var menu = new Menu();
                menu.relMenu();
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
                    var menu = new Menu();
                    menu.relMenu();
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
                var menu = new Menu();
                menu.relMenu();
            }
            return;
        });
    }
</script>
", "admin/range.twig", "D:\\web\\wxuns\\resources\\views\\admin\\range.twig");
    }
}
