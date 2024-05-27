@php
use App\Models\Manager;
@endphp
<section class="bg-white border-b py-8">
    <div class="container mx-auto flex flex-wrap pt-4 pb-12">
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center gradient-text">
            Our Management Team
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 mt-8 xl:mt-16">
            @foreach(Manager::all() as $manager)
                <div class="flex flex-col items-center p-8 transition-colors duration-200 transform cursor-pointer group hover:bg-blue-600 rounded-xl">
                    <img class="object-cover w-32 h-32 rounded-full ring-4 ring-gray-300" src="{{ $manager->photo ?? null }}">

                    <h1 class="mt-4 text-2xl font-semibold text-gray-700 capitalize group-hover:text-white">{{ $manager->name ?? null }}</h1>

                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">{{ $manager->role ?? null }}</p>

                    <p class="mt-2 text-gray-500 capitalize dark:text-gray-300 group-hover:text-gray-300">{{ $manager->about_me ?? null }}</p>

                    <div class="flex items-center justify-start">
                        <a href="mailto:{{$manager->email ?? null}}" class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Email me
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
