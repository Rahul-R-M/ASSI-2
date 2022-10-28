@include('link')
@include('adminhome')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Product</title>
</head>
<body>
<div class="container mt-5">
        <center>
            <form action="insprod" method="post">
                @csrf
                <div class="row text-align-center">
                    <h1>ADD Product</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Product Name :</label>
                    </div>
                    <div class="col-4">
                        <input type="text" name="txtpname" id="" class="form-control" placeholder="Enter Product Name">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Product Description :</label>
                    </div>
                    <div class="col-4">
                            <textarea name="txtpdesc" id="" cols="30" rows="5" class="form-control" placeholder="Enter Product Description"></textarea>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">
                    </div>
                    <div class="col-4">
                        <input type="submit" value="ADD Product" class="btn btn-outline-primary w-100 rounded-pill">
                    </div>
                </div>
                
            </form>
        </center>
    </div>
</body>
</html>