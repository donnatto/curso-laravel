@extends('layouts.base')

@section('content')
    <div class="row">
        <div class="col">
            <h1>Send Report</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">

            <a class="btn btn-secondary" href="/expense_reports">Back</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="/expense_reports/{{ $report->id }}/sendMail" method="POST">
                @csrf
                <div class="form-group">
                    <label for="mail">Email:</label>
                    <input type="text" name="mail" class="form-control" id="mail" placeholder="Type an email" value="{{ old('mail') }}">
                </div>
                <button type="submit" class="btn btn-primary">Send mail</button>
            </form>
        </div>
    </div>
@endsection