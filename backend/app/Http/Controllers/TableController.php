<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TableController extends Controller
{
    // Bootstrap Table
    public function table()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['name' => "Table Bootstrap"]];
        return view('/content/table/table-bootstrap/table-bootstrap', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }

    // Datatable Basic
    public function bid_list()
    {
        $breadcrumbs = [['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Basic"]];
        return view('/content/bid/bidstate');
    }

    // Datatable Basic
    public function datatable_advance()
    {
        $breadcrumbs = [
            ['link' => "/", 'name' => "Home"], ['link' => "javascript:void(0)", 'name' => "Datatable"], ['name' => "Advanced"]
        ];
        return view('/content/table/table-datatable/table-datatable-advance', [
            'breadcrumbs' => $breadcrumbs
        ]);
    }
}
