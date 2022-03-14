<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // recuperare dati dal database e passaarli alla view
       $comics = Comic::all();
        // dd($dati);
        return view("comics.index", compact("comics"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $newComic = new Comic();

        // FILL
        // Il fill passa tutti i miei dati come array associativo, me se vogliamo usarlo bisogna creare una variabile che dica a Laravel quali sono i campi a cui vogliamo permettere la modifica.
        // Creare nel Model una variabile "protected $fillable=[]", creando un array di chiavi che voglio permettere.
        // Se l'array che riceve contiene centomila chiavi diverse i sono sicuro che solo queste chiavi verranno prese in considerazione e solo queste verranno compilate.
        
        // Quindi con il fill avvviene un riempimento delle colonne in modo automatico passando solo l'array dei data:
        $newComic->fill($data);

        // Riempimento delle colonne manuale, assegnando un valore alla volta.
        
        // $newComic->title = $data["title"];
        // $newComic->description = $data["description"];
        // $newComic->thumb = $data["thumb"];
        // $newComic->price = $data["price"];
        // $newComic->series = $data["series"];
        // $newComic->sale_date = $data["sale_date"];
        // $newComic->type = $data["type"];

        $newComic->save();

        return redirect()->route("comics.show", $newComic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int int
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int int
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  int
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int int
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
