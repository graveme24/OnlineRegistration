@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Primary Information/Family Details</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('createp') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Father') }}</label>

                            <div class="col-md-6">
                                <input id="namef" type="text" class="form-control @error('namef') is-invalid @enderror" name="namef" value="{{ old('namef') }}" required autocomplete="namef" autofocus>

                                @error('namef')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name of Mother') }}</label>

                            <div class="col-md-6">
                                <input id="namem" type="text" class="form-control @error('namem') is-invalid @enderror" name="namem" value="{{ old('namem') }}" required autocomplete="namem" autofocus>

                                @error('namem')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gname" class="col-md-4 col-form-label text-md-right">{{ __('Name of Guardian') }}</label>

                            <div class="col-md-6">
                                <input id="gname" type="text" class="form-control @error('gname') is-invalid @enderror" name="gname" value="{{ old('gname') }}" required autocomplete="gname" autofocus>

                                @error('gname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Occupation of Father') }}</label>

                            <div class="col-md-6">
                                <input id="occuf" type="text" class="form-control @error('occuf') is-invalid @enderror" name="occuf" value="{{ old('occuf') }}" required autocomplete="occuf" autofocus>

                                @error('occuf')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="contact" class="col-md-4 col-form-label text-md-right">{{ __('Occupation of Mother') }}</label>

                            <div class="col-md-6">
                                <input id="occum" type="text" class="form-control @error('occum') is-invalid @enderror" name="occum" value="{{ old('occum') }}" required autocomplete="occum" autofocus>

                                @error('occum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Gender:</label>
                                <div class="col-md-6">
                                <input type="radio" name="gender" value="Male"> Male<br>
                                <input type="radio" name="gender" value="Female"> Female<br>
                                <input type="radio" name="gender" value="N/A"> N/A<br>               
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
