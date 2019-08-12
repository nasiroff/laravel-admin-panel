<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Department;
use Illuminate\Http\Request;

use App\Models\Employee;
use Illuminate\Support\Facades\Storage;


class EmployeeController extends Controller
{


    public function index()
    {
        $employees = Employee::paginate(10);
        return view('pages.employee', compact('employees', $employees));
    }


    public function create(EmployeeRequest $request)
    {


        $photoName = md5(uniqid()).".".$request->file('photo')->getClientOriginalExtension();
        $employee = [
            'first_name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'department_id' => $request->input('department'),
            'date_of_birth' => $request->input('date_of_birth'),
            'phone' => $request->input('phone'),
            'photo' => $photoName
        ];


        if (Employee::insert($employee)) {
            $request->file('photo')->storeAs('photos', $photoName , ['disk' => 'public']);
            return redirect()->route('employee.index')->with('message', "Last employee inserted successfully");
        }

        return back()->withInput()->withErrors();

    }

    public function createPage()
    {
        $departments = Department::all(['id', 'name']);
        return view('pages.create-employee')->with('departments', $departments);
    }




    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $departments = Department::all(['id', 'name']);
        return view('pages.update-employee')->with('employee', $employee)->with('departments', $departments);
    }


    public function update($id, EmployeeRequest $request)
    {
        $employeePhoto = Employee::select('photo')->findOrFail($id);

        $employee = [
            'first_name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'department_id' => $request->input('department'),
            'date_of_birth' => $request->input('date_of_birth'),
            'phone' => $request->input('phone')
        ];

        if ($request->hasFile('photo') && $request->file('photo')->isValid()){
            $photoName = md5(uniqid()).".".$request->file('photo')->getClientOriginalExtension();
            $employee['photo'] = $photoName;
            $isUpdated = Employee::where('id', $id)->update($employee);
            if ($isUpdated){
                if (!is_null($employeePhoto->photo)){
                    Storage::disk('public')->delete('photos/' . $employeePhoto->photo);
                }
                $request->file('photo')->storeAs('photos', $photoName , ['disk' => 'public']);
                return redirect()->route('employee.index')->with('message', 'Item updated successfully.');
            }
            return back()->withInput()->withErrors();
        }
        if (Employee::where('id', $id)->update($employee)){
            return redirect()->route('employee.index')->with('message', 'Item updated successfully.');
        }
        return back()->withInput()->withErrors();

    }


    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();


        if (!$employee->exists){
            Storage::disk('public')->delete('photos/' . $employee->photo);
        }

        return redirect()->back()->with('message', 'Succes fully deleted');
    }

}
