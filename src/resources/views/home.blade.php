@extends('layouts.app')

@section('content')
    <div class="container">
        <x-matched-table :data="$matchedCustomer"></x-matched-table>

        <x-unmatched-table></x-unmatched-table>
    </div>
@endsection('content')

