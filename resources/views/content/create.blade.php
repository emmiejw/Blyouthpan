@extends('layouts.app')

@section('content')
    <div class="w-5/6 m-auto flex flex-col bg-white border shadow-sm rounded-xl dark:bg-grey-500 dark:shadow-neutral-700/70">
        <div class="md:p-3">
            <div class="card-header">
                <h2 class="text-2xl font-semibold leading-tight text-center mb-4">Add Content</h2>
            </div>
            <form method="post" action="{{ route('content.store') }}" enctype="multipart/form-data" class="md:w-5/6">
                @csrf
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="title">
                            Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="title" name="title" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="sub_title">
                            Sub Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="sub_title" id="sub_title" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="section_one">
                            Content One
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="section_one" id="section_one" type="text" rows="5"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="content_two">
                            Content Two
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="section_two" id="section_two" type="text" rows="5"></textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_one">
                            Photo One
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="file" name="image_one" id="image_one" class="block md:w-2/3 border border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                        file:bg-gray-50 file:border-0
                        file:me-4
                        file:py-3 file:px-4
                       ">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_one_source">
                            Photo One Caption/Source
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input id="image_one_source" class="py-3 px-4 block bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:ring-neutral-600" name="image_one_source" id="image_one_source">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_two">
                            Photo Two
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="file" name="image_two" id="image_two" class="block md:w-2/3 border border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                        file:bg-gray-50 file:border-0
                        file:me-4
                        file:py-3 file:px-4
                       ">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_two_source">
                            Photo Two Caption/Source
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input id="image_two_source" class="py-3 px-4 block bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:ring-neutral-600" name="image_two_source" id="image_two_source">
                    </div>
                </div>
                <div class="md:flex md:items-center">
                    <div class="md:w-1/3"></div>
                    <div class="md:w-2/3">
                        <button type="submit" class="shadow bg-purple-500 hover:bg-purple-700 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                            Create
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
