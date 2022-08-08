<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReportController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FrontController::class, 'index']);
Route::get('/Home', [FrontController::class, 'index']);
Route::get('/About', [FrontController::class, 'about']);
Route::get('/Service', [FrontController::class, 'service']);
Route::get('/ContactUs', [FrontController::class, 'contactUs']);
Route::get('/News', [FrontController::class, 'news']);
Route::get('/NewsDetails/{id}', [FrontController::class, 'newsDetails']);
Route::get('Admin/Dashboard', [MainController::class, 'adminDashboard']);
Route::get('Admin/login', [UserController::class, 'login']);
Route::post('Admin/checklogin', [UserController::class, 'checklogin']);
Route::get('logout', [UserController::class, 'logout']);
Route::get('Admin/RegMember', [MainController::class, 'regMember']);
Route::get('Admin/AddNews', [MainController::class, 'addNews']);
Route::get('Admin/ViewNews', [MainController::class, 'viewNews']);
Route::get('Admin/NewsDetails/{id}', [MainController::class, 'newsDetails']);
Route::get('Admin/EditNews/{id}', [MainController::class, 'editNews']);
Route::post('postaddnews', [MainController::class, 'insertNews']);
Route::post('posteditnews/{id}', [MainController::class, 'postEditNews']);
Route::get('Admin/DeleteNews/{id}', [MainController::class, 'deleteNews']);
Route::post('postregmember', [MainController::class, 'insertMember']);
Route::get('Admin/ViewMembers', [MainController::class, 'viewMembers']);
//Route::get('Admin/SearchedResults', [MainController::class, 'viewMembers']);
Route::get('Admin/MemberProfile/{id}', [MainController::class, 'memberProfile']);
Route::get('Admin/EditMember/{id}', [MainController::class, 'editMember']);
Route::post('posteditmember/{id}', [MainController::class, 'postEditMember']);
Route::get('Admin/DeleteMember/{id}', [MainController::class, 'deleteMember']);
Route::get('Admin/RegLocation', [MainController::class, 'regLocation']);
Route::get('Admin/ViewLocations', [MainController::class, 'viewLocations']);
Route::post('postreglocation', [MainController::class, 'insertLocation']);
Route::get('Admin/LocationDetails/{locationname}', [MainController::class, 'locationDetails']);
Route::get('Admin/RegUnit', [MainController::class, 'regUnit']);
Route::get('Admin/ViewUnits', [MainController::class, 'viewUnits']);
Route::post('postregunit', [MainController::class, 'insertUnit']);
Route::get('Admin/UnitDetails/{unitname}', [MainController::class, 'unitDetails']);
Route::get('Admin/AddMinutes', [MainController::class, 'addMinutes']);
Route::get('Admin/ViewMinutes', [MainController::class, 'viewMinutes']);
Route::get('Admin/MinutesDetails/{id}', [MainController::class, 'minutesDetails']);
Route::get('Admin/EditMinutes/{id}', [MainController::class, 'editMinutes']);
Route::post('postaddminutes', [MainController::class, 'insertMinutes']);
Route::post('posteditminutes/{id}', [MainController::class, 'postEditMinutes']);
Route::get('Admin/DeleteMinutes/{id}', [MainController::class, 'deleteMinutes']);
Route::get('Admin/AddMemo', [MainController::class, 'addMemo']);
Route::get('Admin/ViewMemo', [MainController::class, 'viewMemo']);
Route::get('Admin/MemoDetails/{id}', [MainController::class, 'memoDetails']);
Route::get('Admin/EditMemo/{id}', [MainController::class, 'editMemo']);
Route::post('postaddmemo', [MainController::class, 'insertMemo']);
Route::post('posteditmemo/{id}', [MainController::class, 'postEditMemo']);
Route::get('Admin/DeleteMemo/{id}', [MainController::class, 'deleteMemo']);
Route::post('searchdata', [MainController::class, 'searchData']);
Route::get('searchdata', [MainController::class, 'searchData']);
Route::get('Admin/AddExpenses', [MainController::class, 'addExpenses']);
Route::get('Admin/ViewExpenses', [MainController::class, 'viewExpenses']);
Route::get('Admin/ExpensesDetails/{id}', [MainController::class, 'expensesDetails']);
Route::get('Admin/EditExpenses/{id}', [MainController::class, 'editExpenses']);
Route::post('postaddexpenses', [MainController::class, 'insertExpenses']);
Route::post('posteditexpenses/{id}', [MainController::class, 'postEditExpenses']);
Route::get('Admin/DeleteExpenses/{id}', [MainController::class, 'deleteExpenses']);
Route::post('postduepayment', [MainController::class, 'postDuePayment']);
//Route::get('postmembermail','MailController@postMemberMail');
Route::post('postmembermail', 'App\Http\Controllers\MailController@postMemberMail');
Route::get('Admin/EmailBroadcast', [MailController::class, 'emailBroadcast']);
Route::post('postemailbroadcast', [MailController::class, 'postEmailBroadcast']);
Route::get('Admin/ByIndividual', [ReportController::class, 'byIndividual']);
Route::post('Admin/postbyindividual', [ReportController::class, 'byIndividual']);
Route::get('Admin/postbyindividual', [ReportController::class, 'byIndividual']);
Route::get('Admin/ByIndividualDetails/{email}', [ReportController::class, 'byIndividualDetails']);
Route::post('Admin/postbyindividualdetails/{email}', [ReportController::class, 'byIndividualDetails']);
Route::get('Admin/postbyindividualdetails/{email}', [ReportController::class, 'byIndividualDetails']);
Route::get('Admin/ByUnit', [ReportController::class, 'byUnit']);
Route::post('Admin/postbyunit', [ReportController::class, 'byUnit']);
Route::get('Admin/postbyunit', [ReportController::class, 'byUnit']);
Route::get('Admin/ByUnitDetails/{unit}', [ReportController::class, 'byUnitDetails']);
Route::post('Admin/postbyunitdetails/{unit}', [ReportController::class, 'byUnitDetails']);
Route::get('Admin/postbyunitdetails/{unit}', [ReportController::class, 'byUnitDetails']);
Route::get('Admin/ByLocation', [ReportController::class, 'byLocation']);
Route::post('Admin/postbylocation', [ReportController::class, 'byLocation']);
Route::get('Admin/postbylocation', [ReportController::class, 'byLocation']);
Route::get('Admin/ByLocationDetails/{location}', [ReportController::class, 'byLocationDetails']);
Route::post('Admin/postbylocationdetails/{location}', [ReportController::class, 'byLocationDetails']);
Route::get('Admin/postbylocationdetails/{location}', [ReportController::class, 'byLocationDetails']);
//Route::post('postemailbroadcast', 'App\Http\Controllers\MailController@postEmailBroadcast');
Route::get('sendbasicemail', 'App\Http\Controllers\MailController@basic_email');
Route::get('sendhtmlemail', 'App\Http\Controllers\MailController@html_email');
//Route::get('sendhtmlemail','MailController@html_email');
Route::get('sendattachmentemail','MailController@attachment_email');


