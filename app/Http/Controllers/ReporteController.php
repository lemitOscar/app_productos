<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPJasper\PHPJasper;

class ReporteController extends Controller
{
    public function reporteProductos(){
        /*$input = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports\ReporteProducto.jrxml';   
        $jasper = new PHPJasper;
        $jasper->compile($input)->execute();*/

        $input = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports\ReporteProducto.jasper';  
        $output = 'C:\Users\Francisco\JaspersoftWorkspace\MyReports';    
        $options = [
            'format' => ['pdf', 'rtf', 'xls', 'xlsx', 'docx', 'odt', 'ods', 'pptx', 'csv', 'html', 'xhtml', 'xml', 'jrprint'],
            'locale' => 'en',
            'params' => ['ID_USER' => Auth::user()->id],
            'db_connection' => [
                'driver' => 'postgres',
                'username' => 'postgres',
                'password' => 'root',
                'host' => 'localhost',
                'database' => 'app_productos',
                'port' => '5432'
            ]
        ];

        $jasper = new PHPJasper;

        $jasper->process(
                $input,
                $output,
                $options
        )->execute();

        return response()->file($output.'\ReporteProducto.pdf');


        return 'Reporte Productos';
    }
}
