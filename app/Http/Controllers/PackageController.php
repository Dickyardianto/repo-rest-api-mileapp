<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function getPackage() {
        return Package::all();
    }

    public function getPackageId($id) {
        return Package::find($id);
    }

    public function postPackage(Request $request) {
        $data = $request->validate([
            'customer_name' => 'required|string|max:100',
            'description'   => 'required|string|max:150',
            'order_name'    => 'required|string|max:10',
        ]);

        return Package::create($data);
    }

    public function putPackage($id) {
        return Package::find($id);
    }

    public function pathPackage(Request $request, $id) {
        $data = $request->validate([
            'customer_name' => 'nullable|string|max:100',
            'description'   => 'nullable|string|max:150',
            'order_name'    => 'nullable|string|max:10',
        ]);
        $findId = Package::find($id);

        if($findId) {
            $findId->update($data);
            return response()->json([
                'status' => true,
                'message' => 'Berhasil ubah data',
                'data' => $findId
            ]);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal ubah data'
            ]);
        }
    }

    public function deletePackage($id) {
        $findId = Package::find($id);
        if($findId) {
            $findId->delete();
            return response()->json([
                'status' => true,
                'message' => 'Berhasil hapus data'
            ]);
        }else {
            return response()->json([
                'status' => false,
                'message' => 'Gagal hapus data'
            ]);
        }
    }

}
