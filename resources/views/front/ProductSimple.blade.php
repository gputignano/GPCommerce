@extends('layouts.amp')

@section('title', __('Product'))

@section('amp-components')
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
@endsection

@section('content')
    @include('front.inc.header')

    @include('front.inc.nav')

    <main id="main">
        <h1>{{ __('Product Name') }}</h1>

        <amp-img
            alt="Image for the product"
            src="https://picsum.photos/200/200"
            width="200"
            height="200"
            layout="responsive"
        ></amp-img>

        <div>
            <span>{{ __('Price:') }} &euro; 9,90</span>
            <span>{{ __('Quantity Available:') }} &euro; 15</span>
        </div>

        <form action-xhr="https://www.example.com" method="post">
            <input type="submit" value="{{ __('Add to Cart') }}" class="btn btn-primary white stretch">
        </form>

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti iste autem doloribus sed eaque dolorum perspiciatis dolores. Consequatur corrupti, magnam, provident omnis, placeat inventore numquam praesentium iste a nam ut.</p>
    </main>

    <aside id="aside">
        <h2>{{ __('Sidebar') }}</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque delectus reiciendis architecto dolorum inventore laborum odit magni repellat odio doloribus earum corrupti labore sit praesentium, tempora impedit sequi repellendus facere.</p>
    </aside>

    @include('front.inc.footer')
@endsection
