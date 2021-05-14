<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>صفحه ثبت نام کاربر</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"/>


</head>
<body style="dir:rtl; text-align:right;">


<div class="container">

    @include('layout.alert');

    <div class="div.d-flex.justify-content-center" style="direction: rtl">
        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="form-group">


                <label for="name">  نام و نام خانوادگی</label>

                <input type="text"  class="form-control @error('name') is-valid @enderror" name="name" value="{{old('name')}}">
                @error('name')
                <div class="alert alert-danger">{{$message}} </div>
                @enderror

            </div>

            <label for="email">  ایمیل</label>

            <input type="email"  class="form-control @error('email') is-valid @enderror" name="email" value="{{old('email')}}" >
            @error('email')
            <div class="alert alert-danger">{{$message}} </div>
        @enderror
            <label for="password">  پسورد</label>

            <input type="password"  class="form-control @error('password') is-valid @enderror" name="password">
            @error('password')
            <div class="alert alert-danger">{{$message}} </div>
        @enderror
            <label for="password">  تکرار رمز</label>

            <input type="password"  class="form-control @error('password') is-valid @enderror" name="password_confirmation">
            @error('password')
            <div class="alert alert-danger">{{$message}} </div>
        @enderror
    </div>
            <div>

                <button type="submit" class="btn btn-success">ثبت</button>
            </div>

        </form>

    </div>

</div>

<hr>






</body>
</html>
