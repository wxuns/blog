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
class __TwigTemplate_27519fc4e438e9e722d6c1afae4b5d23ddc67c5b27d3a9033c96cb2a33163389 extends \Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>layui</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/layui/css/layui.css\">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
    <link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />
</head>
<body>
<style>
.layui-form select{display: inline}
</style>
<div class=\"wx-body\">
    <div class=\"layui-card-body\">
        <form class=\"layui-form\" action=\"\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "title", [], "any", false, false, false, 24), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">分类</label>
                <div class=\"layui-input-inline\">
                    <select name=\"class_id\" lay-verify=\"required\" style=\"display: none\">
                        <option value=\"\"></option>
                        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["class"]);
        foreach ($context['_seq'] as $context["_key"] => $context["class"]) {
            // line 33
            echo "                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 33), "html", null, true);
            echo "\" ";
            echo (((twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "class_id", [], "any", false, false, false, 33) == twig_get_attribute($this->env, $this->source, $context["class"], "id", [], "any", false, false, false, 33))) ? ("selected") : (""));
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["class"], "classname", [], "any", false, false, false, 33), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['class'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                    </select>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">版权</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"tel\" name=\"copyright\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "copyright", [], "any", false, false, false, 42), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">第三方来源</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"url\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "url", [], "any", false, false, false, 49), "html", null, true);
        echo "\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">关键字</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"keyword\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请用逗号隔开\" class=\"layui-input\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "keyword", [], "any", false, false, false, 57), "html", null, true);
        echo "\">
                </div>
            </div>
            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">内容</label>
                <div class=\"layui-input-block\">
                    <div id=\"editormd\">
                        <textarea name=\"content\" style=\"display:none;\">";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "content", [], "any", false, false, false, 64), "html", null, true);
        echo "</textarea>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 68
        echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
        echo "\">
            <div class=\"layui-form-item\">
                <button class=\"layui-btn\" lay-submit lay-filter=\"";
        // line 70
        echo ((($context["article"] ?? null)) ? ("edit") : ("add"));
        echo "\" style=\"margin-left:10%\">立即提交</button>
            </div>
        </form>
    </div>
</div>
<script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/layui/layui.all.js\"></script>
<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    var form = layui.form;
    \$(function() {
        var editor = editormd(\"editormd\", {
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            imageFormats   : [\"jpg\", \"jpeg\", \"gif\", \"png\", \"bmp\", \"webp\"],
            imageUploadURL : \"/uploadimg?type=article\",
            height:'500px',
            codeFold : true,
            syncScrolling : \"single\",
            tocm: true,
            toolbarIcons : function() {
                // Or return editormd.toolbarModes[name]; // full, simple, mini
                // Using \"||\" set icons align right.
                return [\"undo\", \"redo\", \"|\", \"bold\", \"del\",\"italic\",\"quote\",\"ucwords\",\"uppercase\",\"lowercase\", \"|\",
                    \"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"|\",\"list-ul\",\"list-ol\",\"hr\", \"|\",
                    \"link\",\"reference-link\",\"image\",\"code\",\"preformatted-text\",\"code-block\",\"table\",\"datetime\",\"html-entities\",
                      \"||\", \"watch\", \"preview\", \"clear\",\"search\",\"fullscreen\"]
            },
        });
    });
    form.on('submit(add)', function(data){
        fetch('/article/addarticle',{
            body:JSON.stringify(data.field),
            method:'POST'
        }).then(function(response) {
            return response.text();
        }).then(function (response) {
            response = JSON.parse(response);
            if (response.status){
                layer.msg(response.message)
            }else{
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.message,{icon:1})
                parent.layer.close(index);
            }
        });
        return false;
    });
    form.on('submit(edit)', function(data){
        fetch('/article/editarticleapi?id=";
        // line 119
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", [], "any", false, false, false, 119), "html", null, true);
        echo "',{
            body:JSON.stringify(data.field),
            method:'POST'
        }).then(function(response) {
            return response.text();
        }).then(function (response) {
            response = JSON.parse(response);
            if (response.status){
                layer.msg(response.message)
            }else{
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.message,{icon:1})
                parent.layer.close(index);
            }
        });
        return false;
    });
