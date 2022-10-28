@include('adminhome')


<div class="container mt-4">
    <div class="row text-center">
        <h1>Complaints Details</h1>
    </div>
<table class="table table-dark table-striped">
  <tr>
    <td>Product Id</td>
    <td>Product Description</td>
  <td>Status</td>
  <td>Allocation</td>
</tr>
@foreach($Data as $d)
<tr>
  <td>{{$d->product_id}}</td>
  <td>{{$d->complaint_desc}}</td>
  <td>{{$d->status}}</td>
    <td><a href="serviceall/{{$d->complaint_id}}" class="btn btn-danger">Allocate</a></td>
</tr>
@endforeach
</table>
</div>