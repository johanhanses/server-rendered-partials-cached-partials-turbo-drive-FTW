<?php

use App\Models\Invoice;
use Illuminate\Support\Facades\Route;

Route::view("/account", "account");
Route::view("/profile", "profile");

//Route::redirect('/profile', '/account');

Route::get('/', function () {
    return view('invoices', [
        "cachedInvoicesPartial" => Cache::get("partials.invoices")
    ]);
});

Route::get('/partials/invoices', function () {
    return Cache::remember("partials.invoices", $seconds = 10, function () {
        return view('_invoices', [
            "invoices" => Invoice::all()
        ])->render();
    });
});
