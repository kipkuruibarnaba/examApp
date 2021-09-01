@extends('layouts.app')
@section('content')
    <div class="card">
      @include('includes.flash-message')
        <div class="card-header">
            Questions Categories
        </div>
        <div class="card-body">
          @if (count($categories) <= 0)
          <div class="text-danger h4"> Create Questions Categories First!</div>     
          @else

          {{-- Summary  --}}
          <div class="row ">
            <div class="col mb-3">
              <div class="card " style="background-color: #E8F6EF">
                <div class="card-body">
                  Number of Categories <span class="badge badge-info">{{$stats['categories']}}</span>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card" style="background-color: #FCF0C8">
                <div class="card-body">
                  Number of Questions <span class="badge badge-info">{{$stats['questions']}}</span>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card" style="background-color: #C8C6C6">
                <div class="card-body">
                  Number of Participants <span class="badge badge-info">{{$stats['participants']}}</span>
                </div>
              </div>
            </div>
            <div class="col mb-3">
              <div class="card" style="background-color: #F3F1F5">
                <div class="card-body">
                  Number of Answers <span class="badge badge-info">{{$stats['answers']}}</span>
                </div>
              </div>
            </div>
          </div>


            <table class="table table-bordered table-sm">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Purpose</th>
                    <th scope="col">Add Question</th>
                    <th scope="col">View</th>
                    <th scope="col">Operation</th>
                  </tr>
                </thead>
                <tbody>
                 @foreach ($categories as $category)
                  <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td>{{$category->title}}</td>
                    <td>{{$category->purpose}}</td>
                    <td>
                        <a href="{{route('category.get',$category ->id)}}" class="btn btn-secondary btn-sm">Add Question</a>
                    </td>
                    <td>
                      <a href="{{route('viewquestions.get',$category ->id)}}" class="btn btn-success btn-sm">View</a>
                    </td> 
                    <td>
                      <a href="{{route('editquestion',$category ->id)}}" class="btn btn-warning btn-sm">Edit</a>                     
                      <a href="{{route('deletequestion',$category ->id)}}" class="btn btn-danger btn-sm">delete</a>
                    </td>                                                           
                  </tr>
                @endforeach
                </tbody>
              </table>
              @endif
        </div>
    </div>       
@endsection
