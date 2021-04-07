<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPJasper\PHPJasper;

class ReporteController extends Controller
{
    public function reporteProductos(){
        $input = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports\ReporteProducto.jasper';  
        $output = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports';    
        $options = [
            'format' => ['pdf'],
            'locale' => 'en',
            'params' => ['ID_USER' => Auth::user()->id],
            'db_connection' => [
                'driver' => 'postgres',
                'username' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'host' => env('DB_HOST'),
                'database' => env('DB_DATABASE'),
                'port' => env('DB_PORT'),
            ]
        ];

        $jasper = new PHPJasper;

        return $jasper->process(
                $input,
                $output,
                $options
        )->output();

        return response()->file($output.'\ReporteProducto.pdf');
    }

    public function compilarReporte(){
        $input = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports\ReporteProducto.jrxml';   
        $jasper = new PHPJasper;
        $jasper->compile($input)->execute();

        return 'Reporte Compilado';
    }
}
