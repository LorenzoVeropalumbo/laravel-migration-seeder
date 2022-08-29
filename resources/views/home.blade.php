@extends('layouts.app')

@section('main_content')
    <h1>Le nostre prenotazioni</h1>

    <div>
        @foreach ($travels as $travel)
            {{-- Single house --}}
            <div>
              <div>Data di inizio soggiorno: {{ $travel->stay_start_date }}</div>
              <div>Data di fine soggiorno: {{ $travel->end_of_stay_date }}</div>
              <div>Info genrerali sul viaggio: {{ $travel->order_info }}</div>     
            </div>
            <br>
        @endforeach
    </div>
@endsection