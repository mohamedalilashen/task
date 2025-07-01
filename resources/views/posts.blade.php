

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
  </head>

@if(session('mess'))
    <div class="alert alert-success">
     done update row 
    </div>
@endif
@if(session('delete'))
    <div class="alert alert-danger">
     done deleted row
    </div>
@endif

<form action="{{Route('AddPosts')}}" method="POST">
    @csrf
    <div class="mb-3">
    <center> <label for="" class="form-label">title post</label>
<input type="" name="title" class="form-control" style="width: 50%" id="" ></center>
</div>
<div class="mb-3">
 <center> <label for="exampleFormControlTextarea1" class="form-label">content post</label>
  <textarea class="form-control" name="content" style="width: 50%" id="exampleFormControlTextarea1" rows="3"></textarea></center>
</div>

<div class="dropdown">
  <center>

<select name="is_published" style="width: 50%" class="form-select" aria-label="Default select example">
  <option value="1">true</option>
  <option value="0">false</option>
</select>



</center>
</div>
<center> <button name="submit"  type="submit" class="btn btn-primary">submit</button>

</form>

@if(($date ?? 0) == 0)
<div class="alert alert-danger">
  <strong>not found data!</strong>.No data at the moment
</div>
@else

<table class="table table-striped">
 <thead>
  
      <td>title</td> 
      <td>content</td> 
      <td>status</td> 
        <td>update</td> 
      <td>delete</td> 
      
 </thead>
 <tbody>

 @if($select->isNotEmpty())
    @foreach($select as $sel)
        <tr>
            <td>{{ $sel->title }}</td>
            <td>{{ $sel->content }}</td>
            <td>{{ $sel->is_published ? 'true' : 'false' }}</td>
            <td> <a href="{{ route('edit_page',$sel['id']) }}"><button type="button" class="btn btn-primary">edit</button></a></td>
      <td> <a href="{{ route('delete',$sel['id']) }}"<button type="button" class="btn btn-danger">delete</button></a></td>
        </tr>
    @endforeach
@endif
</table>
@endif




 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>