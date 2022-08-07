<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class FrontController extends Controller
{
    public function index(){
        $getnews= DB::table('News')->get();
        //$intros= DB::table('News')->select('intro')->where('id',4)->get();
        //$intros= DB::table('News')->where('id',4)->get(['intro']);
        //$intros= DB::table('News')->where('id',5)->first();
        $getexcos= DB::table('Users')->where('usertype', 'Exco')->get();
        return view('Front.index', compact('getnews', 'getexcos'));
         }

         public function about(){
            return view('Front.about');
         }
         public function service(){
            return view('Front.service');
         }

         public function news(){
            $getnews=News::get(); 
            return view('Front.news', compact('getnews'));
         }

         public function newsDetails($id){
            $newsdet=News::where('id', $id)->first();
           //dd($newsdet);
           return view('Front.newsdetails', compact('newsdet'));
            
         }
}
