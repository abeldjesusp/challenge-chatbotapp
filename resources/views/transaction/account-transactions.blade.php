@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-10">
            <h1>Transactions</h1>
        </div>
        <div class="col-sm-2">
            <a href="{{ url('/transactions/'.Request::segment(3)).'/create' }}" class="btn btn-primary">Make transaction</a>
        </div>
    </div>
    <div class="row">
        @foreach ($transactions as $transaction)
            <div class="col-sm-4 mb-3">
                            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Transaction #{{ $transaction->id }}</h5>
                        <p class="card-text"><b>Amount: </b>{{ $transaction->amount }}</p>
                        <p class="card-text"><b>Balance: </b>{{ $transaction->balance }}</p>
                        <p class="card-text"><b>Description: </b>{{ $transaction->description }}</p>
                        <h6 class="card-subtitle">{{ $transaction->created_at }}</h6>
                    </div>
                </div>
            </div>
        @endforeach        
    </div>
</div>
@endsection
