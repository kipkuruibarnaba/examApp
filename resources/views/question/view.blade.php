@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Questions View
        </div>
        <div class="card-body">
            <p><strong class="">{{$category->title}}</strong></p>
            @if (count($questions)<= 0)
                <p class="text-warning">No Questions have been added Yet</p>
            @else
             @foreach ($questions as $question)   
            <ul class="list-group">
                <li class="list-group-item active">{{$loop->iteration .'-'. $question->question}}</li>
                    @foreach ($question->answer as $answer)
                    <li class="list-group-item">{{$answer->answer}}</li>
                    @endforeach
             </ul>
             @endforeach  
             @endif     
        </div>
    </div>       
@endsection
