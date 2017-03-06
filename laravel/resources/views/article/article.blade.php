@extends('article.content')


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

    <li> <a href="http://127.0.0.1/laravel/public/index.php/type/{{$articles->article_type}}">&gt&gt{{$articles->article_type}}</a> </li>

@endsection


@section('article_title')

    {{$articles->article_name}}

@endsection

@section('article_time')

    <span class="glyphicon glyphicon-time"></span> {{$articles->article_time}}


@endsection



@section('article_content')

    {{$articles->article_content}}

@endsection

@section('showComment')

    @foreach($comments as $comment)

        <div class="media">

            <a class="pull-left"><span class="media-object glyphicon glyphicon-user"></span> </a>
            <div class="media-body h4">
                <h5 class="media-heading">
                    <span>@</span>{{$comment->user}}
                    <br><span class="text-muted h6">{{$comment->time}}</span>
                </h5>


                {{$comment->comment}}
            </div>

        </div>

    @endforeach

@endsection


@section('article_id'){{$articles->id}}
@endsection