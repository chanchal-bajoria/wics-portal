@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Play</div>

                <div class="card-body">
                    @if(Auth::user()->level < count(config('app.qs')))
                    <h3 class="text-center">Level {{ Auth::user()->level }}</h3>
                    <form method="POST" action="{{ route('attempt') }}">
                        @csrf
                        {!! $q !!}
                        <div id="winput" class="text-center mt-3">
                            <input type="text" name="answer" size="15" autocomplete="off" required>
                        </div>
                        <br>
                        <div class="form-group row mb-0 ">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary">
                                    Shoot
                                </button>
                            </div>
                        </div>
                    </form>
                    @else
                    <div class="text-center">
                        <h3>You did it!</h3>
                        You have finished the cryptic hunt! Thank you for you participation in the fundraiser, hope you had fun!
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function()
{
    $('#winput input').first().focus();

    
    /*$(document).on('keyup', '#winput input', function()
    {
        if($(this).val().length == $(this).attr('maxlength'))
        {
            $(this).next().focus();
        }
    });
    */ 
});
</script>
@endsection
