<?php

namespace App\Http\Controllers;

use App\Models\Alumnos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

class alumnoscontroller extends Controller
{
    public function index(){
        return view('crud.home');
        
    }
    public function store(Request $request){
       $file = $request->file('avatar'); 
        $fileName = time() . '.' . $file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);

        $empData = [
            'matri' => $request->matri,
            'name' => $request-> name,
            'apep' => $request-> apep,
            'apem' => $request-> apem,
            'email' => $request-> email,
            'fnac' => $request-> fnac,
            'phone'=> $request-> phone,
            'avatar' => $fileName
        ];

       Alumnos::create($empData);
       return response()->json([
        'status' => 200        
       ]);
       return redirect()-> route ('index');
    }
 //handle fetch all alumnos ajax request

    public function fetchAll(){
        $emps = Alumnos::all();
        $output='';
        if($emps->count() >0 ){
            $output .= '<table class="table table-striped table-sm text-center aling-middle">
            <thead> 
                <tr>
                    <th>ID</th>
                    <th>Avatar</th>
                    <th>Nombre</th>
                    <th>E-mail</th>
                    <th>Fecha Nacimiento</th>
                    <th>Telefono</th>
                    <th>Accion</th>
                </tr>           
            </thead>
            <tbody>';
            foreach($emps as $emp){
                $output .= '<tr> 
                    <td>'.$emp->id.'</td>
                    <td><img src="storage/images/'.$emp->avatar.'" width="50"
                        class="img-thumbnail rounded-circle"></td>
                    <td>'.$emp->name.' '.$emp->apep.' '.$emp->apem.'</td>
                    <td>'.$emp->email.' </td>
                    <td>'.$emp->fnac.' </td>
                    <td>'.$emp->phone.' </td>
                    <td>

                    <a href="#" id="'.$emp->id.'" class="text-success mx-1 editIcon" 
                    data-bs-toggle="modal" data-bs-target="#editEmployeeModal"> <i 
                    class="bi-pencil-square h4"></i></a>
                    
                    <a href="#" id"'.$emp->id.'" class="text-danger mx-1 deleteIcon"><i class="bi-trash h4"></i></a>
                    </td>
                </tr>';
            }
            $output .= '</tbody></table>';
            echo $output;
        }else {
            echo '<h1> class="text-center text-secondary my-5">Ningun registro presente en la base de datos!</a>';
        }
        }
    
//handle edit alumnos ajax request
    public function edit(Request $request) {
        $id = $request->id;
        $emp = Alumnos::find($id);
        return response()->json($emp);
        return redirect()-> route ('index');
    }
//handle update alumnos ajax request
public function update(Request $request){
    $fileName = '';
    $emp = Alumnos::find($request->emp_id);
    if($request->hasFile('avatar')){
        $file = $request->file('avatar');
        $fileName = time().'.'.$file->getClientOriginalExtension();
        $file->storeAs('public/images', $fileName);
        if($emp->avatar){
            Storage::delete('public/images/' . $emp->avatar);
        }
    }else {
        $fileName = $request->emp_avatar;
    }
    $empData = [
        'matri' => $request->matri,
        'name' => $request-> name,
        'apep' => $request-> apep,
        'apem' => $request-> apem,
        'email' => $request-> email,
        'fnac' => $request-> fnac,
        'phone'=> $request-> phone,
        'avatar' => $fileName
    ];
    $emp->update($empData);
    return response()->json([
        'status' => 200
    ]);
    return redirect()-> route ('index');
}
//handle delete alumnos ajax request
    public function delete(Request $request){
        $id = $request->id;
        $emp = Alumnos::find($id);
        if(Storage::delete('public/images/' . $emp->avatar)) {
            Alumnos::destroy($id);

        }
        return redirect()-> route ('index');
    }
}
