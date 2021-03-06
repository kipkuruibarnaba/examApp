@extends('layouts.app')
@section('content')
    @include('includes.flash-message')
    @include('includes.errors')
    <div class="card">
        <div class="card-header">
            Create Questions Category
        </div>
        <div class="card-body">
             <form action="#" method="">
            {{-- <form action="{{ route('storequestionnaire') }}" method="post"> --}}
                @csrf
                <div class="form-group">
                    <label for="Category">Question Category</label>
                    <input type="text" class="form-control" name="category" id="category" placeholder="Enter the Category" required>
                     <small id="categoryHelp" class="form-text text-muted">Give a category that attracts attention.</small>
                </div>
                <div class="form-group">
                    <label for="purpose">Purpose</label>
                    <input type="text" class="form-control" name="purpose" id="purpose" placeholder="Enter the Purpose" required>
                    <small id="purposeHelp" class="form-text text-muted">Give a purpose that increases response.</small>                   
                </div>
                <button class="btn btn-info float-right" id="submitCategory">Save Category</button>
                {{-- <button class="btn btn-info float-right" type="submit">Save Category</button> --}}
            </form>
        </div>
    </div>       
@endsection