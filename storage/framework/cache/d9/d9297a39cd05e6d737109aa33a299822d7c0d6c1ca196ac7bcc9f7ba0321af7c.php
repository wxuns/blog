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

/* index/index.twig */
class __TwigTemplate_0f47820e56e5a363f2fb0bce8a9cec7f83b4012f45032296fe42abe26595de6f extends \Twig_Template
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
        echo "<!doctype html>
<html>
<head>
    <meta charset=\"gbk\">
    <title>文讯博客 - 因为热爱</title>
    <meta name=\"keywords\" content=\"个人博客,李志旭个人博客,个人博客模板,文讯博客,李志旭\" />
    <meta name=\"description\" content=\"文讯博客，技术类文章分享，分享个人收集的有趣文章，分享个人学习使用技巧。\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\"/>
    <link href=\"/css/yyui.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/css/base.css\" rel=\"stylesheet\">
    <link href=\"/css/index.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.bootcss.com/weui/2.0.0/style/weui.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//at.alicdn.com/t/font_1137992_jfc6jcnc29h.css\">
    <link href=\"https://lib.baomitu.com/Swiper/4.5.0/css/swiper.min.css\" rel=\"stylesheet\">
    <script src=\"https://lib.baomitu.com/Swiper/4.5.0/js/swiper.min.js\"></script>
    <script src=\"/js/hc-sticky.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"/js/modernizr.js\"></script>
    <![endif]-->
