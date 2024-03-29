<div class="log-visit">

    <h1>Create a visit:</h1>

    <div class="visit-content">
        @if (count($errors) > 0)
            <div class="error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (Session::has('success_message'))
            <div class="success">
                {{ Session::get('success_message') }} Visit scheduled!
            </div>
        @endif

        @if ($visit->id !== null)

            <form class="visit-form" action="{{ route('visit.update', ['id' => $visit->id]) }}" method="post">
                @method('put')

        @else

            <form class="visit-form" action="{{ route('visit.store', ['animal_id' => $animal->id]) }}" method="post">
            
        @endif

            @csrf


            <div class="form-group{{ $errors->has('happened_at') ? ' has-errors' : '' }}">

                <label for="">When</label>

                @if ($errors->has('happened_at'))
                    <ul class="errors">
                        @foreach ($errors->get('happened_at') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <input type="date" name="happened_at" value="{{ old('happened_at', $visit->happened_at) }}">

            </div>

            <div class="form-group{{ $errors->has('report') ? ' has-errors' : '' }}">

                <label for="">Report</label>

                @if ($errors->has('report'))
                    <ul class="errors">
                        @foreach ($errors->get('report') as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <textarea name="report" cols="30" rows="5">{{ old('report', $visit->report) }}</textarea>

            </div>

            <div class="form-group form-actions">

                <input type="submit" value="Save visit">

            </div>

        </form>
    </div>


</div>