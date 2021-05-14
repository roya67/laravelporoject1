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
                <a href="{{route('create')}}" class="btn btn-warning"> وظیفه  جدید</a>
            </li>

            <li class="nav-item">
                <a href="" class="btn btn-primary"> لیست وظایف </a>
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


</div>
<table class="table">
    <thead>
    <tr>
        <td>شناسه</td>
        <td>   وظیفه عنوان</td>
        <td>توضیحات</td>
        <td>ویرایش</td>
        <td>حذف</td>

    </tr>

    </thead>
    <body>


    @foreach($taskmanager as $task)

        <tr>
            <td>شناسه: {{$task->id}}</td>
            <td>  وظیفه عنوان :   <a href="{{route('show',$task->id)}}"> {{$task->title}}</a> </td>
            <td> وظیفه توضیحات    :   {{$task->description}}</td>

            <td><a href="{{route('edit',$task->id)}}">ویرایش</a></td>
            <td><a href="{{route('destroy',$task->id)}}" onclick="return confirm('ایا از حذف مطمپنید؟')">حذف</a></td>

        </tr>
    @endforeach



    </body>


</table>



</body>
</html>
