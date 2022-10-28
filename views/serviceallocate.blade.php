@include('link')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Allocation</title>
</head>

<body>
    <div class="container ml-4">
        <form action="addserve" method="post">
            @csrf
            <h1 class="text-center">Service Provider Allocation</h1>
            <input type="hidden" name="hd" value={{$id}}>
            <select name="sname" id="" class="form-control">
                @foreach($servp as $s)
                <option value="{{$s->id}}">{{$s->name}}</option>
                @endforeach
            </select>
            <button type="submit" class="btn btn-danger mt-4">Allocation</button>
        </form>
    </div>
</body>
</html>