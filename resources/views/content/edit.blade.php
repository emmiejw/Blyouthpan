@extends('layouts.app')

@section('content')
    <div class="w-5/6 m-auto flex flex-col bg-white border shadow-sm rounded-xl dark:bg-grey-500 dark:shadow-neutral-700/70">
        <div class="md:p-3">
            <div class="card-header mt-4">
                <h2 class="text-2xl font-semibold leading-tight text-center mb-4">Edit</h2>
            </div>
            <form method="post" action="{{ route('content.update', $content->id) }}" enctype="multipart/form-data" class="md:w-5/6">
                @method('PATCH')
                @csrf
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="titletitle">
                            Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $content->title }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="title" name="title" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                            Sub Title
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $content->sub_title }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="sub_title" id="sub_title" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="section_one">
                            Section One
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea value="{{ $content->section_one }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="section_one" id="section_one">{{ $content->section_one }}</textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="section_two">
                            Section Two
                        </label>
                    </div>
                    <div class="md:w-2/3 px-2 py-0 mt-4">
                        <textarea value="{{ $content->section_two }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="section_two" id="section_two">{{ $content->section_two }}</textarea>
                    </div>
                </div>

                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_one">
                            Image One
                        </label>
                    </div>
                    <div class="md:w-2/3 px-1 py-0">
                        <input type="file" name="image_one" id="photo" class="block md:w-2/3 border border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                        file:bg-gray-50 file:border-0
                        file:me-4
                        file:py-3 file:px-4
                       ">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="image_two">
                            Image Two
                        </label>
                    </div>
                    <div class="w-1/3 px-1 py-0">
                        <input type="file" name="image_one" id="image_two" class="block md:w-2/3 border border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
                        file:bg-gray-50 file:border-0
                        file:me-4
                        file:py-3 file:px-4
                       ">
                    </div>
                </div>
                <div class="md:flex md:items-center my-5 mx-2">
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

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        const textareas = [document.getElementById('section_one'), document.getElementById('section_two')];

        function adjustTextareaHeight(textarea) {
            // Reset the height to auto to calculate the scroll height correctly
            textarea.style.height = 'auto';
            // Set the height to the scroll height
            textarea.style.height = textarea.scrollHeight + 'px';
        }

        // Initial adjustment for both textareas
        textareas.forEach(adjustTextareaHeight);

        // Optional: Adjust the height on input for both textareas
        textareas.forEach(textarea => {
            textarea.addEventListener('input', () => adjustTextareaHeight(textarea));
        });
    });
</script>
