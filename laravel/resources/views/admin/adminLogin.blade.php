@include('bootstrapHead')

<head>

    <style>

        #center{
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -moz-transform:  translateY(-50%);
            -ms-transform:  translateY(-50%);
            -o-transform:  translateY(-50%);
            transform:  translateY(-50%);
        }




    </style>

    <script>

        $(document).ready(function () {
            $("#sendAdmin").click(function () {

                //alert("123")

                $.post("http://127.0.0.1/laravel/public/index.php/sendAdmin/",
                    {
                        username:$("#inputUsername").val(),
                        password:$("#inputPassword").val()

                    },
                    function (data) {

                        if (data.success) {
                            //alert("多谢大侠,本页面将被刷新");
                            window.location.href = data.location;

                        }else {

                            $("#alertText").removeClass('hidden');
                        }
                    },"json");
            })
        })

    </script>

</head>

<div id = "center" class="container col-lg-4 col-lg-offset-4  col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <div class="alert alert-danger alert-dismissable hidden " id="alertText">
                {{--<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>--}}
                Invalid username or password
            </div>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input  class="form-control" id="inputUsername" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" />
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <div class="checkbox">
                            <label><input type="checkbox" />Remember me</label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="button" class="btn btn-default" id="sendAdmin">Sign in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>