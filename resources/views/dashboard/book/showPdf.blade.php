@extends('dashboard.layouts.dashboardmain')
@section('title', 'Create Book')
@section('content')
    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 m-auto flex-0 lg:w-8/12">
                        <div class="mt-4">
                            <a href="{{ route('book.index') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-dark transition-colors duration-150 bg-white border border-transparent rounded-lg active:bg-yellow-300 hover:bg-yellow-400 focus:outline-none focus:shadow-outline-yellow hover:text-white ni ni-bold-left">
                                Back    
                            </a>
                        </div>
                        <div
                            class="p-3 mt-3 bg-white border border-blue-500 rounded-lg dark:bg-slate-850 dark:border-slate-800">
                            <iframe src="{{ asset('storage/' . $book->pdf) }}"
                                class="w-full rounded-lg h-96" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('dashboard.partials.footer')
    </div>
@endsection
@push('customJS')
    <!-- Argon -->
    <script src="{{ asset('assets/js/sidenav-burger.js') }}"></script>
    <script src="{{ asset('assets/js/fixed-plugin.js') }}"></script>
@endpush
