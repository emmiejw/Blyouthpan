@extends('layouts.app')

@section('content')
    <div class="w-5/6 m-auto flex flex-col bg-white border shadow-sm rounded-xl dark:bg-grey-500 dark:shadow-neutral-700/70">
        <div class="md:p-3">
            <div class="card-header">
                <h2 class="text-2xl font-semibold leading-tight text-center mb-4">Edit {{ $fixture->name }}</h2>
            </div>
            <form method="post" action="{{ route('fixtures.update', $fixture->id) }}" enctype="multipart/form-data" class="md:w-5/6">
                @method('PATCH')
                @csrf
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                            Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $fixture->name }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="location">
                            Location
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $fixture->location }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="date_time">
                            Date & Time
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ Carbon::parse($fixture->date_time)->toDayDateTimeString() }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="email" id="email" type="email">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button type="submit" class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Update
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
