<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Qoute;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class QouteController extends Controller
{
    public function index(Request $request)
    {
        $Qoutes = Qoute::orderBy('id', 'DESC')->get();
        return view('admin.qoute.index', compact('Qoutes'));
    }

    
}