</script>
</body>
</html>
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
        return array (  192 => 119,  140 => 70,  135 => 68,  128 => 64,  118 => 57,  107 => 49,  97 => 42,  88 => 35,  75 => 33,  71 => 32,  60 => 24,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>layui</title>
    <meta name=\"renderer\" content=\"webkit\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"/layui/css/layui.css\">
    <!-- 注意：如果你直接复制所有代码到本地，上述css路径需要改成你本地的 -->
    <link rel=\"stylesheet\" href=\"/editor.md/css/editormd.min.css\" />
</head>
<body>
<style>
.layui-form select{display: inline}
</style>
<div class=\"wx-body\">
    <div class=\"layui-card-body\">
        <form class=\"layui-form\" action=\"\">

            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">标题</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"title\" lay-verify=\"required\" autocomplete=\"off\" placeholder=\"请输入标题\" class=\"layui-input\" value=\"{{ article.title }}\">
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">分类</label>
                <div class=\"layui-input-inline\">
                    <select name=\"class_id\" lay-verify=\"required\" style=\"display: none\">
                        <option value=\"\"></option>
                        {% for class in class %}
                        <option value=\"{{ class.id }}\" {{ article.class_id==class.id ? 'selected':''}}>{{ class.classname }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">版权</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"tel\" name=\"copyright\" placeholder=\"请输入版权\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ article.copyright }}\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                </div>
                <div class=\"layui-inline\">
                    <label class=\"layui-form-label\">第三方来源</label>
                    <div class=\"layui-input-inline\">
                        <input type=\"text\" name=\"url\" placeholder=\"请输入第三方来源\" autocomplete=\"off\" class=\"layui-input\" value=\"{{ article.url }}\">
                    </div>
                    <div class=\"layui-form-mid layui-word-aux\">非必填</div>
                </div>
            </div>
            <div class=\"layui-form-item\">
                <label class=\"layui-form-label\">关键字</label>
                <div class=\"layui-input-block\">
                    <input type=\"text\" name=\"keyword\" lay-verify=\"title\" autocomplete=\"off\" placeholder=\"请用逗号隔开\" class=\"layui-input\" value=\"{{ article.keyword }}\">
                </div>
            </div>
            <div class=\"layui-form-item layui-form-text\">
                <label class=\"layui-form-label\">内容</label>
                <div class=\"layui-input-block\">
                    <div id=\"editormd\">
                        <textarea name=\"content\" style=\"display:none;\">{{ article.content }}</textarea>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
            <div class=\"layui-form-item\">
                <button class=\"layui-btn\" lay-submit lay-filter=\"{{ article?'edit':'add' }}\" style=\"margin-left:10%\">立即提交</button>
            </div>
        </form>
    </div>
</div>
<script src=\"https://cdn.bootcss.com/jquery/3.4.0/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/layui/layui.all.js\"></script>
<script src=\"/editor.md/editormd.min.js\"></script>
<script type=\"text/javascript\">
    var form = layui.form;
    \$(function() {
        var editor = editormd(\"editormd\", {
            path : \"/editor.md/lib/\", // Autoload modules mode, codemirror, marked... dependents libs path
            imageUpload       : true,
            imageFormats   : [\"jpg\", \"jpeg\", \"gif\", \"png\", \"bmp\", \"webp\"],
            imageUploadURL : \"/uploadimg?type=article\",
            height:'500px',
            codeFold : true,
            syncScrolling : \"single\",
            tocm: true,
            toolbarIcons : function() {
                // Or return editormd.toolbarModes[name]; // full, simple, mini
                // Using \"||\" set icons align right.
                return [\"undo\", \"redo\", \"|\", \"bold\", \"del\",\"italic\",\"quote\",\"ucwords\",\"uppercase\",\"lowercase\", \"|\",
                    \"h1\",\"h2\",\"h3\",\"h4\",\"h5\",\"h6\",\"|\",\"list-ul\",\"list-ol\",\"hr\", \"|\",
                    \"link\",\"reference-link\",\"image\",\"code\",\"preformatted-text\",\"code-block\",\"table\",\"datetime\",\"html-entities\",
                      \"||\", \"watch\", \"preview\", \"clear\",\"search\",\"fullscreen\"]
            },
        });
    });
    form.on('submit(add)', function(data){
        fetch('/article/addarticle',{
            body:JSON.stringify(data.field),
            method:'POST'
        }).then(function(response) {
            return response.text();
        }).then(function (response) {
            response = JSON.parse(response);
            if (response.status){
                layer.msg(response.message)
            }else{
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.message,{icon:1})
                parent.layer.close(index);
            }
        });
        return false;
    });
    form.on('submit(edit)', function(data){
        fetch('/article/editarticleapi?id={{ article.id }}',{
            body:JSON.stringify(data.field),
            method:'POST'
        }).then(function(response) {
            return response.text();
        }).then(function (response) {
            response = JSON.parse(response);
            if (response.status){
                layer.msg(response.message)
            }else{
                var index = parent.layer.getFrameIndex(window.name);
                parent.layer.msg(response.message,{icon:1})
                parent.layer.close(index);
            }
        });
        return false;
    });
</script>
</body>
</html>
", "admin/article/addarticle.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\addarticle.twig");
    }
}
