@extends('dashboard.layouts.dashboardmain')
@section('title', 'Home')
@section('content')
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">

        <!-- card1-->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-userverif">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total Admin</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="relative text-3xl text-white fa-solid fa-user-check top-3.5 left-0.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-userverif" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Admin
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-productall">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total users</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl  from-red-600 to-orange-600">
                                <i class="relative text-3xl text-white fa-solid fa-users top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-productall" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Semua User
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-totalbook">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total Book</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="relative text-3xl text-white fa-solid fa-gift top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-totalbook" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah semua buku
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <!-- card4 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4"
            data-tooltip-target="tooltip-category">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row ">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p
                                    class="mb-0 font-sans text-lg font-semibold leading-normal uppercase dark:text-white dark:opacity-60">
                                    Total Category</p>
                                <h5 class="text-4xl font-bold dark:text-white counter"></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right">
                            <div
                                class="inline-block w-16 h-16 text-center mt-1.5 rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="relative text-3xl text-white fa-solid fa-boxes-stacked top-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="tooltip-category" role="tooltip"
            class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 tooltip">
            Jumlah Category
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>

    </div>

    @include('dashboard.partials.footer')
@endsection
@push('customJS')
    {{-- countUp.js --}}
    <script src="https://unpkg.com/counterup2@2.0.2/dist/index.js"></script>
    <script>
        const counterUp = window.counterUp.default;

        const callback = entries => {
            entries.forEach(entry => {
                const el = entry.target;
                if (entry.isIntersecting && !el.classList.contains('is-visible')) {
                    counterUp(el, {
                        duration: 1000,
                        delay: 6,
                    });
                    el.classList.add('is-visible');
                }
            });
        };

        const IO = new IntersectionObserver(callback, {
            threshold: 1
        });

        // Mengamati setiap elemen dengan kelas 'counter'
        const elements = document.querySelectorAll('.counter');
        elements.forEach(el => {
            IO.observe(el);
        });
    </script>
@endpush
