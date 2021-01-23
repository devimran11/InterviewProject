<?php

namespace App\Http\Controllers\Backend;

use App\Address;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendSetupController extends Controller
{
    public function index(){
        return view('backend.layouts.home');
    }
    public function viewAddress(){
        $viewAddresses = Address::all();
        return view('backend.address.view_address', compact('viewAddresses'));
    }
    public function addAddress(){
        return view('backend.address.add_address');
    }
    public function saveAddress(Request $request){
        $photo = $request->file('image');
        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|unique:addresses',
        ]);
        $saveAddress = new Address();
        $image_full_name = time() .'.'.$photo->getClientOriginalExtension();
        $location = 'backend/upload/images/';
        $img_url = $location.$image_full_name;
        $photo->move($location, $image_full_name);
        $saveAddress['name'] = $request['name'];
        $saveAddress['phone'] = $request['phone'];
        $saveAddress['email'] = $request['email'];
        $saveAddress['address'] = $request['address'];
        $saveAddress['image'] = $img_url;
        $saveAddress->save();
        return redirect('/view-address')->with('message', 'Address Information Save Successfully');
    }
    public function editAddress($id){
        $editAddress = Address::find($id);
        return view('backend.address.edit_address', compact('editAddress'));
    }
    public function updateAddress(Request $request, $id){
        $photo = $request->file('image');
        if($photo){
            $updateAddress = Address::find($id);
            unlink($updateAddress['image']);
            $image_full_name = time().'.'.$photo->getClientOriginalExtension();
            $location = 'backend/upload/images/';
            $img_url = $location . $image_full_name;
            $photo->move($location, $image_full_name);
            $updateAddress['name'] = $request['name'];
            $updateAddress['phone'] = $request['phone'];
            $updateAddress['email'] = $request['email'];
            $updateAddress['address'] = $request['address'];
            $updateAddress['image'] = $img_url;
            $updateAddress->update();
            return redirect('/view-address')->with('message', 'Your address successfully updated');
        }else{
            $updateAddress = Address::find($id);
            $updateAddress['name'] = $request['name'];
            $updateAddress['phone'] = $request['phone'];
            $updateAddress['email'] = $request['email'];
            $updateAddress['address'] = $request['address'];
            $updateAddress->update();
            return redirect('/view-address')->with('message', 'Your address successfully updated');
        }
    }
    public function deleteAddress($id){
        $deleteAddress = Address::find($id);
        unlink($deleteAddress['image']);
        $deleteAddress->delete();
        return redirect('/view-address')->with('message', 'Address deleted successfully');
    }
}
