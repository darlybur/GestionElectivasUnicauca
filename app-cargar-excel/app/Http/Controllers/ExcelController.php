<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function exportUsers(){
        \Excel::create('Users', function($excel) {
 
            $users = User::all();
         
            $excel->sheet('Users', function($sheet) use($users) {
         
            $sheet->fromArray($users);
            
            $sheet->row(1, [
                'Número', 'Nombre', 'Email', 'Fecha de Creación', 'Fecha de Actualización'
            ]);
            foreach($users as $index => $user) {
                $sheet->row($index+2, [
                    $user->id, $user->name, $user->email, $user->created_at, $user->updated_at
                ]); 
            }
        });
         
        })->export('xlsx');
    }
    public function importUsers(Request $request)
    {
        \Excel::load($request->excel, function($reader) {
    
            $excel = $reader->get();
    
            // iteracción
            $reader->each(function($row) {
    
                $user = new User;
                $user->name = $row->nombre;
                $user->email = $row->email;
                $user->password = bcrypt('secret');
                $user->save();
    
            });
        
        });
    
        return "Terminado";
    }
}
