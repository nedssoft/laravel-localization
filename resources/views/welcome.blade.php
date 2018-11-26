@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>@lang("Hi there!")</h1>
        <div class="col-md-offset-2">
            <p>{{ __("I hope this meets you well.")}}</p>
            <p>{{ __("Let's talk about Localization in Laravel, trust me, it's an awesome topic. Notwithstanding, not many have come to realize this awesomeness.")}}</p>
            <p>{{ __("Localization according to the dictionary, means adapting something to a fixed position or location. It therefore suffices to say that Laravel localization involves adapting the language used in the app to the given location of the user.")}}</p>
        </div>
        <p>{{ __("This might not make much sense to you but you've got no reason to worry. Nothing said here should be argued about because the idea is just to make up words for the purpose of testing this tutorial.")}}</p>

    </div>
@endsection