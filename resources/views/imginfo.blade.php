@extends('layouts.app')

@section('content')
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha256-L/W5Wfqfa0sdBNIKN9cG6QA5F2qx4qICmU2VgLruv9Y=" crossorigin="anonymous" />
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-3 mt-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Laravel 7 Image Upload - NiceSnippets.com</h4>
                    </div>
                    <div class="card-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-block">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <form action="{{ route('image.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label><strong>Report Card : </strong></label>
                                <input type="file" name="report_card" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><strong>Birth Certificate : </strong></label>
                                <input type="file" name="birth_cert" class="form-control">
                            </div>
                            <div class="form-group">
                                <label><strong>Admission Payment : </strong></label>
                                <input type="file" name="gcash_payment" class="form-control">
                            </div>
                            <div class="form-group text-center">
                                <input type="submit" class="btn btn-success" name="submit" value="Save">
                            </div>
                        </form>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
