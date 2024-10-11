<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $request=request();
        $query=Library::query();
        $auther_name = $request->query('auther_name');
        $book_name=$request->query('book_name');
        $number_of_page=$request->query('number_of_page');
        $published=$request->query('published');

        if($auther_name ){
            $query->where('auther_name','LIKE',"%{$auther_name}%");
        }
        if($book_name ){
            $query->where('book_name','LIKE',"%{$book_name}%");
        }
      if($published)
      {
        $query->whereDate('published','=',$published);
      }
        $informations=$query->paginate(5);
            // $informations=Library::paginate(5);
        // $informations = Library::all();
        return view('dashboard.library.index', [
            'informations' =>   $informations,
        ]);
    }


    public function create()
    {
        return view('dashboard.library.create');
    }

    public function store(Request $request)
    {
        $request->validate(Library::rulse());
        Library::create($request->all());

        return redirect()->route('libraries.index')->with('success', 'Library created soccesfuly');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $information = Library::find($id);
        return view('dashboard.library.edit', [
            'information' =>   $information,

        ]);
    }

    public function update(Request $request, $id)
    {
        //
        $request->validate(Library::rulse());
        $information = Library::find($id);
        $information->update($request->all());
        return redirect()->route('libraries.index ')->with('update', 'Library updated successfully');
    }

    public function destroy($id)
    {
        $information = Library::find($id);
        $information->delete();
        return redirect()->route('libraries.index ')->with('delete', 'Library deleted successfully');
    }
}
