<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::all();
      return view ('employee.index')->with('employees', $employees);
    }
    public function create()
    {
        return view('employee.create');
    }

    
    public function store(Request $request)
    {
        $requestData = $request->all();
        Employee::create($requestData);
        return redirect('employee')->with('flash_message', 'Employee Addedd!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employees = Employee::find($id);
        return view('employee.show')->with('employees', $employees);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employees = Employee::find($id);
        return view('employee.edit')->with('employees', $employees);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $input = $request->all();
        $employee->update($input);
        return redirect('employee')->with('flash_message', 'Employee Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Employee::destroy($id);
        return redirect('employee')->with('flash_message', 'employee deleted!'); 
    }
}
