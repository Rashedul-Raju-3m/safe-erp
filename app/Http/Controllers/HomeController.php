<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\User\Models\Member;
use App\Modules\Deposite\Models\Deposite;
use App\Modules\Expense\Models\Expense;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $all_member = Member::orderBy('id','desc')
                    ->where('status','active') 
                    ->select('*')
                    ->get();

        $member_count = Member::orderBy('id','desc')
                    ->where('status','active') 
                    ->count();

        $deposite = Deposite::where('status', 'active')
                        ->select('*')
                        ->get();

        $current_total = 0;
        $current_month_deposite = Deposite::where('status', 'active')
                        ->where('month',date("F"))
                        ->where('year',date("Y"))
                        ->select('amount')
                        ->get();
        foreach ($current_month_deposite as $value) {
            $current_total = $current_total+$value['amount'];
        }

        $input['expense_month'] = date("F");
        $input['expense_year'] = date("Y");
        // Get current month year expense data
        $curr_mon_year_expense_data = Expense::orderBy('id','desc')
                ->where('status','active')
                ->where('expense_month',date("F"))
                ->where('expense_year',date("Y"))
                ->select('*')
                ->get();
        $current_expense_total = 0;
        foreach ($curr_mon_year_expense_data as $value) {
            $current_expense_total = $current_expense_total+$value['amount'];
        }

        // Get total expense data
        $total_expense_data = Expense::orderBy('id','desc')
                ->where('status','active')
                ->select('*')
                ->get();
        $total_expense = 0;
        foreach ($total_expense_data as $value) {
            $total_expense = $total_expense+$value['amount'];
        }

        // echo "<pre>";
        // print_r($total_expense_data);
        // echo $total_expense;
        // exit();

        return view("backend.admin.index", compact('all_member','member_count','deposite','current_total','current_expense_total','total_expense'));
    }
}
