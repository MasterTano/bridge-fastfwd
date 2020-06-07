@extends('layouts.app')

@section('content')
    <div class="container">
        <matched-table :customers="{{ $matchedCustomer }}"></matched-table>

        <un-matched-table :customers="{{ $unMatchedCustomer }}"></un-matched-table>
    </div>
@endsection('content')

