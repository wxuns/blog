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

/* admin/article/addarticle.twig */
class __TwigTemplate_813e05948fc2bcfe18e9947acfd75d85aaa8c21284c67832fe791a671314970e extends \Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />

<div class=\"wx-body\">
    <div class=\"layui-card\" style=\"margin-top: 10px\">
        <div class=\"layui-card-header wx-header\">
            <a href=\"/#/article/list\" class=\"layui-btn\">返回上一页</a>
        </div>
        <div class=\"layui-card-body\">
            <form class=\"layui-form\" action=\"\" style=\"margin: 30px 0px 0 0px;\" enctype=\"multipart/form-data\">

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">标题</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"title\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">分类</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"class_id\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"0\">北京</option>
                            <option value=\"1\">上海</option>
                            <option value=\"2\">广州</option>
                            <option value=\"3\">深圳</option>
                            <option value=\"4\">杭州</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">版权</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"tel\" name=\"copyright\" lay-verify=\"required\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">第三方来源</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"url\" lay-verify=\"email\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">关键字</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"keyword\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请用逗号隔开\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">内容</label>
                    <div class=\"layui-input-block\">
                        <div id=\"editormd\">
                            <textarea name=\"content\" style=\"display:none;\"></textarea>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
        echo "\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        var editor = editormd(\"editormd\", {
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            height:'80%',
            toolbarIcons : function() {
                // Or return editormd.toolbarModes[name]; // full, simple, mini
                // Using \"||\" set icons align right.
                return [\"undo\", \"redo\", \"|\", \"bold\", \"del\",\"italic\",\"quote\",\"ucwords\",\"uppercase\",\"lowercase\", \"|\",
                    \"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"|\",\"list-ul\",\"list-ol\",\"hr\", \"|\",
                    \"link\",\"reference-link\",\"image\",\"code\",\"preformatted-text\",\"code-block\",\"table\",\"datetime\",\"html-entities\",
                      \"||\", \"watch\", \"preview\", \"clear\",\"search\"]
            },
        });
        var form = layui.form;
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/article/addarticle.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 60,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />

<div class=\"wx-body\">
    <div class=\"layui-card\" style=\"margin-top: 10px\">
        <div class=\"layui-card-header wx-header\">
            <a href=\"/#/article/list\" class=\"layui-btn\">返回上一页</a>
        </div>
        <div class=\"layui-card-body\">
            <form class=\"layui-form\" action=\"\" style=\"margin: 30px 0px 0 0px;\" enctype=\"multipart/form-data\">

                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">标题</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"title\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">分类</label>
                    <div class=\"layui-input-inline\">
                        <select name=\"class_id\" lay-verify=\"required\">
                            <option value=\"\"></option>
                            <option value=\"0\">北京</option>
                            <option value=\"1\">上海</option>
                            <option value=\"2\">广州</option>
                            <option value=\"3\">深圳</option>
                            <option value=\"4\">杭州</option>
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">版权</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"tel\" name=\"copyright\" lay-verify=\"required\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">第三方来源</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"url\" lay-verify=\"email\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <label class=\"layui-form-label\">关键字</label>
                    <div class=\"layui-input-block\">
                        <input type=\"text\" name=\"keyword\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请用逗号隔开\" class=\"layui-input\">
                    </div>
                </div>
                <div class=\"layui-form-item layui-form-text\">
                    <label class=\"layui-form-label\">内容</label>
                    <div class=\"layui-input-block\">
                        <div id=\"editormd\">
                            <textarea name=\"content\" style=\"display:none;\"></textarea>
                        </div>
                    </div>
                </div>
                <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
                <div class=\"layui-form-item\">
                    <div class=\"layui-input-block\">
                        <button class=\"layui-btn\" lay-submit=\"\" lay-filter=\"demo1\">立即提交</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>

<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    \$(function() {
        var editor = editormd(\"editormd\", {
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            height:'80%',
            toolbarIcons : function() {
                // Or return editormd.toolbarModes[name]; // full, simple, mini
                // Using \"||\" set icons align right.
                return [\"undo\", \"redo\", \"|\", \"bold\", \"del\",\"italic\",\"quote\",\"ucwords\",\"uppercase\",\"lowercase\", \"|\",
                    \"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"|\",\"list-ul\",\"list-ol\",\"hr\", \"|\",
                    \"link\",\"reference-link\",\"image\",\"code\",\"preformatted-text\",\"code-block\",\"table\",\"datetime\",\"html-entities\",
                      \"||\", \"watch\", \"preview\", \"clear\",\"search\"]
            },
        });
        var form = layui.form;
        form.on('submit(demo1)', function(data){
            layer.alert(JSON.stringify(data.field), {
                title: '最终的提交信息'
            })
            return false;
        });
    });
</script>
", "admin/article/addarticle.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\addarticle.twig");
    }
}
