@include('link')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
</head>

<body>
    <div class="container mt-5">
        <center>
            <form action="logindata" method="post">
                @csrf
                <div class="row text-align-center">
                    <h1>Login Form</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">User Name :</label>
                    </div>
                    <div class="col-4">
                        <input type="text" name="txtname" id="" class="form-control" placeholder="Enter User Name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Password :</label>
                    </div>
                    <div class="col-4">
                        <input type="password" name="txtpass" id="" class="form-control" placeholder="Enter Password">
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                    </div>
                    <div class="col-4">
                        <input type="submit" value="Log IN" class="btn btn-outline-primary w-100 rounded-pill">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                    </div>
                    <div class="col-4">
                        <a href={{URL::to('reg')}}  class="btn btn-outline-info w-100 rounded-pill">Register Now</a>
                    </div>
                </div>
            </form>
        </center>
    </div>
</body>

</html>