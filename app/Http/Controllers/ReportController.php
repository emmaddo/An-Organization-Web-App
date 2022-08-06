<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;
use App\Models\customer;
use App\Models\Product;
use App\Models\Expenses;
use App\Models\Sales;
use App\Models\News;
use App\Models\Units;
use App\Models\Minutes;
use App\Models\Memo;
use App\Models\Dues;


class ReportController extends Controller
{
    public function byIndividual(Request $request){
        if(!empty($request->startdate)){
        //return $request->input();
        $startdate=$request->startdate;
            $enddate=$request->enddate;
             /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
        ->selectRaw('sum(amount) as sum, email, name, created_at')
        ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
        $eachpayment = Dues::groupBy('email', 'name')
        ->selectRaw('sum(amount) as sum, email, name')
        ->whereBetween('datepaid', [$startdate, $enddate])
        ->get(); //this return collection 
        //dd($eachpayment);
     return view('Admin.byindividual', compact('eachpayment'));
        }
        else{
        $startdate='1970-01-01';
        //$enddate='2022-08-02';
        $enddate=date('Y-m-d');
        /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
        ->selectRaw('sum(amount) as sum, email, name, created_at')
        ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
        $eachpayment = Dues::groupBy('email', 'name')
        ->selectRaw('sum(amount) as sum, email, name')
        ->whereBetween('datepaid', [$startdate, $enddate])
        ->get(); //this return collection 
        //dd($eachpayment);
     return view('Admin.byindividual', compact('eachpayment'));
        }
         }

         public function byIndividualDetails(Request $request, $email){
            if(!empty($request->startdate)){
            //return $request->input();
            $startdate=$request->startdate;
                $enddate=$request->enddate;
                 /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
            ->selectRaw('sum(amount) as sum, email, name, created_at')
            ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
            $eachpayment = Dues::select('*')
            ->where('email', $email)
            ->whereBetween('datepaid', [$startdate, $enddate])
            ->get(); //this return collection 
            $ind= Dues::where('email', $email)->first();
            $totalamount=Dues::where('email', $email)
            ->whereBetween('datepaid', [$startdate, $enddate])
            ->sum('amount');
            
            //dd($eachpayment);
         return view('Admin.byindividualdetails', compact('eachpayment', 'ind', 'totalamount'));
           
            }
            else{
            $startdate='1970-01-01';
            //$enddate='2022-08-02';
            $enddate=date('Y-m-d');
            /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
            ->selectRaw('sum(amount) as sum, email, name, created_at')
            ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
            $eachpayment = Dues::select('*')
            ->where('email', $email)
            ->whereBetween('datepaid', [$startdate, $enddate])
            ->get(); //this return collection 
            $ind= Dues::where('email', $email)->first();
            $totalamount=Dues::where('email', $email)
            ->whereBetween('datepaid', [$startdate, $enddate])
            ->sum('amount');
            
            //dd($eachpayment);
         return view('Admin.byindividualdetails', compact('eachpayment', 'ind', 'totalamount'));
            }
             }





             public function byUnit(Request $request){
                if(!empty($request->startdate)){
                //return $request->input();
                $startdate=$request->startdate;
                    $enddate=$request->enddate;
                     /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                ->selectRaw('sum(amount) as sum, email, name, created_at')
                ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                $eachpayment = Dues::groupBy('unit')
                ->selectRaw('sum(amount) as sum, unit')
                ->whereBetween('datepaid', [$startdate, $enddate])
                ->get(); //this return collection 
                //dd($eachpayment);
             return view('Admin.byunit', compact('eachpayment'));
                }
                else{
                $startdate='1970-01-01';
                //$enddate='2022-08-02';
                $enddate=date('Y-m-d');
                /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                ->selectRaw('sum(amount) as sum, email, name, created_at')
                ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                $eachpayment = Dues::groupBy('unit')
                ->selectRaw('sum(amount) as sum, unit')
                ->whereBetween('datepaid', [$startdate, $enddate])
                ->get(); //this return collection 
                //dd($eachpayment);
             return view('Admin.byunit', compact('eachpayment'));
                }
                 }
        
