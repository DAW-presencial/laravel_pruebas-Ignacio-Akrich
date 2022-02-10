<?php

namespace App\Http\Controllers;

//import model Alumno
use App\Models\Alumno;
use Illuminate\Http\Request;
//import facades Auth
use Illuminate\Support\Facades\Auth;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //coger los valores de los alumnos
        $alumnos = Alumno::all();

        return view('alumnos.index', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // retornamos el formulario de creacion
        return view('alumnos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //QueryBuilder
        Alumno::create([
            //nombreCampo => $request->input('nombreCampo')
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthdate' => $request->input('birthdate'),
            'subjects' => json_encode($request->input('subjects')),
            'gender' => $request->input('gender'),
            'description' => $request->input('description'),
            'repeater' => $request->input('repeater'),
            'image' => $request->hasFile('image') ? $request->file('image')->store('public/images') : '',
            'user_id' => Auth::user()->id

        ]);

        //redireccionamos a la vista de alumnos
        return redirect()->route('alumnos.index');

        //Eloquent
        // if($request->hasFile('image')){
            // $image = $request->file('image')->getClientOriginalName();
            // $request->file('image')->storeAs('public/images',$image);

        // $alumno = new Alumno;
        // $alumno->name = $request->input('name');
        // $alumno->surname = $request->input('surname');
        // $alumno->birthdate = $request->input('birthdate');
        // $alumno->subjects = json_encode($request->input('subjects'));
        // $alumno->gender = $request->input('gender');
        // $pokemon->description = $request->input('description');
        // $pokemon->repeater = $request->input('repeater');
        // $pokemon->image = $image;
        // $pokemon->user_id = Auth::user()->id;
        // $pokemon->save();
        // }

        //RAW SQL
        // $sql = "INSERT INTO alumnos (name, surname, birthdate, subjects, gender, description, repeater, image, user_id) VALUES( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('alumnos.show', compact('alumnos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //coge el alumno y busca por id
        $alumno = Alumno::find($id);
        //pasamos por parametro el alumno
        return view('alumnos.edit', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //QueryBuilder
        Alumno::where('id',$id)->update([
            //nombreCampo => $request->input('nombreCampo')
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'birthdate' => $request->input('birthdate'),
            'subjects' => json_encode($request->input('subjects')),
            'gender' => $request->input('gender'),
            'description' => $request->input('description'),
            'repeater' => $request->input('repeater')
        ]);

        //redireccionamos a la ruta de la vista de alumnos
        return redirect()->route('alumnos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eloquent
        Alumno::destroy($id);
        //redireccionamos a la vista de alumnos
        return redirect()->route('alumnos.index');
    }
}
