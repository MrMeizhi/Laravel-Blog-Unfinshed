<!DOCTYPE html>

<html>



<head>


</head>

<body>
@include('navigation')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-1"></div>
        <div class="col-md-10 column">
            <div class="jumbotron">
                @section('errorMsg')
                @show()
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</div>


</body>

</html>