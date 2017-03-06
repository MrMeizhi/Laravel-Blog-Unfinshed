<?php
/**
 * Created by PhpStorm.
 * User: meizhi
 * Date: 17-1-20
 * Time: 下午5:31
 */

namespace App\Http\Controllers;


use App\Article;
use App\Comment;
use App\Name;
use App\Type;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\DB;


class ArticleController extends Controller{

    /*public function info($id){

        $article = Article::all();
        $name = Name::all();
        return view('article.new',[
            'titles'=>$article,
            'name'=>$name

        ]);
    }*/

    //返回一个导航栏的用户名
    public function returnName(){

        $name = Name::query()->where('id','1')->first();
        return $name;

    }

    //返回导航栏上的文章所有种类
    public function returnType(){

        $type = Type::all();
        return $type;
    }

    //根据url上的id返回一片文章
    public function returnArticle($id){

        $article = Article::query()->find($id);
        return $article;

    }

    //返回一篇文章的所有的评论
    public function returnComment($id){

        $comment = Comment::query()->where('article_id',$id)->orderBy('comment_id','desc')->get();
        return $comment;
    }

    //显示单个文章浏览的页面
    public function showArticle($id){

        $names = $this->returnName();
        $types = $this->returnType();
        $articles = $this->returnArticle($id);
        $comment = $this->returnComment($id);

        return view('article.article',[
            'names' => $names,
            'types' => $types,
            'articles'=>$articles,
            'comments'=>$comment
        ]);

    }

    //返回某个类型的所有的文章
    public function returnAllTypeArticle($type){

        $allTypeArticles = Article::query()->where('article_type',$type)->get();
        return $allTypeArticles;


    }

    //显示所有同一个类型的文章
    public function showArticleList($type)
    {

        $names = $this->returnName();
        $types = $this->returnType();
        $allTypeArticles = $this->returnAllTypeArticle($type);

        //return $names;

        if($allTypeArticles!='[]'){

            return view('articleList.showList', [
                'names' => $names,
                'types' => $types,
                'choose'=> $type,
                'allTypeArticles' => $allTypeArticles
            ]);

        }else{


           return view('errors.404',[
               'names' => $names,
               'types' => $types,
               'choose'=> $type

           ]);


        }



    }

    //首页
    public function index(){


        $names = $this->returnName();
        $types = $this->returnType();
        return view('meizhi.index', [
            'names' => $names,
            'types' => $types,

        ]);


    }

    //通过字符匹配文件名用like查询出想要的文章
    public function returnSearchArticle($keyWord){

        $allFindArticle = Article::query()->where('article_name','like','%'.$keyWord.'%')->get();
        return $allFindArticle;


    }

    //查询文章入口
    public function doSearchArticle(Request $request){


        $names = $this->returnName();
        $types = $this->returnType();
        $allFindArticle = $this->returnSearchArticle($request->word);
        if ($allFindArticle=='[]'){


            return view('errors.404',[
                'names' => $names,
                'types' => $types,
                'choose' => $request->word
            ]);


        }
        return view('articleList.showList',[
            'names' => $names,
            'types' => $types,
            'choose' => $request->word,
            'allTypeArticles'=>$allFindArticle
        ]);



    }

    public function returnMaxNum($id,$id_num,$column_id){

        if ($id==null){

            $result = Comment::query()->where($column_id,'>',0)->max($column_id);

        }else{

            $result = Comment::query()->where($id,$id_num)->max($column_id);

        }





        return $result;

    }



    public function createComment($article_id,$comment_content,$user){

        try{

            $comment = new Comment();
            $comment->id = $this->returnMaxNum(null,null,'id')+1;
            $comment->time = date('y-m-d,h:i:s',time());
            $comment->article_id = $article_id;
            $comment->comment_id = $this->returnMaxNum('article_id',$article_id,'comment_id')+1;
            $comment->comment=$comment_content;
            $comment->user = "$user";
            $comment->save();
            return true;
        }

        catch (Exception $exception){

            return false;
        }


//        Comment::create([
//            'id'=>31,
//            'article_id'=>1,
//            'comment_id'=>3,
//            'comment'=>'这是第三条comment',
//            'time'=>"2017-1-30 17:05:05",
//            'user'=>'whoami'
//        ]);

    }
    //接收文章的评论
    public function sendArticleComment(Request $request){


        $insertStatus = $this->createComment($request->article_id,$request->comment,$request->user);

        return json_encode(array("success"=>$insertStatus,"user"=>$request->user,"comment"=>$request->comment));



    }

}
