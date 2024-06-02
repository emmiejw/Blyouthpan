@php
    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Request;
@endphp

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        @if (session('status'))
                            <div class="bg-purple-100 border border-purple-700 text-pink-700 px-4 py-3 rounded relative" role="alert">
                                <span class="block sm:inline">{{ session('status') }}</span>
                                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                                <svg class="fill-current h-6 w-6 text-pink-700" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                              </span>
                            </div>
                        @endif
                        @php
                            $currentPath = Request::path();
                        @endphp
                        @if(Auth::user())
                            <div class="block">
                                <ul class="flex">
                                    @if($currentPath === 'home')
                                        <li class="mr-6">
                                            <button class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                                <a class="text-blue-950" href="{{ url('/content') }}">Website Content</a>
                                            </button>
                                        </li>
                                        <li class="mr-6">
                                            <button class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                                <a class="text-blue-950" href="{{ url('/managers') }}">Managers & Coaches</a>
                                            </button>
                                        </li>
                                    @endif
                                    @if($currentPath === 'managers')
                                        <li class="mr-6">
                                            <button class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                                <a class="text-blue-950" href="{{ url('/content') }}">Website Content</a>
                                            </button>
                                        </li>
                                    @endif
                                    @if($currentPath === 'content')
                                        <li class="mr-6">
                                            <button class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                                <a class="text-blue-950" href="{{ url('/managers') }}">Managers & Coaches</a>
                                            </button>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        @endif
                        @switch($currentPath)
                            @case('managers')
                                <h1 class="mt-4 text-center font-bold text-2xl">Managers</h1>
                                @include('managers.index')
                                @break
                            @case('content')
                                <h1 class="mt-4 text-center font-bold text-2xl">Content</h1>
                                @include('content.index')
                                @break
                            @default
                        @endswitch
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
