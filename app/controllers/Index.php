<?php
/**
 * @name IndexController
 *
 * @author Administrator
 * @desc 默认控制器
 *
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
use League\CommonMark\CommonMarkConverter;
class IndexController extends BaseController
{
    /**
     * 默认动作
     * Yaf支持直接把Yaf\Request\Abstract::getParam()得到的同名参数作为Action的形参
     * 对于如下的例子, 当访问http://yourhost/Sample/index/index/index/name/Administrator 的时候, 你就会发现不同.
     */
    public function indexAction($name = 'Polite')
    {
        //类名
        if ($this->user){
            $auth = DB::table('users')
                ->where('users.id',$this->user->id)
                ->join('auth','auth.id','=','users.auth')
                ->select('auth.id','auth.star')->first();
            $range = DB::table('auth')
                ->where('star','<',$auth->star)
                ->select('id')->get()->toArray();
            $limit = $auth->id;
            foreach ($range as $value){
                if ($value->id != $auth->id){
                    $limit .= ','.$value->id;
                }
            }
            $class = DB::table('article_class')
                ->whereIn('auth',explode(',',$limit))
                ->select('id','classname')->get();
        }else{
            $class = DB::table('article_class')
                ->where('auth',3)
                ->select('id','classname')->get();
        }
        //文章列表
        $article = DB::table('article')
            ->take(10)
            ->join('users','users.id','=','article.author')
            ->join('article_class','article_class.id','=','article.class_id')
            ->select('article.id',
                'article.class_id',
                'article.title',
                'article.content',
                'article.count',
                'article.laud',
                'article.comment',
                'article.ontop',
                'article.elite',
                'article.last_time',
                'article_class.classname'
            )
            ->where('article.status',1)
            ->orderBy('id','desc')
            ->get();
        foreach ($article as $k=>$a){
            $converter = new CommonMarkConverter();
            //获取图片
            preg_match('/<\s*img\s+[^>]*?src\s*=\s*(\'|\")(.*?)\\1[^>]*?\/?\s*>/i',$converter->convertToHtml($a->content),$match);
            $article[$k]->img = $match?$match[2]:'';
            $article[$k]->content = mb_substr(str_replace(array("\r\n", "\r", "\n"), "",strip_tags($converter->convertToHtml($a->content))),0,150);
            $article[$k]->last_time = date('Y-m-d',strtotime($article[$k]->last_time));
        }
        //点击排行
        $hot = DB::table('article')
            ->
        $this->getView()->display('index/index',[
            'csrf' => Csrf::generate('csrf_token'),
            'class'=>$class,
            'article'=>$article,
            'user'=>$this->user
        ]);
        return false;
    }

    public function infoAction()
    {
        return false;
    }
}
