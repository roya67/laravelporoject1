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
                <a href="#" class="btn btn-warning"> دسته بندی جدید</a>
            </li>

            <li class="nav-item">
                <a href="" class="btn btn-primary"> لیست دسته بندی ها</a>
            </li>

        </ul>


    </nav>

    <hr>
</div>


</div>
<table class="table">
    <thead>
    <tr>
        <td>شناسه</td>
        <td>عنوان</td>
        <td>توضیحات</td>
        <td>ویرایش</td>
        <td>حذف</td>

    </tr>

    </thead>
    <body>




        <tr>
            <td>شناسه{{$taskManager->id}}</td>
            <td> عنوان وظیفه  {{$taskManager->title}}</td>
            <td>    وظیفه توضیحات       {{$taskManager->description}}</td>

            <td>ویرایش</td>
            <td>حذف</td>

        </tr>




    </body>


</table>



</body>
</html>
