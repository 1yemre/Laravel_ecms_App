<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Schema;
use app\models\page;

class page1Controller extends Controller
{

    public function index()
    {       

          $page=new page;
          $page->page_title="yeni page";
          $page->save();
       
   




    }

   public function index2()
   {
       echo "Emre Enes Yenen";
   }
   public function show()
   {
       echo "show method";
   }
}
