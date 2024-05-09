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

    public function deleteUserRecord($id)
    {
        $userRecord = UserRecord::findOrFail($id);
        $userRecord->delete();

        return redirect()->route('user-records')->with('success', 'Record deleted successfully.');
    }
}
