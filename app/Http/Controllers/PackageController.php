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

    public function postPackage() {
        return Package::create(request()->all());
    }
}
