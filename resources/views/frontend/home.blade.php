@extends('frontend.layouts.frontend')
@section('title', __('messages.home'))
@section('content')
    @include('frontend.home.hero')
    @include('frontend.home.about-us')
    @include('frontend.home.translation-excellence')
    @include('frontend.home.key-advantages')
    @include('frontend.home.specialized-services')
    @include('frontend.home.who-we-serve')
    @include('frontend.home.why-choose-us')
    @include('frontend.home.our-certified-capacities')
    @include('frontend.home.languages-heading')
    @include('frontend.home.faq')
@endsection
@push('script')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll(".count");
            const speed = 150; // smaller = faster

            const animateCount = (counter) => {
                const target = +counter.getAttribute("data-target");
                const count = +counter.innerText;
                const increment = target / speed;

                if (count < target) {
                    counter.innerText = Math.ceil(count + increment);
                    setTimeout(() => animateCount(counter), 20);
                } else {
                    counter.innerText = target.toLocaleString();
                }
            };

            // Trigger animation when visible
            const observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("visible");
                        animateCount(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(counter => observer.observe(counter));
        });
    </script>
@endpush
