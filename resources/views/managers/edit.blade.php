@extends('layouts.app')

@section('content')
    <div class="w-5/6 m-auto flex flex-col bg-white border shadow-sm rounded-xl dark:bg-grey-500 dark:shadow-neutral-700/70">
        <div class="md:p-3">
            <div class="card-header mt-4">
                <h2 class="text-2xl font-semibold leading-tight text-center mb-4">Edit {{ $manager->name }}</h2>
            </div>
            <form method="post" action="{{ route('managers.update', $manager->id) }}" enctype="multipart/form-data" class="md:w-5/6">
                @method('PATCH')
                @csrf
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="name">
                            Full Name
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $manager->name }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="name" name="name" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="email">
                            Email
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $manager->email }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="email" id="email" type="email">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="mobile">
                            Role
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input value="{{ $manager->role }}" class="bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" name="mobile" id="mobile" type="text">
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="about_me">
                            About me
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <textarea value="{{ $manager->about_me }}" class="py-3 px-4 block bg-gray-100 appearance-none border-2 border-gray-100 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none focus:ring-neutral-600" name="about_me" id="about_me" placeholder="Say hi...">{{ $manager->about_me }}</textarea>
                    </div>
                </div>
                <div class="md:flex md:items-center mb-6 px-2 py-0">
                    <div class="md:w-1/3">
                        <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="photo">
                            Photo
                        </label>
                    </div>
                    <div class="md:w-2/3">
                        <input type="file" name="photo" id="photo" class="block md:w-2/3 border border-gray-100 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none
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
        const textarea = document.getElementById('about_me');

        function adjustTextareaHeight() {
            textarea.style.height = 'auto';
            textarea.style.height = textarea.scrollHeight + 'px';
        }

        adjustTextareaHeight();

        textarea.addEventListener('input', adjustTextareaHeight);
    });
</script>
