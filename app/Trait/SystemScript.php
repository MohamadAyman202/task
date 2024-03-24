<?php

namespace App\Trait;

use Carbon\Carbon;
use Spatie\LaravelPdf\Facades\Pdf;

trait SystemScript
{
    public static function export_pdf($data, string $file_name)
    {
        if ($data) {
            $pdf = Pdf::view($file_name, compact("data"))
                ->format('a4')
                ->name("document.pdf");
            return $pdf;
        }
        return redirect()->back()->with("error", "Not Found Data Please Try Again");
    }

    public static function formating_date($date)
    {
        return Carbon::parse($date)->format('Y-m-d g:i:s A');
    }
}
