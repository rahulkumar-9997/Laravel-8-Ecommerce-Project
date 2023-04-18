<?php
namespace App\Http\Controllers\Backend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use DB;
use Hash;
use Illuminate\Support\Str;
use Mail; 
use Carbon\Carbon;
class DashboardController extends Controller
{
    public function index(){
	return view('backend.dashboard.index');
    }
}