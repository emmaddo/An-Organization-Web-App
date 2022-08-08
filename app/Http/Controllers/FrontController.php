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
        $footer=News::limit(2)->orderBy('id', 'DESC')->get();
        return view('Front.index', compact('getnews', 'getexcos', 'footer'));
         }

         public function about(){
            $footer=News::limit(2)->orderBy('id', 'DESC')->get();
            return view('Front.about', compact('footer'));
         }
         public function service(){
            $footer=News::limit(2)->orderBy('id', 'DESC')->get();
            return view('Front.service', compact('footer'));
         }

         public function contactUs(){
            $footer=News::limit(2)->orderBy('id', 'DESC')->get();
            return view('Front.contact', compact('footer'));
         }

         public function news(){
            $getnews=News::orderBy('id', 'DESC')->get(); 
            $footer=News::limit(2)->orderBy('id', 'DESC')->get();
            return view('Front.news', compact('getnews', 'footer'));
         }

         public function newsDetails($id){
            $newsdet=News::where('id', $id)->first();
            $no_news=News::count();
            $getnews=News::orderBy('id', 'DESC')->get(); 
            $footer=News::limit(2)->orderBy('id', 'DESC')->get();
           //dd($newsdet);
           return view('Front.newsdetails', compact('newsdet', 'no_news', 'getnews', 'footer'));
            
         }

         
}
