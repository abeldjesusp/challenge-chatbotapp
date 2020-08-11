@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12"><h1>Accounts</h1></div>
    </div>
    <div class="row">
        @foreach ($accounts as $account)
        <div class="col-sm-4 mb-3">
            <a href="{{  route('account-transactions', ['account' => $account]) }}" style="text-decoration: none;">            
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $account->account_name }}</h5>
                        <p class="card-text"><b>Number: </b>{{ $account->account_number }}</p>
                        <p class="card-text"><b>Balance: </b>{{ $account->balance }}</p>
                        <p class="card-text"><b>Currency: </b>{{ $account->currency }}</p>
                        <h6 class="card-subtitle">{{ $account->created_at }}</h6>
                        <a href="{{ route('accounts.edit', ['account' => $account]) }}" class="card-link">Edit</a>
                    </div>
                </div>
            </a>

        </div>
        @endforeach        
    </div>
</div>
@endsection
