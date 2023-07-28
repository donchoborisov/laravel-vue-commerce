<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Enums\AddressType;
use Illuminate\Http\Request;
use App\Models\CustomerAddress;

class ProfileController extends Controller
{

    public function view(Request $request)
    {

        /** @var \App\Models\User $user */
            $user = $request->user();

        /** @var \App\Models\Customer $customer */
        $customer = $user->customer;
        $shippingAddress = $customer?->shippingAddress ?: new CustomerAddress(['type' => AddressType::Shipping]);
        $billingAddress = $customer?->billingAddress ?: new CustomerAddress(['type' => AddressType::Billing]);

        $countries = Country::query()->orderBy('name')->get();

        // dd($customer, $shippingAddress->attributesToArray(), $billingAddress, $billingAddress->customer);

        return view('profile.view', compact('customer', 'user', 'shippingAddress', 'billingAddress', 'countries'));
    }
}
