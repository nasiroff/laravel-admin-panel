<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\DepartmentRequest;
use Illuminate\Http\Request;

use App\Models\Department;
use Illuminate\Support\Facades\Input;


class DepartmentController extends Controller {


	public function index(Request $request)
	{
        $departmentsCount = Department::count();
        $pageCount = ceil($departmentsCount/10);
        if ($request->get('page') > $pageCount){
            return redirect()->to("department?page={$pageCount}");
        }else{
            $departments = Department::paginate(10);
		    return view('pages.departments-list')->with('departments', $departments);
        }
	}

	public function create(DepartmentRequest $request)
	{
        $department = [
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ];
	    $isInserted = Department::insert($department);
        if ($isInserted){
            return redirect()->route('department.index')->with('message', "Last department inserted successfully");
        }
	    return back()->withInput()->withErrors();
	}

	public function createPage(){
        return view('pages.create-department');
    }

	public function store(Request $request)
	{
	     $this->validate($request, [

            'name' => 'required|max:100',
            'description' => 'required',

		 ]);
		 
		$department = new Department();

		$department->name = $request->input('name');
		$department->description = $request->input('description');

		$department->save();

		return redirect()->route('department.index')->with('message', 'Item created successfully.');
	}



	public function edit($id)
	{
		$department = Department::findOrFail($id);

		return view('pages.edit-department', compact('department',$department));
	}


	public function update($id, DepartmentRequest $request)
	{
        $department = [
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ];

		if (Department::where('id', $id)->update($department)){
            return redirect()->route('department.index')->with('message', 'Item updated successfully.');
        }

        return back()->withInput()->withErrors();

	}

	public function destroy($id)
	{
		$department = Department::findOrFail($id);
		$department->delete();

        if (!$department->exists) {
            return redirect()->back()->with('message', 'Succes fully deleted');
        }


    }

}
