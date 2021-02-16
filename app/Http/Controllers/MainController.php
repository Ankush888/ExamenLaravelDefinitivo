<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller{
    
    public function inicio() {
        return view("welcome");
    }
    
    public function migraciones() {
        return view("migraciones");
    }
    
    public function seeders() {
        return view("seeders");
    }
    
    public function mail() {
        return view("mail");
    }
    
}
