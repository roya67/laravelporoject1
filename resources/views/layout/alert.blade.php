@if($errors->any())
    <div class="alert alert-danger " style="direction: rtl">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


    </div>
@endif
@if(session('success'))
    <div class="alert alert-success justify-content-center"  style="direction: rtl">

        {{session('success')}}

    </div>
@endif
@if(session('warning'))
    <div class="alert alert-danger justify-content-center"  style="direction: rtl">

      یک خطا رخ داده است:  {{session('warning')}}

    </div>
@endif
