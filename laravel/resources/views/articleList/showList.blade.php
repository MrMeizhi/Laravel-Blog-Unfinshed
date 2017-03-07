@extends('articleList.list')

{{--导航栏名字渲染--}}
@section('menu_name')

    <li><a href="http://127.0.0.1/laravel/public/index.php">{{ $names->name }}</a> </li>

@endsection



{{--导航栏种类渲染--}}
@section('menu_type')

    @foreach($types as $type)

        <li>

            <a href="http://127.0.0.1/laravel/public/index.php/type/{{$type->type}}">{{$type->type}}</a>

        </li>

    @endforeach

@endsection

@section('choose_type')

    <li> <a href="http://127.0.0.1/laravel/public/index.php/type/{{$choose}}">&gt&gt{{$choose}}</a> </li>


@endsection


@section('articleList')

    @foreach($allTypeArticles as $article)

        <div>

            <h2 class="h2">

                {{$article->article_name}}
            </h2>
            <h6 class="text-muted">
                <em>

                    <span class="glyphicon glyphicon-time"></span> {{$article->article_time}}
                </em>


            </h6>
            <p>

                <?php
                $lessString = str_limit($value=$article->article_content, $limit = 150, $end = '...');
                echo $lessString

                ?>

            </p>
            <p>
                <a href="http://127.0.0.1/laravel/public/index.php/article/{{$article->id}}">More Detail</a>

            </p>

        </div>



    @endforeach


@endsection