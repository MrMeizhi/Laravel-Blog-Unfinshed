@extends('errors.error')

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


@section('errorMsg')

    <h2>

        欧尼酱,没有了喔

    </h2>

@endsection