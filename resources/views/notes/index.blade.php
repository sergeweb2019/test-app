@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Your Notes Listing</div>
                    
{{--                    <div class="card-body ">--}}
{{--                        @if (session('status'))--}}
{{--                            <div class="alert alert-success" role="alert">--}}
{{--                                {{ session('status') }}--}}
{{--                            </div>--}}
{{--                        @endif--}}
{{--                        notes go here!!!--}}
{{--                    </div>--}}

                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Write your note</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <div class="form-check mb-2">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Make it public</label>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="card-body">
                        notes go here!!!
                    </div>


                </div>
            </div>
        </div>
    </div>
    <style>
        .card-body {
            margin:15px 0;
            border-top: 1px solid rgba(0, 0, 0, 0.125);
            border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        }

    </style>
@endsection
@push('scripts')

@endpush

