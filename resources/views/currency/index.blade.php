@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12"><h1>Conversor</h1></div>
    </div>
    <div class="row">
       <div class="col-sm-12">
        <form action="{{ url('/conversor') }}" method="POST" class="">
            {{ csrf_field() }}
            <div class="form-row align-items-center">
                <div class="col-auto">
                   
                    <div class="input-group mb-2">
                        <div class="input-group-prepend">
                            <label for="">From</label>
                            <select class="custom-select mr-sm-2" id="fromCurrency" name="fromCurrency">
                                <option selected>From...</option>
                                <option value="USD" {{ $currency == 'USD' ? 'selected' : '' }} >USD</option>
                                <option value="EUR" {{ $currency == 'EUR' ? 'selected' : '' }} >EUR</option>
                                <option value="DOP" {{ $currency == 'DOP' ? 'selected' : '' }} >DOP</option>
                                <option value="COP" {{ $currency == 'COP' ? 'selected' : '' }} >COP</option>
                            </select>
                        </div>
                        <div class="input-group-prepend">
                            <select class="custom-select mr-sm-2" id="toCurrency" name="toCurrency">
                                <option selected>To...</option>
                                <option value="USD" {{ $currency == 'USD' ? 'selected' : '' }} >USD</option>
                                <option value="EUR" {{ $currency == 'EUR' ? 'selected' : '' }} >EUR</option>
                                <option value="DOP" {{ $currency == 'DOP' ? 'selected' : '' }} >DOP</option>
                                <option value="COP" {{ $currency == 'COP' ? 'selected' : '' }} >COP</option>
                            </select>
                        </div>
                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                    </div>
                </div>
               
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
          </form>
       </div>
    </div>
    <div class="row">
        <div class="col-sm-3">
            @if (session('value'))
                <div class="alert alert-success mt-3 p-4 text-center" role="alert">
                    {{ session('value') }}
                </div>                
            @endif
            @if (session('error_message'))
                <div class="alert alert-danger mt-3 p-4 text-center" role="alert">
                    {{ session('error_message') }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
