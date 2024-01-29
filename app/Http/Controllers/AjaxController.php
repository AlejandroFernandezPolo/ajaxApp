<?php
namespace App\Http\Controllers;

use App\Models\Pais;
use Illuminate\Http\Request;

class AjaxController extends Controller {

    function main() {
        
        $paises = Pais::all();
        return view('main', $paises);
        
    }    
}