<?php

namespace App\Http\Controllers;

use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::get();
        $newData = [];

        foreach ($shifts as $shift) {
            $totalPay = (int)str_replace('£', '', $shift['rate_per_hour']) * (int)$shift['hours'];
            $shift['total_pay'] = $totalPay;
            $newData[] = $shift;
        }
        return view('shift', compact('newData'));
    }

    public function shiftImport()
    {
        return view('shift_import');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $fileContents = file($file->getPathname());
        $firstline = true;
        foreach ($fileContents as $line) {
            $data = str_getcsv($line);

            if (!$firstline) {
                Shift::create([
                    'date' => $data[0],
                    'worker' => $data[1],
                    'company' => $data[2],
                    'hours' => $data[3],
                    'rate_per_hour' => $data[4],
                    'taxable' => $data[5],
                    'status' => $data[6],
                    'shift_type' => $data[7],
                    'paid_at' => $data[8],
                ]);
            }
            $firstline = false;
        }

        return redirect('/shift');
    }

    public function create()
    {
        return view('create_shift');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        Shift::create($data);

        return redirect('/shift');
    }

    public function show($id)
    {
        $shift = Shift::findOrFail($id);
        return view('show_shift', compact('shift'));
    }


    public function update(Request $request, $id)
    {
        $shift = Shift::findOrFail($id);
        $shift->fill($request->post())->save();

        return redirect('/shift');
    }

    public function destroy($id)
    {
        $shift = Shift::findOrFail($id);
        $shift->delete();
        return redirect('/shift');
    }

    public function filter(Request $request)
    {
        $shifts = Shift::get();

        $data = [];

        foreach ($shifts as $shift) {
            $totalPay = (int)str_replace('£', '', $shift['rate_per_hour']) * (int)$shift['hours'];
            $shift['total_pay'] = $totalPay;
            $data[] = $shift;
        }

        $newData = [];

        foreach ($data as $record) {
            if ($record['total_pay'] >= $request->filter) {
                $newData[] = $record;
            }
        }

        return view('shift', compact('newData'));
    }
}
