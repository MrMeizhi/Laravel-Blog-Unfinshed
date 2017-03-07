<!DOCTYPE html>
<html>

<body>
@include('navigation')
<div class="container">
    <div class="row clearfix">
        <div class="col-md-1 column"></div>
        <div class="col-md-10 column">
           @section('articleList')
               @show()

        </div>
        <div class="col-md-1 column"></div>

    </div>
</div>

</body>
</html>