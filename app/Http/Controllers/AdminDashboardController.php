<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Employee;

use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{
    public function index() {
        $totalEmployees = Employee::count();
        $totalDepartments = Department::count();
        $activeEmployees = Employee::where('is_active', true)->count();
        $inactiveEmployees = Employee::where('is_active', false)->count();

        return view('admin.dashboard',compact(
            'totalEmployees',
            'totalDepartments',
            'activeEmployees',
            'inactiveEmployees'
        ));
    }
}
