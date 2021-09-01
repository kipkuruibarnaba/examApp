<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Questionnaire;
use App\Question;
use Illuminate\Support\Facades\Auth;

class QuestionnaireController extends Controller
{

 public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('questionnaires.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Questionnaire = new Questionnaire;
        $Questionnaire->user_id = auth::user()->id;
        $Questionnaire->title = $request->category;
        $Questionnaire->purpose = $request->purpose;
        $Questionnaire->save();

        // // return redirect(url('/'))->with('success', 'Category created successfully');
        return response()->json(['message'=>'data saved successfully']);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $questionnaires = Questionnaire::all();
        return view('questionnaires.show', compact('questionnaires'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Questionnaire::find($id);
         return view('questionnaires.edit', compact('category'));
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
      $updatedCategory = @Questionnaire::where(['id'=>$id])->update([
          'user_id' => auth::user()->id,
          'title' => $request->category,
          'purpose' => $request->purpose
        ]);
        return redirect(url('/'))->with('success', 'Category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
