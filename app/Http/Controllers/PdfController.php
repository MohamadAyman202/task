<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Trait\SystemScript;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    use SystemScript;
    public function index()
    {
        return view('welcome');
    }
    public function pdf()
    {
        $data = User::query()->orderBy('created_at', 'DESC')->get();
        return self::export_pdf($data, 'pdf-document');
    }
}
