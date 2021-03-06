@extends('main')

@section('content')
    <section class="main-header text-center">
        <div class="row">
            <div class="col-lg-12">
                <h1>Welcome</h1>
                <p class="white">This is a little blog about interesting places in Eindhoven</p>
            </div>
        </div>
    </section>
    <section class="text-center">
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Newest places ...</h1>
            </div>
            @for ($i = 0; $i < 4; $i++)
                <div class="col-md-3">
                    <div class="row">
                        <a href="{{'posts/' . $posts[$i]->id}}"><div class="col-md-12 place-square"><h2>{{ $posts[$i]->title }}</h2><p class="small">{{$posts[$i]->excerpt}}</p></div></a>
                    </div>
                </div>
            @endfor
        </div>
    </section>
    <section class="text-center">
        <div class="row">
            <div class="col-md-6 col-md-push-6 square green">
                <h1>Interesting places ...</h1>
            </div>
            @for ($i = 4; $i < 8; $i++)
                <div class="col-md-3 col-md-pull-6">
                    <div class="row">
                        <a href="{{'posts/' . $posts[$i]->id}}"><div class="col-md-12 place-square"><h2>{{ $posts[$i]->title }}</h2><p class="small">{{$posts[$i]->excerpt}}</p></div></a>
                    </div>
                </div>
            @endfor
        </div>
    </section>
    <section class="text-center">
        <div class="row">
            <div class="col-md-6 square blue">
                <h1>Old but gold ...</h1>
            </div>
            @for ($i = 8; $i < 12; $i++)
                <div class="col-md-3">
                    <div class="row">
                        <a href="{{'posts/' . $posts[$i]->id}}"><div class="col-md-12 place-square"><h2>{{ $posts[$i]->title }}</h2><p class="small">{{$posts[$i]->excerpt}}</p></div></a>
                    </div>
                </div>
            @endfor
        </div>
    </section>
    <!--<section class="contact">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="text-center">Contact us</h1>
                {!! Form::open(array('route' => 'posts.store')) !!}
                    {{ Form::label('title', 'Title: ') }}
                    {{ Form::text('title', null, array('class' => 'form-control')) }}
                    {{ Form::label('description', 'Description: ') }}
                    {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                    {{ Form::submit('Submit', array('class' => 'btn btn-lg btn-block', 'style' => 'margin-top: 25px')) }}
                {!! Form::close() !!}
            </div>
        </div>
    </section>-->
@endsection