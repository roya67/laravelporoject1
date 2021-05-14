<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$pagetitle}}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head><body dir="rtl">
<div>
   <div style="padding: 40px;text-align: right;direction: rtl;">
    <nav class="navbar navbar-expand-sm">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('create')}}" class="btn btn-warning"> وظیفه جدید</a>
            </li>

            <li class="nav-item">
                <a href="" class="btn btn-primary"> لیست وظایف</a>
            </li>

        </ul>


    </nav>

    <hr>
</div>


</div>

<form action="{{route('store')}}" method="post" style="text-align: right">
    @csrf
    @if($errors->any())
<div class="alert alert-danger " style="text-align: right" >
    <ul>

            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach

    </ul>
</div>


    @endif

    <div class="form-group" dir="rtl">


 <label for="title">عنوان وظیفه </label>
<input type="text" class="form-control @error('title') is-invalid @enderror"  name="title">
@error('title')
   <diV class="alert alert-danger"> {{$message}}   </div>
 @enderror


    <div class="form-group">


        <label for="description"> شرح وظیفه </label>
        <textarea  class="form-control @error('description') is-invalid @enderror" name="description"></textarea>
        @error('description')
        <diV class="alert alert-danger"> {{$message}}   </div>
        @enderror
    </div>

    </div>
    <div>

        <button type="submit" class="btn btn-success">ذخیره</button>
    </div>
</form>





</body>
</html>
