@extends('meizhi.hello')


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


@section('introduce')

    <h1>
        Welcome to {{$names->name}}'s blogs
    </h1>

    <p>
        I'm really concerned about cyber security<br>
        So glad to discuss with you if you have some interesting idea<br>
        Contact me(email:{{$names->contact}})
    </p>

@endsection

