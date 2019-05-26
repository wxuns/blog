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

/* admin/article/website.twig */
class __TwigTemplate_06a0a38789be8bc8f3376c802bc9464b526c1524533b5eb5f708bbbd5b0357d7 extends \Twig_Template
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
        echo "<link href=\"https://cdn.bootcss.com/webuploader/0.1.1/webuploader.css\" rel=\"stylesheet\">
<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>文章</a>
      <a><cite>网站设置</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\" style=\"padding: 30px 0;\">
        <div class=\"layui-card-body\">
            <div class=\"layui-container\">
                <div class=\"layui-row\">
                    <div class=\"layui-col-md9\" style=\"border-right: 1px solid #e6e6e6;padding-right: 30px;\">
                        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 20px;\">
                            <legend>网站设置</legend>
                        </fieldset>
                        <form class=\"layui-form\">
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站标题</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"title\" autocomplete=\"off\" placeholder=\"请输入网站标题\" class=\"layui-input\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "title", [], "any", false, false, false, 25), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站描述</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"description\" autocomplete=\"off\" placeholder=\"请输入网站描述\" class=\"layui-input\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "description", [], "any", false, false, false, 31), "html", null, true);
        echo "\">
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站关键字</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"keywords\" autocomplete=\"off\" placeholder=\"请输入网站关键字\" class=\"layui-input\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["seo"] ?? null), "keywords", [], "any", false, false, false, 37), "html", null, true);
        echo "\">
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
        echo "\">
                            <div class=\"layui-form-item\">
                                <div class=\"layui-input-block\">
                                    <button class=\"layui-btn\" id=\"website\">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"layui-col-md3\" style=\"padding-left: 30px;\">
                        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 30px;\">
                            <legend>轮播图</legend>
                        </fieldset>

                        <div class=\"layui-upload\">
                            <div class=\"layui-upload-list\">
                                <table class=\"layui-table\">
                                    <thead>
                                    <tr><th>文件名</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr></thead>
                                    <tbody id=\"demoList\"></tbody>
                                </table>
                            </div>
                            <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                                <i class=\"layui-icon\">&#xe67c;</i>上传图片
                            </button>
                            <div id=\"uploader\" class=\"wu-example\">
                                <!--用来存放文件信息-->
                                <div id=\"thelist\" class=\"uploader-list\"></div>
                                <div class=\"btns\">
                                    <div id=\"picker\">选择文件</div>
                                    <button id=\"ctlBtn\" class=\"btn btn-default\">开始上传</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script src=\"https://cdn.bootcss.com/webuploader/0.1.1/webuploader.js\"></script>
<script>
    console.log(\$(\"#upload\"))
    // \$(\"#upload\").imageUpload({
    //     formAction: \"/upload\"
    // }).on(\"imageChanged\", function () {
    //     console.log(\"Changed the src\");
    // });
    \$('#website').click(function () {
        var title = \$('input[name=\"title\"]');
        var description = \$('input[name=\"description\"]');
        var keywords = \$('input[name=\"keywords\"]');
        if(title.val()&&description.val()&&keywords.val()){
            var d = {};
            var t = \$('form').serializeArray();
            \$.each(t, function() {
                d[this.name] = this.value;
            });
            \$.post('article/seo',d,function (data) {
                data = JSON.parse(data)
                layer.msg(data.msg)
            });
        }else{
            layer.msg('不能为空',{icon: 2,anim: 6})
        }

        return false;
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "admin/article/website.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 41,  79 => 37,  70 => 31,  61 => 25,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<link href=\"https://cdn.bootcss.com/webuploader/0.1.1/webuploader.css\" rel=\"stylesheet\">
<fieldset class=\"layui-elem-field wx-elem\">
    <div class=\"layui-field-box\">
    <span class=\"layui-breadcrumb\">
      <a href=\"#/\">首页</a>
      <a>文章</a>
      <a><cite>网站设置</cite></a>
    </span>
    </div>
</fieldset>

<div class=\"wx-body\">
    <div class=\"layui-card\" style=\"padding: 30px 0;\">
        <div class=\"layui-card-body\">
            <div class=\"layui-container\">
                <div class=\"layui-row\">
                    <div class=\"layui-col-md9\" style=\"border-right: 1px solid #e6e6e6;padding-right: 30px;\">
                        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 20px;\">
                            <legend>网站设置</legend>
                        </fieldset>
                        <form class=\"layui-form\">
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站标题</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"title\" autocomplete=\"off\" placeholder=\"请输入网站标题\" class=\"layui-input\" value=\"{{ seo.title }}\">
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站描述</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"description\" autocomplete=\"off\" placeholder=\"请输入网站描述\" class=\"layui-input\" value=\"{{ seo.description }}\">
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <label class=\"layui-form-label\">网站关键字</label>
                                <div class=\"layui-input-block\">
                                    <input type=\"text\" name=\"keywords\" autocomplete=\"off\" placeholder=\"请输入网站关键字\" class=\"layui-input\" value=\"{{ seo.keywords }}\">
                                </div>
                            </div>

                            <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
                            <div class=\"layui-form-item\">
                                <div class=\"layui-input-block\">
                                    <button class=\"layui-btn\" id=\"website\">保存</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class=\"layui-col-md3\" style=\"padding-left: 30px;\">
                        <fieldset class=\"layui-elem-field layui-field-title\" style=\"margin-top: 30px;\">
                            <legend>轮播图</legend>
                        </fieldset>

                        <div class=\"layui-upload\">
                            <div class=\"layui-upload-list\">
                                <table class=\"layui-table\">
                                    <thead>
                                    <tr><th>文件名</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr></thead>
                                    <tbody id=\"demoList\"></tbody>
                                </table>
                            </div>
                            <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                                <i class=\"layui-icon\">&#xe67c;</i>上传图片
                            </button>
                            <div id=\"uploader\" class=\"wu-example\">
                                <!--用来存放文件信息-->
                                <div id=\"thelist\" class=\"uploader-list\"></div>
                                <div class=\"btns\">
                                    <div id=\"picker\">选择文件</div>
                                    <button id=\"ctlBtn\" class=\"btn btn-default\">开始上传</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script src=\"https://cdn.bootcss.com/webuploader/0.1.1/webuploader.js\"></script>
<script>
    console.log(\$(\"#upload\"))
    // \$(\"#upload\").imageUpload({
    //     formAction: \"/upload\"
    // }).on(\"imageChanged\", function () {
    //     console.log(\"Changed the src\");
    // });
    \$('#website').click(function () {
        var title = \$('input[name=\"title\"]');
        var description = \$('input[name=\"description\"]');
        var keywords = \$('input[name=\"keywords\"]');
        if(title.val()&&description.val()&&keywords.val()){
            var d = {};
            var t = \$('form').serializeArray();
            \$.each(t, function() {
                d[this.name] = this.value;
            });
            \$.post('article/seo',d,function (data) {
                data = JSON.parse(data)
                layer.msg(data.msg)
            });
        }else{
            layer.msg('不能为空',{icon: 2,anim: 6})
        }

        return false;
    });
</script>
", "admin/article/website.twig", "D:\\web\\wxuns\\resources\\views\\admin\\article\\website.twig");
    }
}
