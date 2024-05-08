<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserRecord;

class UserRecordController extends Controller
{
    public function showUserRecords()
    {
        $userRecords = UserRecord::all();
        return view('records', compact('userRecords'));
    }
}
