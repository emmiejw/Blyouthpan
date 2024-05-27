<style>
    .gradient-text {
        font-size: 40px;
        font-weight: bold;
        background: linear-gradient(to right, #2814d8, #f233b8);
        -webkit-background-clip: text;
        color: transparent;
    }
</style>
<section class="bg-white border-b py-8">
    <div class="container max-w-5xl mx-auto m-8">
        <h2 class="w-full p-4 my-2 text-5xl sm:text-2xl font-bold leading-tight text-center gradient-text">
            {{ $content->title ?? null }}
        </h2>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h6 class="w-full my-2 p-4 sm:text-1xl text-2xl font-bold leading-tight text-center text-gray-800">
            {{ $content->sub_title ?? null }}
        </h6>
        <div class="flex flex-wrap">
            <div class="w-5/6 sm:w-1/2 p-4">

                <p class="text-gray-600 mb-4">
                    {{$content->section_one ?? null}}
                </p>
            </div>
            <div class="w-full sm:w-1/2 p-4">
                <img src="{{ $content->image_one ?? null }}" class="rounded-lg">
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class="flex flex-wrap flex-col-reverse sm:flex-row">
            <div class="w-full sm:w-1/2 p-4 mt-4">
                <img src="{{ $content->image_two ?? null }}" class="rounded-lg">
            </div>
            <div class="w-full sm:w-1/2 p-4 mt-4">
                <div class="align-middle">
                    <p class="text-gray-600 mb-4">
                        {{ $content->section_two ?? null }}
                    </p>
                </div>
            </div>
        </div>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
    </div>
</section>