</head>
<body>
<header id=\"header\">
    <div class=\"toolbar\" style=\"border-top:#d11a2d 1.5px solid;\">
        <div class=\"clearfix toolbar-inner\">
            <div class=\"quicklink\">
                <ul id=\"chinaz_website_links\" class=\"accesslink\">
                    <li>
                        <a href=\"\" target=\"_blank\">
                            <span><i class=\"iconfont icon-fenlei\"></i> 文讯小店</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"userbar\">
                ";
        // line 38
        if (($context["user"] ?? null)) {
            // line 39
            echo "                    <div class=\"user-m\">
                        <a href=\"javascript:;\" target=\"_top\" title=\"提醒\"><i class=\"iconfont icon-remind\"></i></a>
                        <a href=\"javascript:;\">
                            <img src=\"";
            // line 42
            ((twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pic", [], "any", false, false, false, 42)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "pic", [], "any", false, false, false, 42), "html", null, true))) : (print ("/images/tx.jpeg")));
            echo "\" alt=\"\">
                            <span>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "nick", [], "any", false, false, false, 43), "html", null, true);
            echo "</span>
                        </a>
                    </div>
                ";
        } else {
            // line 47
            echo "                <span>快捷登录：</span>
                <a href=\"#\" target=\"_top\" title=\"QQ登录\"><i class=\"iconfont icon-qq\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"微博登录\"><i class=\"iconfont icon-xinlangweibo\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"Github登录\"><i class=\"iconfont icon-github\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"微信登录\"><i class=\"iconfont icon-weixin\"></i></a>
                ";
        }
        // line 53
        echo "            </div>
        </div>
    </div>
    <div class=\"logo\">
        <img src=\"images/logo.gif\" alt=\"\">
    </div>
    <div class=\"toolbar\"></div>
    <nav id=\"nav\">
        <ul id=\"starlist\">
            <li><a href=\"/\" id=\"selected\">网站首页</a></li>
            ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["class"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 64
            echo "            <li><a href=\"/category/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "classname", [], "any", false, false, false, 64), "html", null, true);
            echo "</a></li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            <li><a href=\"liuyan\">留言</a></li>
            <li><a href=\"aboutme\">关于我</a></li>
        </ul>
    </nav>
</header>
<article>
    <aside class=\"l_box\">
        <div class=\"search\">
            <form action=\"/e/search/index.php\" method=\"post\" name=\"searchform\" id=\"searchform\">
                <input name=\"keyboard\" id=\"keyboard\" class=\"input_text\" value=\"请输入关键字词\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value=='请输入关键字词'){this.style.color='#000';value=''}\" onblur=\"if(value==''){this.style.color='#999';value='请输入关键字词'}\" type=\"text\">
                <input name=\"show\" value=\"title\" type=\"hidden\">
                <input name=\"tempid\" value=\"1\" type=\"hidden\">
                <input name=\"tbname\" value=\"news\" type=\"hidden\">
                <input name=\"Submit\" class=\"input_submit\" value=\"搜索\" type=\"submit\">
            </form>
        </div>
        ";
        // line 82
        if ( !($context["user"] ?? null)) {
            // line 83
            echo "        <div class=\"user yyui_tab\" id=\"yyui_tab\">
            <ul>
                <li class=\"yyui_tab_title_this\">
                    <i class=\"iconfont icon-dengluyemianyonghuming\"></i> 登录</li>
                <li class=\"yyui_tab_title\">注册</li>
            </ul>
            <div class=\"yyui_tab_content_this\">
                <form class=\"layui-form\" method=\"post\">
                    <p class=\"weui-cells__title\">用户名/手机号/邮箱：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" name=\"username\" type=\"text\" placeholder=\"请输入用户名/手机号/邮箱\" autocomplete=\"off\" lay-verify=\"username\">
                            </span>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">密码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\">
                            </span>
                        </label>
                    </div>
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 107
            echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
            echo "\">
                    <p class=\"weui-cells__title\"></p>
                    <a href=\"javascript:;\" class=\"weui-btn weui-btn_block weui-btn_primary\" lay-submit=\"\" lay-filter=\"login\">登录</a>
                </form>
            </div>
            <div class=\"yyui_tab_content\">
                <form action=\"\" method=\"post\">
                    <p class=\"weui-cells__title\">手机号：</p>
                    <div class=\"weui-cell weui-cell_vcode wx-title\" style=\"height: 40px\">
                        <label class=\"weui-cell__bd\">
                            <input class=\"weui-input\" type=\"tel\" placeholder=\"请输入手机号\">
                        </label>
                        <label class=\"weui-cell__ft\">
                            <button class=\"weui-vcode-btn\">获取验证码</button>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">验证码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"text\" placeholder=\"请输入验证码\">
                            </span>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">密码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"password\" placeholder=\"请输入密码\">
                            </span>
                        </label>
                    </div>
                    <input type=\"hidden\" name=\"csrf_token\" value=\"";
            // line 139
            echo twig_escape_filter($this->env, ($context["csrf"] ?? null), "html", null, true);
            echo "\">
                    <p class=\"weui-cells__title\"></p>
                    <a href=\"javascript:;\" class=\"weui-btn weui-btn_block weui-btn_primary\">注册</a>
                </form>
            </div>
        </div>
        ";
        }
        // line 146
        echo "        <div class=\"about_me\">
            <h2>关于我</h2>
            <ul>
                <i><img src=\"";
        // line 149
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "pic", [], "any", false, false, false, 149), "html", null, true);
        echo "\"></i>
                <p><b>";
        // line 150
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "nick", [], "any", false, false, false, 150), "html", null, true);
        echo "</b>，";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["admin"] ?? null), "intro", [], "any", false, false, false, 150), "html", null, true);
        echo "</p>
            </ul>
        </div>
        <div class=\"remen\">
            <h2>点击排行</h2>
            <ul>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["hot"]);
        foreach ($context['_seq'] as $context["key"] => $context["hot"]) {
            // line 157
            echo "                <li>
                    <em class=\"no1\">";
            // line 158
            echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
            echo "</em>
                    <a href=\"/";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hot"], "id", [], "any", false, false, false, 159), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hot"], "title", [], "any", false, false, false, 159), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hot"], "title", [], "any", false, false, false, 159), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['hot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 162
        echo "            </ul>
        </div>
        <div class=\"wdxc\">
            <h2>我的相册</h2>
            <ul>
                <li><a href=\"/\"><img src=\"images/7.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/8.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/9.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/10.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/11.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/12.jpg\"></a></li>
            </ul>
        </div>
        <div class=\"links\">
            <h2>友情链接</h2>
            <ul>
                <a href=\"http://www.yangqq.com\">杨青个人博客</a> <a href=\"http://www.yangqq.com\">杨青博客</a>
            </ul>
        </div>
        <div class=\"copy\">
            <ul>
                <li>
                    <a href=\"https://lizhixu.cn\" target=\"_blank\">关于我</a>
                    <span class=\"pipe\">|</span>
                    <a href=\"/copyright\" target=\"_blank\">版权声明</a>
                </li>
                <li><p>Designed by <a href=\"https://github.com/wxuns\" target=\"_blank\">wxuns</a> <i class=\"iconfont icon-xinxing\" style=\"color:red\"></i></p></li>
                <li><p>Copyright ©";
        // line 189
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, ($context["now"] ?? null), "Y"), "html", null, true);
        echo " wxuns.cn All Rights Reserved. <br>
                        <a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\" rel=\"nofollow\">陇ICP备15001053号</a><br>
                    </p></li>
            </ul>
        </div>
    </aside>
    <main class=\"r_box\">
        <li style=\"padding: 0\">
            <div class=\"swiper-container swiper-container-initialized swiper-container-horizontal\">
                <div class=\"swiper-wrapper\">
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic2.jpg\" alt=\"\"></a>
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic1.jpg\" alt=\"\"></a>
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic3.jpg\" alt=\"\"></a>
                </div>
                <!-- 如果需要分页器 -->
                <div class=\"swiper-pagination\"></div>

                <!-- 如果需要导航按钮 -->
                <div class=\"swiper-button-prev swiper-button-white hide\"></div>
                <div class=\"swiper-button-next swiper-button-white hide\"></div>
            </div>
        </li>
        ";
        // line 211
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["article"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 212
            echo "            <li>
                ";
            // line 213
            if (twig_get_attribute($this->env, $this->source, $context["art"], "img", [], "any", false, false, false, 213)) {
                // line 214
                echo "                    <i><a href=\"/\"><img src=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "img", [], "any", false, false, false, 214), "html", null, true);
                echo "\"></a></i>
                ";
            }
            // line 216
            echo "                <h3><a href=\"/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "id", [], "any", false, false, false, 216), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "title", [], "any", false, false, false, 216), "html", null, true);
            echo "</a></h3>
                <p>";
            // line 217
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "content", [], "any", false, false, false, 217), "html", null, true);
            echo "</p>
                <div class=\"weui-flex\">
                    <div class=\"weui-flex__item\">
                        <div class=\"placeholder\">
                            <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                                <span class=\"iconfont icon-shang\"></span> ";
            // line 222
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "laud", [], "any", false, false, false, 222), "html", null, true);
            echo "
                            </a>
                            <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                                <span class=\"iconfont icon-xia\"></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-shijian\"></span> ";
            // line 231
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "last_time", [], "any", false, false, false, 231), "html", null, true);
            echo "
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-weibiaoti--\"></span> ";
            // line 236
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "count", [], "any", false, false, false, 236), "html", null, true);
            echo "
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-nav\"></span>
                            <a href=\"#\" style=\"color: #797b7c\">【";
            // line 242
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "classname", [], "any", false, false, false, 242), "html", null, true);
            echo "】</a>
                        </div>
                    </div>
                </div>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 248
        echo "    </main>
