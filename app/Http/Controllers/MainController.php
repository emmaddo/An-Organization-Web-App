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

class MainController extends Controller
{
    public function adminDashboard(){
        $customerCount = customer::count();
        $totalExpenses = DB::table('Expenses')->sum('amount');
        $totalCompletedSales = DB::table('Sales')->where('status', 'paid')->sum('amount');
        $posts= DB::table('customer')->orderBy('id', 'DESC')->get();
        //Both Line 251 and commented Line 253 are the same and will both work fine
        //$posts= customer::orderBy('id', 'DESC')->get();
        $pendingOrder = Sales::where('status', 'pending')->count();
        return view('Admin.dashboard', compact('customerCount', 'totalExpenses', 'posts', 'totalCompletedSales', 'pendingOrder'));
    }

      
     public function regMember(){
        $units= DB::table('Units')->orderBy('unitname', 'ASC')->get(); 
        return view('Admin.regmember', compact('units'));
     }


      
 public function insertMember(Request $request){
    //return $request->input();
    $request->validate([
        'name'=>'required',
        'image_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    
    $filename = $request->file('image_name')->getClientOriginalName();
    $image_path = $request->file('image_name')->storeAs('public/front/images/members', $filename);
    $member = new Users();
    $member->email=$request->input('email');
    $member->password=Hash::make($request->input('password'));
    $member->name=$request->input('name');
    $member->phone=$request->input('phone');
    $member->gender=$request->input('gender');
    $member->usertype=$request->input('usertype');
    $member->position=$request->input('position');
    $member->unit=$request->input('unit');
    $member->status='Activated';
    $member->image_name=$request->file('image_name')->getClientOriginalName();
    
    
    
    $member->save();
    return back()->with('success','Member Registered Successfully');
    }

     //this function is to fetch all Members from Users table and display
     public function viewMembers(){
        $posts= DB::table('Users')->get();
       return view('Admin.viewmembers', compact('posts'));
    }

    public function memberProfile($id){
        $viewmember= DB::table('Users')->where('id', $id)->first();
        return view('Admin.memberprofile', compact('viewmember'));
    }
    public function editMember($id){
        $editmember= DB::table('Users')->where('id', $id)->first();
        return view('Admin.editmember', compact('editmember'));
    }

    public function postEditMember($id, Request $request){
        //return $request->input();
     $request->validate([
         'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
           ]);
 
     //$product = new Product();
     $member = Users::findOrFail($request->id);
     if(!empty($request->image_name)){
         $filename = $request->file('image_name')->getClientOriginalName();
         $image_path = $request->file('image_name')->storeAs('public/front/images/members', $filename);
         $member->image_name=$request->file('image_name')->getClientOriginalName();
     }
    $member->name=$request->input('name');
    $member->phone=$request->input('phone');
    $member->gender=$request->input('gender');
    $member->usertype=$request->input('usertype');
    $member->position=$request->input('position');
    $member->unit=$request->input('unit');
     
    $member->save();
     return back()->with('success','Member Profile Updated Successfully'); 
 
     }

     public function deleteMember($id){
        $delquery= DB::table('Users')->where('id', $id)->delete();
        if($delquery){
            return back()->with('success','Member Profile Deleted Sussessfully');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
    
        }
        public function addNews(){
            return view('Admin.addnews');
         }

         public function insertNews(Request $request){
            //return $request->input();
            $request->validate([
                'title'=>'required',
                'intro'=>'required',
                'content'=>'required',
                'image_name' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                ]);
            
            $filename = $request->file('image_name')->getClientOriginalName();
            $image_path = $request->file('image_name')->storeAs('public/front/images/news', $filename);
            $news = new News();
            $news->title=$request->input('title');
            $news->intro=$request->input('intro');
            $news->content=$request->input('content');
            $news->status='Activated';
            $news->image_name=$request->file('image_name')->getClientOriginalName();
            $news->save();
            return back()->with('success','News Added Successfully');
            }
            public function viewNews(){
                $posts= DB::table('News')->get();
                //var_dump('$posts');
               return view('Admin.viewnews', compact('posts'));
            }

            public function newsDetails($id){
                $viewnews= DB::table('News')->where('id', $id)->first();
                return view('Admin.newsdetails', compact('viewnews'));
            }
            public function editNews($id){
                $editnews= DB::table('News')->where('id', $id)->first();
                return view('Admin.editnews', compact('editnews'));
            }
        
            public function postEditNews($id, Request $request){
                //return $request->input();
             $request->validate([
                 'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                   ]);
         
             //$product = new Product();
             $news = News::findOrFail($request->id);
             if(!empty($request->image_name)){
                 $filename = $request->file('image_name')->getClientOriginalName();
                 $image_path = $request->file('image_name')->storeAs('public/front/images/news', $filename);
                 $news->image_name=$request->file('image_name')->getClientOriginalName();
             }
             $news->title=$request->input('title');
             $news->intro=$request->input('intro');
             $news->content=$request->input('content');
             
             
             $news->save();
             return back()->with('success','News Updated Successfully'); 
         
             }
             public function deleteNews($id){
                $delquery= DB::table('News')->where('id', $id)->delete();
                if($delquery){
                    return back()->with('success','News Deleted Sussessfully');
                }
                else{
                    return back()->with('fail','Something went wrong');
                }
            
                }

                public function RegUnit(){
                    return view('Admin.registerunit');
                 }

                 public function insertUnit(Request $request){
                    $request->validate([
                        'unitname'=>'required|unique:Units'
                        
                        ]);
                    $unit = new Units();
                    $unit->unitname=$request->input('unitname');
                    $unit->address=$request->input('address');
                    $unit->save();
                    return back()->with('success','Unit Registered Successfully');
                    }

                    public function viewUnits(){
                        $posts= DB::table('Units')->orderBy('unitname', 'ASC')->get();
                        
                        //$membersnumber =Units::where('status', 'pending')->count();
                        //$membersnumber=DB::table('Units')->selectRaw('*, count(*)')->groupBy('unitname');
                        $membersnumber =DB::table('Users')
                        ->select(DB::raw('count(*) as member_count'))
                        ->groupBy('unit')
                        ->get();
                       //dd($membersnumber);

                       return view('Admin.viewunits', compact('posts', 'membersnumber'));
                    }

                    public function unitDetails($unitname){
                        $posts= DB::table('Users')->where('unit', $unitname)->get();
                        $dist= DB::table('Users')->where('unit', $unitname)->first();
                        $numbermembers =Users::where('unit', $unitname)->count();
                       return view('Admin.viewunitmembers', compact('posts', 'dist', 'numbermembers'));
                    }


                    public function addMinutes(){
                        return view('Admin.addminutes');
                     }
            
                     public function insertMinutes(Request $request){
                       // return $request->input();
                        $request->validate([
                            'topic'=>'required',
                            'content'=>'required',
                            'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                            ]);
                        
                        $minutes = new Minutes();
                        if(!empty($request->image_name)){
                            $filename = $request->file('image_name')->getClientOriginalName();
                            $image_path = $request->file('image_name')->storeAs('public/front/images/minutes', $filename);
                            $minutes->image_name=$request->file('image_name')->getClientOriginalName();
                        }
                        $minutes->topic=$request->input('topic');
                        $minutes->content=$request->input('content');
                        $minutes->save();
                        return back()->with('success','Minutes Added Successfully');
                        }
                        public function viewMinutes(){
                            $posts= DB::table('Minutes')->get();
                            //var_dump('$posts');
                           return view('Admin.viewminutes', compact('posts'));
                        }
            
                        public function minutesDetails($id){
                            $viewminutes= DB::table('Minutes')->where('id', $id)->first();
                            return view('Admin.minutesdetails', compact('viewminutes'));
                        }
                        public function editMinutes($id){
                            $editminutes= DB::table('Minutes')->where('id', $id)->first();
                            return view('Admin.editminutes', compact('editminutes'));
                        }
                    
                        public function postEditMinutes($id, Request $request){
                            //return $request->input();
                         $request->validate([
                             'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                               ]);
                     
                         //$product = new Product();
                         $minutes = Minutes::findOrFail($request->id);
                         if(!empty($request->image_name)){
                             $filename = $request->file('image_name')->getClientOriginalName();
                             $image_path = $request->file('image_name')->storeAs('public/front/images/minutes', $filename);
                             $minutes->image_name=$request->file('image_name')->getClientOriginalName();
                         }
                         
                         $minutes->topic=$request->input('topic');
                         $minutes->content=$request->input('content');
                         
                         
                         $minutes->save();
                         return back()->with('success','Minutes Updated Successfully'); 
                     
                         }
                         public function deleteMinutes($id){
                            $delquery= DB::table('Minutes')->where('id', $id)->delete();
                            if($delquery){
                                return back()->with('success','Minutes Deleted Sussessfully');
                            }
                            else{
                                return back()->with('fail','Something went wrong');
                            }
                        
                            }
        
                            public function addMemo(){
                                return view('Admin.addmemo');
                             }
                    
                             public function insertMemo(Request $request){
                               //return $request->input();
                                $request->validate([
                                    'topic'=>'required',
                                    'content'=>'required',
                                    'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
                                    ]);
                                
                                $memo = new Memo();
                                if(!empty($request->image_name)){
                                    $filename = $request->file('image_name')->getClientOriginalName();
                                    $image_path = $request->file('image_name')->storeAs('public/front/images/memo', $filename);
                                    $memo->image_name=$request->file('image_name')->getClientOriginalName();
                                }
                                $memo->topic=$request->input('topic');
                                $memo->content=$request->input('content');
                                $memo->save();
                                return back()->with('success','Memo Added Successfully');
                                }
                                public function viewMemo(){
                                    $posts= DB::table('Memo')->get();
                                    //var_dump('$posts');
                                   return view('Admin.viewmemo', compact('posts'));
                                }
                    
                                public function memoDetails($id){
                                    $viewmemo= DB::table('Memo')->where('id', $id)->first();
                                    return view('Admin.memodetails', compact('viewmemo'));
                                }
                                public function editMemo($id){
                                    $editmemo= DB::table('Memo')->where('id', $id)->first();
                                    return view('Admin.editmemo', compact('editmemo'));
                                }
                            
                                public function postEditMemo($id, Request $request){
                                    //return $request->input();
                                 $request->validate([
                                     'image_name' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
                                       ]);
                             
                                 //$product = new Product();
                                 $memo = Memo::findOrFail($request->id);
                                 if(!empty($request->image_name)){
                                     $filename = $request->file('image_name')->getClientOriginalName();
                                     $image_path = $request->file('image_name')->storeAs('public/front/images/memo', $filename);
                                     $memo->image_name=$request->file('image_name')->getClientOriginalName();
                                 }
                                 
                                 $memo->topic=$request->input('topic');
                                 $memo->content=$request->input('content');
                                 
                                 
                                 $memo->save();
                                 return back()->with('success','Memo Updated Successfully'); 
                             
                                 }
                                 public function deleteMemo($id){
                                    $delquery= DB::table('Memo')->where('id', $id)->delete();
                                    if($delquery){
                                        return back()->with('success','Memo Deleted Sussessfully');
                                    }
                                    else{
                                        return back()->with('fail','Something went wrong');
                                    }
                                
                                    }   
                                    
                                    public function addExpenses(){
                                        return view('Admin.addexpenses');
                                     }
                            
                                     public function insertExpenses(Request $request){
                                       //return $request->input();
                                       $editexpenses = new Expenses();
                                       $editexpenses->name=$request->input('name');
                                       $editexpenses->description=$request->input('description');
                                       $editexpenses->amount=$request->input('amount');
                                       $editexpenses->save();
                                        return back()->with('success','Expenses Added Successfully');
                                        }
                                        public function viewExpenses(){
                                            $posts= Expenses::get();
                                            //var_dump('$posts');
                                           return view('Admin.viewexpenses', compact('posts'));
                                        }
                            
                                        public function expensesDetails($id){
                                            $viewexpenses= DB::table('Expenses')->where('id', $id)->first();
                                            return view('Admin.expensesdetails', compact('viewexpenses'));
                                        }
                                        public function editExpenses($id){
                                            $editexpenses= DB::table('Expenses')->where('id', $id)->first();
                                            return view('Admin.editexpenses', compact('editexpenses'));
                                        }
                                    
                                        public function postEditExpenses($id, Request $request){
                                        $editexpenses = Expenses::findOrFail($request->id);
                                        $editexpenses->name=$request->input('name');
                                        $editexpenses->description=$request->input('description');
                                        $editexpenses->amount=$request->input('amount');          
                                        $editexpenses->save();
                                         return back()->with('success','Expenses Updated Successfully'); 
                                     
                                         }
                                         public function deleteExpenses($id){
                                            $delquery= DB::table('Expenses')->where('id', $id)->delete();
                                            if($delquery){
                                                return back()->with('success','Expenses Deleted Sussessfully');
                                            }
                                            else{
                                                return back()->with('fail','Something went wrong');
                                            }
                                        
                                            }
                                    
 public function searchData(Request $request){
  // return $request->input();
// Get the search value from the request
    $search = $request->input('search');

    // Search in the user table 
    $posts = Users::query()
        ->where('name', 'LIKE', "%{$search}%")
        ->orWhere('email', 'LIKE', "%{$search}%")
        ->orWhere('phone', 'LIKE', "%{$search}%")
        ->get();
        //dd($posts);
        return view('Admin.viewmembers', compact('posts'));
}

public function postDuePayment(Request $request){
    //return $request->input();
    $month=$request->input('month');
    //dd($month);
    foreach($month as $value){
/*this actually worked
$checkdup= Dues::select('month','year')
->where('month', '=', $request->input('month'))
->where('year', '=', $request->input('year'))
->get();
*/
$checkdup = Dues::where('month', '=', $value)
                ->where('year', '=', $request->input('year'))
                ->where('email', '=', $request->input('email'))
                ->count();
if($checkdup > 0){
    return back()->with('fail','Payment Already Made for month'.' '.$value.' '.'in year'.' '.$request->input('year'));  
}
else{

$dues = new Dues();
    $dues->name=$request->input('name');
    $dues->email=$request->input('email');
    $dues->unit=$request->input('unit');
    $dues->amount=$request->input('amount');
    $dues->month=$value;
    $dues->year=$request->input('year');
    $dues->remarks=$request->input('remarks');
    $dues->datepaid=date('Y-m-d');
    $dues->save();
        }
        }
        return back()->with('success','Payment Made Successfully');  
}


}
