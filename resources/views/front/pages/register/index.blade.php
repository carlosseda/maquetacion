@extends('front.layout.master_without_header')

@section("content")

    @if($agent->isDesktop())
        <div class="page-section">
            @include("front.components.desktop.page_header")
            @include("front.pages.register.desktop.register")
        </div>
    @endif

    @if($agent->isMobile())
        <div class="page-section">
            @include("front.pages.register.mobile.register")
        </div>
    @endif
@endsection
        