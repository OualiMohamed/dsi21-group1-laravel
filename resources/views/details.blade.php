@extends('layouts.app')

@section('contenu')
    <h1>This is details page</h1>

    <div>
        @unless(count($details) === 0)
            <ul>
                @foreach ($details as $detail)
                    <li>{{ $detail }}</li>
                @endforeach
            </ul>
        @else
            <p>We don't have any detail</p>
        @endunless
    </div>

    <div>
        @php
            $count = 2;
        @endphp

        @for ($i = 0; $i < $count; $i++)
            <p>The current value is {{ $i }}</p>
        @endfor
    </div>
    <div>
        <ul>
            @forelse ($details as $detail)
                <li>{{ $detail }}</li>
            @empty
                <p>We don't have any detail</p>
            @endforelse
        </ul>
    </div>
@endsection
