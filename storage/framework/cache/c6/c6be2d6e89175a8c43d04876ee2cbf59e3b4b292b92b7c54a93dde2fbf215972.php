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
                            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["class"]);
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 23
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 23), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "classname", [], "any", false, false, false, 23), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">版权</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"tel\" name=\"copyright\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">第三方来源</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"url\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\">
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
        // line 58
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
            imageFormats   : [\"jpg\", \"jpeg\", \"gif\", \"png\", \"bmp\", \"webp\"],
            imageUploadURL : \"uploadimg?type=article\",
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
            fetch('',);
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
        return array (  108 => 58,  73 => 25,  62 => 23,  58 => 22,  35 => 1,);
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
                            {% for class in class %}
                            <option value=\"{{ class.id }}\">{{ class.classname }}</option>
                            {% endfor %}
                        </select>
                    </div>
                </div>
                <div class=\"layui-form-item\">
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">版权</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"tel\" name=\"copyright\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\">
                        </div>
                        <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                    </div>
                    <div class=\"layui-inline\">
                        <label class=\"layui-form-label\">第三方来源</label>
                        <div class=\"layui-input-inline\">
                            <input type=\"text\" name=\"url\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\">
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
            imageFormats   : [\"jpg\", \"jpeg\", \"gif\", \"png\", \"bmp\", \"webp\"],
            imageUploadURL : \"uploadimg?type=article\",
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
            fetch('',);
            return false;
        });
    });
</script>
", "admin/article/addarticle.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\addarticle.twig");
    }
}
