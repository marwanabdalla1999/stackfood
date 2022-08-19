<?php

namespace App\Http\Controllers\Api\V1;

use App\CentralLogics\Helpers;
use App\customer;
use App\Http\Controllers\Controller;
use App\Models\otherShops;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class otherShopsController extends Controller
{
    public function request_order(Request $request)
    {
        if ($request->shop_name && $request->order && $request->user_id) {

            otherShops::Create([
                'order' => $request->order,
                'shop' => $request->shop_name,
                'customer_id' => $request->user_id
            ]);
            return 'order has been sent';

        }
        else{
            return 'error in data entered';

        }

    }


}
