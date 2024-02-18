<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\support\Collection;
use Illuminate\Http\Request;
use Validator;
use App\Rules\Age;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {   
        //$course=Course::find(1);
        //$course=Course::where('course_must',1)->get();
        // $course=course::all();
         //dd($course);
        /*
         foreach ($course as $key) {
            echo $key ->course_content."<br>";
        }
         */ 

        ////insert
        /*
         $course=new course;
         $course->course_title='php title';
         $course->course_content='php content';
         $course->course_must=2;

         $course->save();
        */

   /*
        course::create([
          'course_title'=>'course title create 01',
          'course_content'=>'course title create 01',
          'course_must'=>'2',

        ]);

*/

/*
//kayıt varsa oluşturmaz yoksa oluşturur.
course::firstOrCreate([
    'course_title'=>'course title create 02',
    'course_content'=>'course title create 02',
    'course_must'=>'2',

  ]);
*/
/*

//yokluğunu doğruluyor
course::firstOrnew([
    'course_title'=>'course title create 02',
    'course_content'=>'course title create 02',
    'course_must'=>'2'

  ]);

*/
/*
    $course=course::find(1);
    $course->course_title='Title Update';
    $course->save();
*/
/*
      $course=course::where('id',16)->Update([
         'course_title'=>'Where Title Update'
      ]);
*/
/*
    $course=course::find(17);
    $course->delete();


$course=course::Where('id',2)->delete();

*/

//course::destroy("5,4");// id belirtmezsek tüm verileri siler

//course::where('id',2)->delete();

/*
$course=course::withTrashed()->get();// yumuşak silinenleri de getirir.
foreach ($course as $key) {   
     echo $key->course_title."<br>";
}
*/


/*
$course=course::onlyTrashed()->get();//sadece yumuşak silinenleri getirir.
foreach ($course as $key) {   
     echo $key->course_title."<br>";
}

*/


//yumuşak  silinenleri geri yükleme
/*
$course=course::withTrashed()->restore();
foreach ($course as $key) {   
     echo $key->course_title."<br>";
}


*/

//yumuşak silinen kaydı tomple kaldırma

//course::withTrashed()->where('id',3)->forceDelete();








     }



}
