<?php

namespace App\Http\Controllers;

use App\Models\Tenant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class GlobalTenantController extends Controller
{
    public function index()
    {
        return view('global.index');
    }


    public function store(Request $request)
    {
        $attribute = $request->validate([
                                            'name' => ['string', 'required'],
                                        ]);
        $name = $attribute['name'];
        Tenant::create([
            'name'=>$name,
            'domain'=>$name.'.multi.com',
            'database'=>Str::random(10)
                       ]);
        return back()->with('success','Tenant has been created');
    }

    public function update()
    {

    }
}
