<?php

namespace App\Http\Controllers;

use App\Option;
use App\Question;
use App\Quiz;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       //dd($id);
        //$questions = Question::with('quiz')->get();
        $questions = Question::with('quiz')->where('quiz_id', $id)->get();
//dd($questions);
        return view('questions.index', ['questions'=>$questions, 'quizId'=>$id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        //dd($id);
        $questions =Question::with('quiz')->where('quiz_id', $id)->get();
        return view('questions.create',['questions'=>$questions, 'id'=>$id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $quizId)
    {
        //dd($id);
     // dd($this->generateOptionsData($request->all()));
        $question = new Question();
        $question->question = $request->question;
        $question->description = $request->description;
        $question->quiz_id = $quizId;
       // dd($question);
        $question->save();

        $options = $this->generateOptionsData($request->all());

        foreach($options as $option) {
            $newOption = new Option();
            $newOption->option = $option['name'];
            $newOption->quiz_id = $quizId;
            $newOption->question_id =  $question->id;
            $newOption->is_correct = ($option['is_correct'] == 'yes')?1:0;
            $newOption->save();
        }

//        $data = new Quiz();
       // $data->option = $request->option;
        //$data->is_correct = $request->is_correct;
//        $data->save($options);


        return redirect()->route('index1' , ['id'=>$quizId]);
    }

    public function generateOptionsData($data)
    {
        $newArr = [];
        if(count($data['names'])) {
            foreach($data['names'] as $key=>$name) {
                array_push($newArr, ['name'=>$name, 'is_correct'=>$data['answers'][$key]]);
            }
        }

        return $newArr;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
      //  $question =
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
    }

    public function appear($quizId){
//dd($quizId);
        $questions = Question::with('options')->where('quiz_id', $quizId)->get();
$quiz = Quiz::find($quizId);
      //  dd($quiz);
        return view('questions.view', ['questions'=> $questions , 'quiz'=>$quiz, 'quizId'=>$quizId]);

    }

    public function answer($quizId,Request $request){
//       dump(request()->all());
       // $questions =
        //dd($request);
        $questions = Question::with('options')->where('quiz_id', $quizId)->get();
//dd($questions);
        foreach($questions as $key => $question){
            $option = Option::where('question_id',$question->id)->where('is_correct',true)->first();
//dd($option);
            if($option && $request[$question->id]==$option->id){
                $questions[$key]->is_correct=true;
            }
            else{
                $questions[$key]->is_correct=false;
            }



        }

       // dd($questions);
        return view('questions.answer' ,['questions'=>$questions ,'option'=>$option, 'quizId'=>$quizId] );
    }


}
