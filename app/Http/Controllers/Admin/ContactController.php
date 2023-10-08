<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Contact;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;
use DB;
class ContactController extends Controller
{
    public function index(Request $request)
    {
        $Contacts = Contact::orderBy('id', 'DESC')->get();
        return view('admin.contact.index', compact('Contacts'));
    }

    
}