</article>

<a href=\"#\" class=\"cd-top\">Top</a>
<script src=\"js/comm.js\"></script>
<script src=\"js/yyui.js\"></script>
<script type=\"text/javascript\" src=\"/layui/layui.js\"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true, // 循环模式选项
        autoplay:true,
        slidesPerView : 'auto',
        // effect : 'cube',
        centeredSlides: true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    mySwiper.el.onmouseover=function(){
        mySwiper.navigation.\$nextEl.removeClass('hide');
        mySwiper.navigation.\$prevEl.removeClass('hide');
    };
    mySwiper.el.onmouseout=function(){
        mySwiper.navigation.\$nextEl.addClass('hide');
        mySwiper.navigation.\$prevEl.addClass('hide');
    };
    layui.use(['form'], function() {
        var form = layui.form;
        var layer = layui.layer;
        //自定义验证规则
        form.verify({
            username: function (value) {
                if (value.length < 4) {
                    return '没这么短的？';
                }
            }
            , pass: [
                /^[\\S]{6,12}\$/
                , '密码必须6到12位，且不能出现空格'
            ]
        });
        form.on('submit(login)', function (data) {
            \$.post('/user/login',data.field,function (msg) {
                msg = JSON.parse(msg)
                if (msg.status){
                    layer.msg(msg.message,{offset: 't'})
                }else{
                    window.location.reload()
                }
            });
            return false;
        });
    })
