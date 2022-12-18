@extends('layouts.blank')

@section('title', 'Page Title')


@section('content')
<div class="row justify-content-center ">
    <div class="col-md-9 card">

        <form method="post" action="{{route('card.shuffle')}}">
            @csrf
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                Value is invalid
            </div>
            @endif
            <div class="form-group">
                <label> Number of People</label>
                <input type="text" class="form-control @error('num_of_people') is-invalid @enderror" id="num_of_people"
                    name="num_of_people" placeholder="Number of People" value="{{ old('num_of_people') }}">
                @error('num_of_people')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@if(isset($result))
<div class="row justify-content-center ">
    <div class="col-md-9 card">
        <div class="card-header">
            Result
        </div>
        <div class="card-body">
            @foreach ($result as $res)

            @foreach ($res as $r)
            {{$r}},
            @endforeach
            <br/>




            @endforeach

            @php
           // var_dump($result);
            @endphp

        </div>

    </div>
</div>
@endif
@stop