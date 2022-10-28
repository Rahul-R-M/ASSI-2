@include('link')
@include('adminhome')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regitration</title>
</head>
<body>
    <div class="container mt-5">
        <center>
            <form action="insertsdata" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row text-align-center">
                    <h1>Service Provider Regitration Form</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Service Provider Name :</label>
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
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Age :</label>
                    </div>
                    <div class="col-4">
                        <input type="number" name="txtage" id="" class="form-control" placeholder="Enter Your Age">       
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Contact Number :</label>
                    </div>
                    <div class="col-4">
                        <input type="number" name="txtphno" id="" class="form-control" placeholder="Enter Your Contact Number">       
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Photo :</label>
                    </div> 
                    <div class="col-4">
                        <input type="file" name="txtphoto" id="" class="form-control w-100">       
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-6">
                    </div> 
                    <div class="col-4">
                        <input type="submit" value="Register" class="btn btn-outline-primary w-100 rounded-pill">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                    </div>
                    <div class="col-4">
                        <a href={{URL::to('login')}} class="btn btn-outline-info w-100 rounded-pill">Login Now</a>
                    </div>
                </div>
            </form>
        </center>
    </div>
</body>
</html>