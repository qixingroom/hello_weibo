@extends('layouts.default')

@section('content')
<div class="jumbotron">
    <h1>Hello Laravel</h1>
    <p class="lead">
        你现在所看到的是<a href="https://www.baidu.com"></a>
    </p>
    <p>
        一切，将从这里开始。
    </p>
    <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
    </p>
</div>
@stop
