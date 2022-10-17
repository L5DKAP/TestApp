<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Ids;

class IdsController extends Controller
{

    public function generate()
    {
        $number = rand();
        $ids = Ids::create(['personal_id' => $number,]);
        return $ids;
    }

    public function retrieve($id)
    {
        return Ids::find($id);
    }
}
