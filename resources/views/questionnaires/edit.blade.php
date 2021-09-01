@extends('layouts.app')
@section('content')
    @include('includes.flash-message')
    @include('includes.errors')
    <div class="card">
        <div class="card-header">
            Edit Questions Category
        </div>
        <div class="card-body">
            {{-- <form action="#" method=""> --}}
                <form action="{{ route('updatequestions',$category ->id) }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Category">Question Category</label>
                    <input type="text" class="form-control" name="category" id="category" value="{{$category->title}}"
                        required>
                    <small id="categoryHelp" class="form-text text-muted">Give a category that attracts attention.</small>
                </div>
                <div class="form-group">
                    <label for="purpose">Purpose</label>
                    <input type="text" class="form-control"  name="purpose" id="purpose" value="{{$category->purpose}}"
                        required>
                    <small id="purposeHelp" class="form-text text-muted">Give a purpose that increases response.</small>
                </div>
                {{-- <button class="btn btn-info float-right" id="submitCategory">Save Category</button> --}}
                <button class="btn btn-success float-right" type="submit">Update Category</button>
            </form>
        </div>
    </div>
@endsection
