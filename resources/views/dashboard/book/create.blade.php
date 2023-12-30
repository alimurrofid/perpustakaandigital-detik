@extends('dashboard.layouts.dashboardmain')
@section('title', 'Create Book')
@section('content')
    <div class="w-full p-6 mx-auto">
        <div class="flex flex-wrap -mx-3">
            <div class="w-full max-w-full px-3 flex-0">
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full max-w-full px-3 m-auto flex-0 lg:w-8/12">
                        <div class="my-4">
                            <a href="{{ route('book.index') }}" class="inline-block px-4 py-2 text-sm font-medium leading-5 text-dark transition-colors duration-150 bg-white border border-transparent rounded-lg active:bg-yellow-300 hover:bg-yellow-400 focus:outline-none focus:shadow-outline-yellow hover:text-white ni ni-bold-left">
                                Back    
                            </a>
                        </div>
                        <form class="relative mb-32" style="height: 402px;" action="{{route('book.store')}}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div
                                class="absolute top-0 left-0 flex flex-col visible w-full h-auto min-w-0 p-4 break-words bg-white border-0 shadow-xl opacity-100 dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                <h5 class="mb-0 font-bold dark:text-white">Create Book</h5>
                                <div>
                                    <div class="flex flex-wrap mt-4 -mx-3">
                                        <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                            <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                                                for="title">Title</label>
                                            <input type="text" name="title" placeholder="eg. Filosofi Teras"
                                                class="focus:shadow-primary-outline dark:bg-slate-850 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none">
                                        </div>
                                        <div class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">

                                            <label for="categories"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="categories" name="category_id"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                @foreach ($categories as $category)
                                                @if (old('category_id') == $category->id)
                                                    <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                @else
                                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endif
                                            @endforeach
                                            </select>

                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mt-4 -mx-3">
                                        <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">
                                            <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                                                for="image">Image</label>
                                            <input name="image"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="image" type="file">
                                        </div>
                                        <div class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">
                                            <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                                                for="pdf">PDF</label>
                                            <input name="pdf"
                                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                                                id="pdf" type="file">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap mt-4 -mx-3">
                                        <div class="w-full max-w-full px-3 flex-0 sm:w-6/12">

                                            <form class="max-w-xs mx-auto">
                                                <label for="quantity-input"
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Choose
                                                    quantity:</label>
                                                <div class="relative flex items-center max-w-[8rem]">
                                                    <button type="button" id="decrement-button"
                                                        data-input-counter-decrement="quantity-input"
                                                        class="p-3 bg-gray-100 border border-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 rounded-s-lg h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                        <svg class="w-3 h-3 text-gray-900 dark:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 18 2">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                                        </svg>
                                                    </button>
                                                    <input type="text" name="amount" id="quantity-input" data-input-counter
                                                        aria-describedby="helper-text-explanation"
                                                        class="bg-gray-50 border-x-0 border-gray-300 h-11 text-center text-gray-900 text-sm focus:ring-blue-500 focus:border-blue-500 block w-full py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                        placeholder="999" required>
                                                    <button type="button" id="increment-button"
                                                        data-input-counter-increment="quantity-input"
                                                        class="p-3 bg-gray-100 border border-gray-300 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 rounded-e-lg h-11 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                                        <svg class="w-3 h-3 text-gray-900 dark:text-white"
                                                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                                            fill="none" viewBox="0 0 18 18">
                                                            <path stroke="currentColor" stroke-linecap="round"
                                                                stroke-linejoin="round" stroke-width="2"
                                                                d="M9 1v16M1 9h16" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </form>

                                        </div>
                                        <div class="w-full max-w-full px-3 mt-4 flex-0 sm:mt-0 sm:w-6/12">
                                            <label class="mb-2 ml-1 text-xs font-bold text-slate-700 dark:text-white/80"
                                                for="description">Description</label>
                                            <textarea id="description" rows="4" name="description"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Write your thoughts here..."></textarea>
                                        </div>
                                    </div>
                                    <div class="flex mt-6">
                                        <button type="submit"
                                            class="inline-block px-6 py-3 mb-0 ml-auto text-xs font-bold text-right text-white uppercase align-middle transition-all ease-in border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 bg-gradient-to-tl from-zinc-800 to-zinc-700 leading-pro tracking-tight-rem bg-150 bg-x-25">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
