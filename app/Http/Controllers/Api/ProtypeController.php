<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Models\TypeProduct;

class ProtypeController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'type_name' => 'required|max:255',
        ]);
    }
    /**
     * Get type product
     */
    public function getAllProtype()
    {
        $type = TypeProduct::all();
        return response()->json(['type' => $type]);
    }
    /**
     * Create type product
     */
    public function create(Request $request)
    {
        $validator = $this->validator($request->all());
        //Check data entry conditions
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $type = new TypeProduct;
        $type->type_name = $request->type_name;
        $type->save();
        return response()->json(['message' => 'Successfully created!']);
    }
    /**
     * Create type product
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validator($request->all());
        //Check data entry conditions
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }
        $type = TypeProduct::find($id);
        $type->type_name = $request->type_name;
        $type->save();
        return response()->json(['message' => 'Successfully update!']);
    }
    /**
     * Delete type product
     */
    public function delete($id)
    {
        $type = TypeProduct::find($id);
        $type->delete();
        return response()->json(['message' => 'Successfully delete!']);
    }
}
