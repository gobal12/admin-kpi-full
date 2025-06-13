<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController; // Menggunakan BaseController dari Laravel
use App\Models\Employee;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin, hr, manager');
    }

    public function index()
    {
        $employeesCount = Employee::count();
        $summaryKPI = $this->getKpiSummary();

        return view('dashboard', compact('employeesCount', 'summaryKPI'));
    }

    private function getKpiSummary()
    {
        return Employee::select('unit_project', DB::raw('count(*) as total'))
                        ->groupBy('unit_project')
                        ->get();
    }
}
