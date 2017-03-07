<!DOCTYPE html>

<html>


<body>
@include('navigation')

<div class="container">
    <div class="row clearfix">
        <div class="col-md-1"></div>
        <div class="col-md-10 column">
            <div class="jumbotron">


                @section('introduce')
                    @show()

                <p>
                    <a class="btn btn-primary btn-large" href="http://127.0.0.1/laravel/public/index.php/type/CyberSecurity">More</a>
                </p>
            </div>
        </div>
        <div class="col-md-1"></div>

    </div>

</div>




</body>


</html>