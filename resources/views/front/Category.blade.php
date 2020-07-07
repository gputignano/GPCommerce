@extends('layouts.amp')

@section('title', __('Category'))

@section('amp-components')
    <script async custom-element="amp-form" src="https://cdn.ampproject.org/v0/amp-form-0.1.js"></script>
@endsection

@section('content')
    @include('front.inc.header')

    @include('front.inc.nav')

    <main id="main">
        <h1>{{ __('Category Name') }}</h1>

        <div id="products">
            @for ($i = 0; $i < 9; $i++)
                <section>
                    <h2><a href="{{ url('product') }}">{{ __('Product Name') }}</a></h2>
                    <amp-img
                        alt="Image for the product"
                        src="https://picsum.photos/200/200"
                        width="200"
                        height="200"
                        layout="responsive"
                    ></amp-img>
                    <form action-xhr="{{ url('/') }}" method="post">
                        <input type="submit" value="{{ __('Add') }}" class="btn btn-primary white stretch">
                    </form>
                </section>
            @endfor
        </div>
    </main>

    <aside id="aside">
        <h2>{{ __('Sidebar') }}</h2>

        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum rerum molestias, hic, quae vel provident assumenda pariatur sint magnam id earum nobis enim corrupti asperiores iure quis deserunt, nulla aliquam!</p>
    </aside>

    @include('front.inc.footer')
@endsection
