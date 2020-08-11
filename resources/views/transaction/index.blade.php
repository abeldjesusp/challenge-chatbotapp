@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12"><h1>Transactions</h1></div>
    </div>
    <div class="row">
        @foreach ($transactions as $transaction)
        
        @endforeach        
    </div>
</div>
@endsection