</script>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "index/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  387 => 248,  375 => 242,  366 => 236,  358 => 231,  346 => 222,  338 => 217,  331 => 216,  325 => 214,  323 => 213,  320 => 212,  316 => 211,  291 => 189,  262 => 162,  249 => 159,  245 => 158,  242 => 157,  238 => 156,  227 => 150,  223 => 149,  218 => 146,  208 => 139,  173 => 107,  147 => 83,  145 => 82,  127 => 66,  116 => 64,  112 => 63,  100 => 53,  92 => 47,  85 => 43,  81 => 42,  76 => 39,  74 => 38,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html>
<head>
    <meta charset=\"gbk\">
    <title>文讯博客 - 因为热爱</title>
    <meta name=\"keywords\" content=\"个人博客,李志旭个人博客,个人博客模板,文讯博客,李志旭\" />
    <meta name=\"description\" content=\"文讯博客，技术类文章分享，分享个人收集的有趣文章，分享个人学习使用技巧。\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <link rel=\"shortcut icon\" href=\"/favicon.ico\"/>
    <link href=\"/css/yyui.css\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"/css/base.css\" rel=\"stylesheet\">
    <link href=\"/css/index.css\" rel=\"stylesheet\">
    <link href=\"https://cdn.bootcss.com/weui/2.0.0/style/weui.min.css\" rel=\"stylesheet\">
    <link rel=\"stylesheet\" href=\"//at.alicdn.com/t/font_1137992_jfc6jcnc29h.css\">
    <link href=\"https://lib.baomitu.com/Swiper/4.5.0/css/swiper.min.css\" rel=\"stylesheet\">
    <script src=\"https://lib.baomitu.com/Swiper/4.5.0/js/swiper.min.js\"></script>
    <script src=\"/js/hc-sticky.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdn.bootcss.com/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js\"></script>
    <!--[if lt IE 9]>
    <script src=\"/js/modernizr.js\"></script>
    <![endif]-->
</head>
<body>
<header id=\"header\">
    <div class=\"toolbar\" style=\"border-top:#d11a2d 1.5px solid;\">
        <div class=\"clearfix toolbar-inner\">
            <div class=\"quicklink\">
                <ul id=\"chinaz_website_links\" class=\"accesslink\">
                    <li>
                        <a href=\"\" target=\"_blank\">
                            <span><i class=\"iconfont icon-fenlei\"></i> 文讯小店</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class=\"userbar\">
                {% if user %}
                    <div class=\"user-m\">
                        <a href=\"javascript:;\" target=\"_top\" title=\"提醒\"><i class=\"iconfont icon-remind\"></i></a>
                        <a href=\"javascript:;\">
                            <img src=\"{{ user.pic?:'/images/tx.jpeg' }}\" alt=\"\">
                            <span>{{ user.nick }}</span>
                        </a>
                    </div>
                {% else %}
                <span>快捷登录：</span>
                <a href=\"#\" target=\"_top\" title=\"QQ登录\"><i class=\"iconfont icon-qq\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"微博登录\"><i class=\"iconfont icon-xinlangweibo\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"Github登录\"><i class=\"iconfont icon-github\"></i></a>
                <a href=\"#\" target=\"_top\" title=\"微信登录\"><i class=\"iconfont icon-weixin\"></i></a>
                {% endif %}
            </div>
        </div>
    </div>
    <div class=\"logo\">
        <img src=\"images/logo.gif\" alt=\"\">
    </div>
    <div class=\"toolbar\"></div>
    <nav id=\"nav\">
        <ul id=\"starlist\">
            <li><a href=\"/\" id=\"selected\">网站首页</a></li>
            {% for c in class %}
            <li><a href=\"/category/{{ c.id }}\">{{ c.classname }}</a></li>
            {% endfor %}
            <li><a href=\"liuyan\">留言</a></li>
            <li><a href=\"aboutme\">关于我</a></li>
        </ul>
    </nav>
