<!DOCTYPE html>
<html>
<head>
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" type="text/javascript"></script>


    <style>
    .margin-text{
     line-height: 35px;
        font-size: 16px;
    }


</style>

<script>



$(document).ready(function () {
    $("#sendComment").click(function () {

        $.post("http://127.0.0.1/laravel/public/index.php/sendComment/",
            {
                user:$("#user").val(),
                comment:$("#comment").val(),
                article_id:@section('article_id')@show()

            },
        function (data) {
            if (data.success) {
                $("#commentDiv").removeClass("hidden");
                $("#commentStatus").html("评论成功");
                window.location.reload();
            }else{
                $("#commentDiv").removeClass("hidden","alert-success");
                $("#commentDiv").addClass("alert-danger");
                $("#commentStatus").html("请重新评论");

                //alert("多有抱歉,似乎出了点小问题");
            }
        },"json")
    })
})

</script>
</head>
<body>
@include('navigation')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-1 column"></div>
        <div class="col-md-7 column">
            <h2 class="text-center h2">

                @section('article_title')
                    @show()
            </h2>

            <h6 class="text-center text-muted">

                @section('article_time')
                    @show()

            </h6>

            <p class="margin-text text-justify">
                @section('article_content')
                    @show()
            </p>
            {{--<p>--}}
                {{--<a class="btn" href="#">View details »</a>--}}
            {{--</p>--}}
        </div>
        <div class="col-md-1 column "></div>

        <div class="col-md-3 column">
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="list-group">
                <a href="#" class="list-group-item active">Home</a>
                <div class="list-group-item">
                    List header
                </div>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">
                        List group item heading
                    </h4>
                    <p class="list-group-item-text">
                        ...
                    </p>
                </div>
                <div class="list-group-item">
                    <span class="badge">14</span> Help
                </div> <a class="list-group-item active"> <span class="badge">14</span> Help</a>
            </div>

            <br>


            <div class="list-group">
                <a href="#" class="list-group-item active">Home</a>
                <div class="list-group-item">
                    List header
                </div>
                <div class="list-group-item">
                    <h4 class="list-group-item-heading">
                        List group item heading
                    </h4>
                    <p class="list-group-item-text">
                        ...
                    </p>
                </div>
                <div class="list-group-item">
                    <span class="badge">14</span> Help
                </div> <a class="list-group-item active"> <span class="badge">14</span> Help</a>
            </div>



        </div>

    </div>
    <div class="row clearfix">
        <div class="col-md-1 column"></div>
        <div class="col-md-7 column">
            <form role="form">
                <div class="form-group">
                    <span class=" glyphicon glyphicon-user"> </span>
                    <label for="exampleInputEmail1">大侠请留名</label><input type="text" class="form-control" id="user"/>
                </div>
                <div class="form-group">
                    <span class="glyphicon glyphicon-comment"> </span>
                    <label for="exampleInputPassword1">多谢大侠指点</label><textarea type="text" class="form-control"  id="comment"></textarea>
                </div>
                <button type="button" class="btn btn-default" id="sendComment"> Send <span class="glyphicon glyphicon-send"></span></button>
                {{--<p id="article_id">--}}
                    {{--@section('article_hidden_id')--}}
                        {{--@show()--}}
                {{--</p>--}}
            </form>
            <p id="setResult"></p>
        </div>

        <div class="col-md-5 column">

        </div>
    </div>
    <br>
    <div class="row clearfix">
        <div class="col-md-1"></div>
        <div class="col-md-10 column">
            {{--<div class="media">--}}
                {{--<a href="#" class="pull-left"><li class="media-object glyphicon glyphicon-user" alt='' /></a></a>--}}
                {{--<a class="pull-left"><span class="media-object glyphicon glyphicon-user"></span> </a>--}}
                {{--<div class="media-body">--}}
                    {{--<h5 class="media-heading">--}}
                        {{--@Nested media heading--}}
                    {{--</h5>--}}

                    {{--Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.--}}

                {{--</div>--}}

            {{--</div>--}}
            <div class="alert alert-success alert-dismissable hidden" id="commentDiv">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5 id="commentStatus">

                </h5>
            </div>
            @section('showComment')
                @show()

        </div>
        <div class="col-md-1"></div>
    </div>
</div>



</body>
</html>