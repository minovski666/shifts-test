<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Shift::select('worker')->groupBy('worker')->get();
        return view('employee', compact('employees'));
    }

    public function viewEmployee($employee)
    {
        $singleEmployee = Shift::where('worker', $employee)->get();
        $pay_per_hour = [];
        $totalPay = [];

        foreach ($singleEmployee as $single) {
            $pay_per_hour[] = str_replace('£', '', $single['rate_per_hour']);
            $totalPay[] = (int)str_replace('£', '', $single['rate_per_hour']) * (int)$single['hours'];
        }
        $averagePayPerHour = array_sum($pay_per_hour) / count($pay_per_hour);
        $averageTotalPay = array_sum($totalPay) / count($totalPay);
        $newData = [
            'name' => $singleEmployee[0]['worker'],
            'average_pay_per_hour' => $averagePayPerHour,
            'average_total_pay' => $averageTotalPay,
            'last_5' => Shift::where('worker', $employee)->where('status', 'Complete')->orderBy('id', 'DESC')->limit(5)->get()
        ];
        return view('single_employee', compact('newData'));
    }
}
