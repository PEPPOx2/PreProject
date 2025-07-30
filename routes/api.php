<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// ตัวอย่าง route API แบบง่าย
Route::get('/hello', function () {
    return response()->json(['message' => 'Hello API!']);
});

// ตัวอย่างรับ Request และส่ง Response JSON
Route::post('/data', function (Request $request) {
    $data = $request->all();
    return response()->json(['received' => $data]);
});
