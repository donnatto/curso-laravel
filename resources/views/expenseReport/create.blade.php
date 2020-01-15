@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>New Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <form action="/expense_reports" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="Type a title">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection