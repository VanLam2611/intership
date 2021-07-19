<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\TypeProduct;

class ProtypeController extends Controller
{
    /**
     * Check user status: logged in or not?
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'type_name' => 'required|max:255',
        ]);
    }

    //Get all type product
    public function getAllProtype()
    {
        $type = TypeProduct::all();
        return view('home.protype', ['type' => $type]);
    }

    /**************************
     * Create type product    *
     **************************/
    //Product type creation page
    public function createPage()
    {
        //return is view create of type product
        return view('createProtype');
    }

    //Method product type creation
    public function createProtype(Request $request)
    {
        $validator = $this->validator($request->all());
        //Check data entry conditions
        if ($validator->fails()) {
            return Redirect::to('home/protype/create')->withInput()->withErrors($validator);
        } else {
            $type = new TypeProduct;
            $type->type_name = $request->type_name;
            $type->save();
            return Redirect::to('home/protype');
        }
        return Redirect::to('home/protype/create')->withInput()->withErrors("Type name of product is wrong!");
    }

    /***************************
     * Update of type product  *
     ***************************/
    //Product type update page
    public function updatePage($id)
    {
        //Find the type of product to update
        $type = TypeProduct::find($id);
        return view('updateProtype', ['protype' => $type]);
    }

    //Method product type update page
    public function updateProtype(Request $request, $id)
    {
        //Find the type of product to update
        $type = TypeProduct::find($id);
        $validator = $this->validator($request->all());
        //Check data entry conditions
        if ($validator->fails()) {
            return Redirect::to('home/protype/update/{type_id}')->withInput()->withErrors($validator);
        } else {
            //Save data after update
            $type->type_name = $request->type_name;
            $type->save();
            return view('protype');
        }
        return Redirect::to('home/protype/update/{type_id}')->withInput()->withErrors("Type name of product is wrong or not empty!");
    }

    /************************
     * Delete type product  *
     ************************/
    public function deleteProtype($id){
        //Find the type of product to delete
        $type = TypeProduct::find($id);
        $type->delete();
        return Redirect::to('home/protype');
    }
}
