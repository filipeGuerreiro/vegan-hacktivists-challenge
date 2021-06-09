@extends('layout')

    @section('content')
    <h1 class="text-center my-5">
        <a href="http://localhost:80" class="text-dark">
            Q &amp; A
        </a>
    </h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">

                <form class="pb-3 border-bottom mb-3" action="http://localhost:80/questions" method="POST">
                    @csrf
                    @if($errors->any())
                    <div class="notification is-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        <textarea name="question" class="form-control" placeholder="{!! $placeholder !!}">{{ old('question') }}</textarea>
                    </div>

                    <div class=" text-right">
                        <button class="btn btn-primary" type="submit">
                            Ask away
                        </button>
                    </div>
                </form>

                <h2 class="mb-3 p-3 bg-primary text-white">Questions</h2>

                @foreach ($questions as $q)

                <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3">
                    <h3 class="m-0">
                        <a href="http://localhost:80/questions/{{ $q->id }}" class="text-dark">
                            {{ $q->title }}
                        </a>
                    </h3>
                    <div>
                        <span class="badge badge-primary">
                            {{ $q->answers }} {{ $q->answers ==  1 ? 'answer' : 'answers' }}
                        </span>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </div>
    @endsection
