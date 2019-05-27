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
                                <div class=\"layui-carousel\" id=\"test1\">
                                    <div carousel-item>
                                        <div>条目1</div>
                                        <div>条目2</div>
                                        <div>条目3</div>
                                        <div>条目4</div>
                                        <div>条目5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <input type=\"text\" name=\"title\" placeholder=\"请输入广告标题\" class=\"layui-input\" id=\"posttitle\">
                                <input type=\"text\" name=\"link\" placeholder=\"请输入广告链接\" class=\"layui-input\" id=\"postlink\">
                            </div>
                            <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                                <i class=\"layui-icon\">&#xe67c;</i>上传图片
                            </button>
                            <input type=\"file\" name=\"poster\" id=\"poster\" hidden>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
    var carousel = layui.carousel;
    //建造实例
    carousel.render({
        elem: '#test1'
        ,width: '100%' //设置容器宽度
        ,height:'150px'
        ,arrow: 'hover' //始终显示箭头
        //,anim: 'updown' //切换动画方式
    });
    //触发文件上传按钮
    var poster = \$('#poster');
    \$('#upload').click(function () {
        poster.trigger('click');
    });
    //上传文件
    poster.change(function () {
        var form = new FormData();
        form.append('pic',poster[0].files[0]);
        form.append('title',\$('#posttitle').val());
        form.append('link',\$('#postlink').val());
        \$.ajax({
            url:'/article/poster?type=poster',
            type:'post',
            data:form,
            cache: false,
            processData: false,
            contentType: false,
            success : function (e)
            {
            },
            error:function(xhr){alert(xhr.responseText)}
        })
    });
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
                                <div class=\"layui-carousel\" id=\"test1\">
                                    <div carousel-item>
                                        <div>条目1</div>
                                        <div>条目2</div>
                                        <div>条目3</div>
                                        <div>条目4</div>
                                        <div>条目5</div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"layui-form-item\">
                                <input type=\"text\" name=\"title\" placeholder=\"请输入广告标题\" class=\"layui-input\" id=\"posttitle\">
                                <input type=\"text\" name=\"link\" placeholder=\"请输入广告链接\" class=\"layui-input\" id=\"postlink\">
                            </div>
                            <button type=\"button\" class=\"layui-btn\" id=\"upload\">
                                <i class=\"layui-icon\">&#xe67c;</i>上传图片
                            </button>
                            <input type=\"file\" name=\"poster\" id=\"poster\" hidden>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type=\"text/javascript\" src=\"./layui/layui.all.js\"></script>
<script>
    var carousel = layui.carousel;
    //建造实例
    carousel.render({
        elem: '#test1'
        ,width: '100%' //设置容器宽度
        ,height:'150px'
        ,arrow: 'hover' //始终显示箭头
        //,anim: 'updown' //切换动画方式
    });
    //触发文件上传按钮
    var poster = \$('#poster');
    \$('#upload').click(function () {
        poster.trigger('click');
    });
    //上传文件
    poster.change(function () {
        var form = new FormData();
        form.append('pic',poster[0].files[0]);
        form.append('title',\$('#posttitle').val());
        form.append('link',\$('#postlink').val());
        \$.ajax({
            url:'/article/poster?type=poster',
            type:'post',
            data:form,
            cache: false,
            processData: false,
            contentType: false,
            success : function (e)
            {
            },
            error:function(xhr){alert(xhr.responseText)}
        })
    });
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