                 public function byUnitDetails(Request $request, $unit){
                    if(!empty($request->startdate)){
                    //return $request->input();
                    $startdate=$request->startdate;
                        $enddate=$request->enddate;
                         /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                    ->selectRaw('sum(amount) as sum, email, name, created_at')
                    ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                    $eachpayment = Dues::select('*')
                    ->where('unit', $unit)
                    ->whereBetween('datepaid', [$startdate, $enddate])
                    ->get(); //this return collection 
                    $ind= Dues::where('unit', $unit)->first();
                    $totalamount=Dues::where('unit', $unit)
                    ->whereBetween('datepaid', [$startdate, $enddate])
                    ->sum('amount');
                    
                    //dd($eachpayment);
                 return view('Admin.byunitdetails', compact('eachpayment', 'ind', 'totalamount'));
                   
                    }
                    else{
                    $startdate='1970-01-01';
                    //$enddate='2022-08-02';
                    $enddate=date('Y-m-d');
                    /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                    ->selectRaw('sum(amount) as sum, email, name, created_at')
                    ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                    $eachpayment = Dues::select('*')
                    ->where('unit', $unit)
                    ->whereBetween('datepaid', [$startdate, $enddate])
                    ->get(); //this return collection 
                    $ind= Dues::where('unit', $unit)->first();
                    $totalamount=Dues::where('unit', $unit)
                    ->whereBetween('datepaid', [$startdate, $enddate])
                    ->sum('amount');
                    
                    //dd($eachpayment);
                 return view('Admin.byunitdetails', compact('eachpayment', 'ind', 'totalamount'));
                         }
                     }

                     public function byLocation(Request $request){
                        if(!empty($request->startdate)){
                        //return $request->input();
                        $startdate=$request->startdate;
                            $enddate=$request->enddate;
                             /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                        ->selectRaw('sum(amount) as sum, email, name, created_at')
                        ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                        $eachpayment = Dues::groupBy('location')
                        ->selectRaw('sum(amount) as sum, location')
                        ->whereBetween('datepaid', [$startdate, $enddate])
                        ->get(); //this return collection 
                        //dd($eachpayment);
                     return view('Admin.bylocation', compact('eachpayment'));
                        }
                        else{
                        $startdate='1970-01-01';
                        //$enddate='2022-08-02';
                        $enddate=date('Y-m-d');
                        /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                        ->selectRaw('sum(amount) as sum, email, name, created_at')
                        ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                        $eachpayment = Dues::groupBy('location')
                        ->selectRaw('sum(amount) as sum, location')
                        ->whereBetween('datepaid', [$startdate, $enddate])
                        ->get(); //this return collection 
                        //dd($eachpayment);
                     return view('Admin.bylocation', compact('eachpayment'));
                        }
                         }
                
                         public function byLocationDetails(Request $request, $location){
                            if(!empty($request->startdate)){
                            //return $request->input();
                            $startdate=$request->startdate;
                                $enddate=$request->enddate;
                                 /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                            ->selectRaw('sum(amount) as sum, email, name, created_at')
                            ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                            $eachpayment = Dues::select('*')
                            ->where('location', $location)
                            ->whereBetween('datepaid', [$startdate, $enddate])
                            ->get(); //this return collection 
                            //$ind= Dues::where('unit', $unit)->first();
                            $dname=$location;
                            $totalamount=Dues::where('location', $location)
                            ->whereBetween('datepaid', [$startdate, $enddate])
                            ->sum('amount');
                            
                            //dd($eachpayment);
                         return view('Admin.bylocationdetails', compact('eachpayment', 'dname', 'totalamount'));
                           
                            }
                            else{
                            $startdate='1970-01-01';
                            //$enddate='2022-08-02';
                            $enddate=date('Y-m-d');
                            /*$eachpayment = Dues::groupBy('email', 'name', 'created_at')
                            ->selectRaw('sum(amount) as sum, email, name, created_at')
                            ->whereBetween('created_at', ['1970-01-01', '2022-08-04'])*/
                            $eachpayment = Dues::select('*')
                            ->where('location', $location)
                            ->whereBetween('datepaid', [$startdate, $enddate])
                            ->get(); //this return collection 
                            //$ind= Dues::where('unit', $unit)->first();
                            $dname=$location;
                            $totalamount=Dues::where('location', $location)
                            ->whereBetween('datepaid', [$startdate, $enddate])
                            ->sum('amount');
                            
                            //dd($eachpayment);
                         return view('Admin.bylocationdetails', compact('eachpayment', 'dname', 'totalamount'));
                                 }
                             } 
}
