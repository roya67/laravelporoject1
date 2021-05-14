<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{$pagetitle}}</title>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>


</head>
<body style="dir:rtl; text-align:right;">


  <div class="container">

      <div>
          <div style="padding: 40px;text-align: right;direction: rtl;">
              <nav class="navbar navbar-expand-sm">
                  <ul class="navbar-nav">
                      <li class="nav-item">
                          <a href="{{route('create')}}" class="btn btn-warning">وظایف جدید</a>
                      </li>

                      <li class="nav-item">
                          <a href="" class="btn btn-primary"> لیست وظایف</a>
                      </li>

                  </ul>


              </nav>

              <hr>
              @if(session('sucsses'))
                  <div class=" alert  alert-success ">{{session('sucsses')}}</div>
              @endif
              @if(session('warnning'))
                  <div class=" alert  alert-danger ">یک خطا رخ داده{{session('warnning')}}</div>
              @endif
          </div>

  <div class="div.d-flex.justify-content-center" style="direction: rtl">
<form action="{{route('update',$taskManager->id)}}" method="post">
    @method('put');
@csrf
<div class="form-group">


    <label for="title"> عنوان دسته بندی </label>

<input type="text"  class="form-control @error('title') is-valid @enderror" name="title"  value="{{$taskManager->title}}">
    @error('title')
    <div class="alert alert-danger">{{$message}} </div>
    @enderror

</div>

    <div class="form-group">


        <label for="description"> شرح دسته بندی </label>

        <textarea   class="form-control @error('description') is-valid @enderror" name="description"> {{$taskManager->description}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{$message}} </div>
        @enderror
    </div>
    <div>




  </div>
    <div>

        <button type="submit" class="btn btn-success">ویرایش</button>
    </div>

</form>

</div>

  </div>

    <hr>






</body>
</html>
