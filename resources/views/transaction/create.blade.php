@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12 text-center"><h1>Make transaction</h1></div>
    </div>
    <div class="row justify-content-center mt-5">
        
        <div class="col-sm-4">
            <form action="{{ url('/transactions') }}" method="POST" class="">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="amount">Amount</label>
                  <input type="number" class="form-control" id="amount" name="amount" >
                </div>
                
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                </div>
                <input type="text" value="{{ $id }}" hidden name="id">
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>     
    </div>
</div>
@endsection