</header>
<article>
    <aside class=\"l_box\">
        <div class=\"search\">
            <form action=\"/e/search/index.php\" method=\"post\" name=\"searchform\" id=\"searchform\">
                <input name=\"keyboard\" id=\"keyboard\" class=\"input_text\" value=\"请输入关键字词\" style=\"color: rgb(153, 153, 153);\" onfocus=\"if(value=='请输入关键字词'){this.style.color='#000';value=''}\" onblur=\"if(value==''){this.style.color='#999';value='请输入关键字词'}\" type=\"text\">
                <input name=\"show\" value=\"title\" type=\"hidden\">
                <input name=\"tempid\" value=\"1\" type=\"hidden\">
                <input name=\"tbname\" value=\"news\" type=\"hidden\">
                <input name=\"Submit\" class=\"input_submit\" value=\"搜索\" type=\"submit\">
            </form>
        </div>
        {% if not user %}
        <div class=\"user yyui_tab\" id=\"yyui_tab\">
            <ul>
                <li class=\"yyui_tab_title_this\">
                    <i class=\"iconfont icon-dengluyemianyonghuming\"></i> 登录</li>
                <li class=\"yyui_tab_title\">注册</li>
            </ul>
            <div class=\"yyui_tab_content_this\">
                <form class=\"layui-form\" method=\"post\">
                    <p class=\"weui-cells__title\">用户名/手机号/邮箱：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" name=\"username\" type=\"text\" placeholder=\"请输入用户名/手机号/邮箱\" autocomplete=\"off\" lay-verify=\"username\">
                            </span>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">密码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"password\" name=\"password\" lay-verify=\"pass\" placeholder=\"请输入密码\">
                            </span>
                        </label>
                    </div>
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
                    <p class=\"weui-cells__title\"></p>
                    <a href=\"javascript:;\" class=\"weui-btn weui-btn_block weui-btn_primary\" lay-submit=\"\" lay-filter=\"login\">登录</a>
                </form>
            </div>
            <div class=\"yyui_tab_content\">
                <form action=\"\" method=\"post\">
                    <p class=\"weui-cells__title\">手机号：</p>
                    <div class=\"weui-cell weui-cell_vcode wx-title\" style=\"height: 40px\">
                        <label class=\"weui-cell__bd\">
                            <input class=\"weui-input\" type=\"tel\" placeholder=\"请输入手机号\">
                        </label>
                        <label class=\"weui-cell__ft\">
                            <button class=\"weui-vcode-btn\">获取验证码</button>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">验证码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"text\" placeholder=\"请输入验证码\">
                            </span>
                        </label>
                    </div>
                    <p class=\"weui-cells__title\">密码：</p>
                    <div class=\"weui-cells wx-title\">
                        <label class=\"weui-cell wx-cell\">
                            <span class=\"weui-cell__bd\">
                                <input class=\"weui-input\" type=\"password\" placeholder=\"请输入密码\">
                            </span>
                        </label>
                    </div>
                    <input type=\"hidden\" name=\"csrf_token\" value=\"{{ csrf }}\">
                    <p class=\"weui-cells__title\"></p>
                    <a href=\"javascript:;\" class=\"weui-btn weui-btn_block weui-btn_primary\">注册</a>
                </form>
            </div>
        </div>
        {% endif %}
        <div class=\"about_me\">
            <h2>关于我</h2>
            <ul>
                <i><img src=\"{{ admin.pic }}\"></i>
                <p><b>{{ admin.nick }}</b>，{{ admin.intro }}</p>
            </ul>
        </div>
        <div class=\"remen\">
            <h2>点击排行</h2>
            <ul>
                {% for key,hot in hot %}
                <li>
                    <em class=\"no1\">{{ key+1 }}</em>
                    <a href=\"/{{ hot.id }}\" title=\"{{ hot.title }}\" target=\"_blank\">{{ hot.title }}</a>
                </li>
                {% endfor %}
            </ul>
        </div>
        <div class=\"wdxc\">
            <h2>我的相册</h2>
            <ul>
                <li><a href=\"/\"><img src=\"images/7.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/8.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/9.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/10.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/11.jpg\"></a></li>
                <li><a href=\"/\"><img src=\"images/12.jpg\"></a></li>
            </ul>
        </div>
        <div class=\"links\">
            <h2>友情链接</h2>
            <ul>
                <a href=\"http://www.yangqq.com\">杨青个人博客</a> <a href=\"http://www.yangqq.com\">杨青博客</a>
            </ul>
        </div>
        <div class=\"copy\">
            <ul>
                <li>
                    <a href=\"https://lizhixu.cn\" target=\"_blank\">关于我</a>
                    <span class=\"pipe\">|</span>
                    <a href=\"/copyright\" target=\"_blank\">版权声明</a>
                </li>
                <li><p>Designed by <a href=\"https://github.com/wxuns\" target=\"_blank\">wxuns</a> <i class=\"iconfont icon-xinxing\" style=\"color:red\"></i></p></li>
                <li><p>Copyright ©{{ now|date('Y') }} wxuns.cn All Rights Reserved. <br>
                        <a href=\"http://www.miitbeian.gov.cn/\" target=\"_blank\" rel=\"nofollow\">陇ICP备15001053号</a><br>
                    </p></li>
            </ul>
        </div>
    </aside>
    <main class=\"r_box\">
        <li style=\"padding: 0\">
            <div class=\"swiper-container swiper-container-initialized swiper-container-horizontal\">
                <div class=\"swiper-wrapper\">
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic2.jpg\" alt=\"\"></a>
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic1.jpg\" alt=\"\"></a>
                    <a class=\"swiper-slide\" href=\"/\"><img src=\"http://sc.chinaz.com/Files/pic/indexpic/hdpic3.jpg\" alt=\"\"></a>
                </div>
                <!-- 如果需要分页器 -->
                <div class=\"swiper-pagination\"></div>

                <!-- 如果需要导航按钮 -->
                <div class=\"swiper-button-prev swiper-button-white hide\"></div>
                <div class=\"swiper-button-next swiper-button-white hide\"></div>
            </div>
        </li>
        {% for art in article %}
            <li>
                {% if art.img %}
                    <i><a href=\"/\"><img src=\"{{ art.img }}\"></a></i>
                {% endif %}
                <h3><a href=\"/{{ art.id }}\">{{ art.title }}</a></h3>
                <p>{{ art.content }}</p>
                <div class=\"weui-flex\">
                    <div class=\"weui-flex__item\">
                        <div class=\"placeholder\">
                            <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                                <span class=\"iconfont icon-shang\"></span> {{ art.laud }}
                            </a>
                            <a href=\"javascript:;\" class=\"weui-btn wx-btn_mini weui-btn_mini weui-btn_default\">
                                <span class=\"iconfont icon-xia\"></span>
                            </a>
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-shijian\"></span> {{ art.last_time }}
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-weibiaoti--\"></span> {{ art.count }}
                        </div>
                    </div>
                    <div class=\"weui-flex__item contentim\">
                        <div class=\"placeholder\">
                            <span class=\"iconfont icon-nav\"></span>
                            <a href=\"#\" style=\"color: #797b7c\">【{{ art.classname }}】</a>
                        </div>
                    </div>
                </div>
            </li>
        {% endfor %}
    </main>
