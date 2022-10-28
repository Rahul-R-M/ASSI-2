@include('userhome')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD Complaint</title>
</head>

<body>
    <div class="container mt-5">
        <center>
            <form action="addcom" method="post">
                @csrf
                <div class="row text-align-center">
                    <h1>ADD Complaints</h1>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Product Name :</label>
                    </div>
                    <div class="col-4">
                        <!-- <form action="loadcom"> -->
                            <select name="pname" id="" class="form-control">
                                @foreach($prodname as $p)
                                <option value={{$p->product_id}}>{{$p->name}}</option>
                                @endforeach
                            </select>
                        <!-- </form> -->
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <label for="">Product Description :</label>
                    </div>
                    <div class="col-4">
                        <textarea name="txtpdesc" id="" cols="30" rows="3" placeholder="Add complaints for Product" class="form-control"></textarea>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-6">

                    </div>
                    <div class="col-4">
                        <input type="submit" value="ADD Complaint" class="btn btn-outline-primary w-100 rounded-pill">
                    </div>
                </div>

            </form>
        </center>
    </div>
</body>

</html>