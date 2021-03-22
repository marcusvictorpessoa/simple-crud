<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();

        return response()->json($customer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:191',
            'medical_record' => 'max:20',
            'phone' => 'max:20',
            'cel' => 'max:20',
            'zipcode' => 'max:191',
            'address' => 'max:191',
            'complement' => 'max:191',
            'address_number' => 'max:191',
            'district' => 'max:191',
            'state' => 'max:255',
            'city' => 'max:191',
            'birth' => 'max:191',
            'age' => 'max:191',
            'gender' => 'max:191',
            'rg' => 'max:191',
            'organ_rg' => 'max:191',
            'cpf' => 'max:20'
        ]); 

        if ($validator->fails()){
            $errors = $validator->errors();

            return response()->json($errors, 400);
        }

        $customer = Customer::create($request->all());

        return response()->json($customer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:6|max:191',
            'medical_record' => 'max:20',
            'phone' => 'min:10|max:20',
            'cel' => 'max:20',
            'zipcode' => 'max:191',
            'address' => 'max:191',
            'complement' => 'max:191',
            'address_number' => 'max:191',
            'district' => 'max:191',
            'state' => 'max:255',
            'city' => 'max:191',
            'birth' => 'max:191',
            'age' => 'max:191',
            'gender' => 'max:191',
            'rg' => 'max:191',
            'organ_rg' => 'max:191',
            'cpf' => 'max:20'
        ]); 

        if ($validator->fails()){
            $errors = $validator->errors();

            return response()->json($errors, 400);
        }

        $customer->update($request->all());

        return response()->json($customer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $deleted = $customer->delete();

        return response()->json("Customer deleted!");
    }
}