</article>

<a href=\"#\" class=\"cd-top\">Top</a>
<script src=\"js/comm.js\"></script>
<script src=\"js/yyui.js\"></script>
<script type=\"text/javascript\" src=\"/layui/layui.js\"></script>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
        loop: true, // 循环模式选项
        autoplay:true,
        slidesPerView : 'auto',
        // effect : 'cube',
        centeredSlides: true,
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
    mySwiper.el.onmouseover=function(){
        mySwiper.navigation.\$nextEl.removeClass('hide');
        mySwiper.navigation.\$prevEl.removeClass('hide');
    };
    mySwiper.el.onmouseout=function(){
        mySwiper.navigation.\$nextEl.addClass('hide');
        mySwiper.navigation.\$prevEl.addClass('hide');
    };
    layui.use(['form'], function() {
        var form = layui.form;
        var layer = layui.layer;
        //自定义验证规则
        form.verify({
            username: function (value) {
                if (value.length < 4) {
                    return '没这么短的？';
                }
            }
            , pass: [
                /^[\\S]{6,12}\$/
                , '密码必须6到12位，且不能出现空格'
            ]
        });
        form.on('submit(login)', function (data) {
            \$.post('/user/login',data.field,function (msg) {
                msg = JSON.parse(msg)
                if (msg.status){
                    layer.msg(msg.message,{offset: 't'})
                }else{
                    window.location.reload()
                }
            });
            return false;
        });
    })
</script>
</body>
</html>
", "index/index.twig", "D:\\web\\wxuns\\resources\\views\\index\\index.twig");
    }
}
