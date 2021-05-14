<?php

namespace App\Http\Controllers;

use App\Models\TaskManager;
use Illuminate\Http\Request;
use Exception;

class TaskManagerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       $pagetitle="صفحه نمایش وظایف";

       $taskmanager= TaskManager::orderBy('id','Desc')->get();
       return view('TaskManager',compact('taskmanager','pagetitle'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pagetitle="اضافه کردن دسته";
        return view('createtask',compact('pagetitle'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $message=['title.required'=>'عنوان نباید خالی باشه',

            'title.max'=>'نباید بیشتر از ۱۰ کاراکتر باشه'
        ,
            'description.required'=>'نباید خالب بشد'
            ];
        $dataValdate=$request->validate(['title'=>'required|max:10',
         'description'=>'required'

         ],$message);
        $tasks=new  TaskManager([
            'title'=>$request->get('title'),
'description'=>$request->get('description')

        ]);
        try
        {
            $tasks->save();
        }
       catch (Exception $exception)
       {
           $msg="";
           return redirect(route('TaskManager'))->with('warnning',$exception->getCode());
       }

      $msg=  "ذخیره با موفقیت انجام شد";
     return redirect(route('TaskManager'))->with('sucsses',$msg);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function show(TaskManager $taskManager)
    {
        //
        $pagetitle="توضیحات هر وظیفه";
        return view('Task',compact('taskManager','pagetitle'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function edit(TaskManager $taskManager)
    {
        //
        $pagetitle="صفحه ویرایش";
        return view('edittask',compact('taskManager','pagetitle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskManager $taskManager)
    {
        //
        $message=['title.required'=>'عنوان نباید خالی باشه',

            'title.max'=>'نباید بیشتر از ۱۰ کاراکتر باشه'
            ,
            'description.required'=>'نباید خالب بشد'
        ];
        $dataValdate=$request->validate(['title'=>'required|max:10',
            'description'=>'required'

        ],$message);
       $taskManager->title=$request->title;
        $taskManager->description=$request->description;
        try
        {
          $taskManager->save()  ;

        }
        catch (Exception $exception)
        {
            $msg="";
            return redirect(route('TaskManager'))->with('warnning',$exception->getCode());
        }

        $msg=  "ویرایش با موفقیت انجام شد";
        return redirect(route('TaskManager'))->with('sucsses',$msg);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TaskManager  $taskManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(TaskManager $taskManager)
    {
        //
        $taskManager->delete();
        return redirect(route('TaskManager'));
    }
}
