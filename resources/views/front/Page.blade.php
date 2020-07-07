@extends('layouts.amp')

@section('title', __('Page'))

@section('content')
    @include('front.inc.header')

    @include('front.inc.nav')

    <main id="main">
        <h1>{{ __('Page Name') }}</h1>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis, explicabo neque eius ducimus est aspernatur pariatur facilis? Libero eligendi excepturi error, nam et dolorum culpa illum praesentium saepe cupiditate harum.</p>
    </main>

    <aside id="aside">
        <h2>{{ __('Sidebar') }}</h2>

        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam error doloribus quisquam consequatur est fugiat commodi, sint cupiditate laborum aspernatur laudantium explicabo quae tenetur atque quidem velit unde distinctio rem?</p>
    </aside>

    @include('front.inc.footer')
@endsection
