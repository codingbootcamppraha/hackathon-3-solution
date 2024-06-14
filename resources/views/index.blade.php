@extends('layout')

@section('content')

    <main>
        <form class="search-form" action="" method="get">
            
            <a class="new-patient" href="{{ route('animal.create') }}">new patient</a>
            
            <div class="search-bar">
                <label for="search_string">Search Animal:</label>
                
                <input type="text" name="search_string" value="{{ $searchString }}" placeholder="Enter name">
                
                <input type="submit" value="Search">

            </div>
        </form>

        @if (!empty($animals))
            <div class="results">

                @foreach ($animals as $animal)

                    <div class="result">
                        <a href="{{ route('animal.show', [$animal->id]) }}">
                            <div class="img">
                                <img src="{{ asset('/images/pets/'.$animal->image->path) }}" alt="{{ $animal->name }} photo" />
                            </div>
                            <div>
                                <div class="name">{{ $animal->name }}</div>
                                <div class="type">{{ $animal->breed }} ({{ $animal->species }})</div>
                                @if ($animal->owner)
                                    <div class="owner"><span>Owned by</span> {{ $animal->owner->first_name . ' ' . $animal->owner->surname }}</div>
                                @endif
                            </div>
                        </a>
                    </div>

                @endforeach

            </div>

            <div class="pagination">
                {{ $animals->links() }}
            </div>
        @endif

    </main>

@endsection
