@php
    use App\Models\Gallery;
@endphp
<section class="py-8 px-2 lg:px-20 gradient">
    <div class="grid grid-cols-2 gap-2">
        @foreach(Gallery::all() as $gallery)
            <div>
                <img class="h-auto max-w-full rounded-lg" src="{{ $gallery->photo }}" alt="">
            </div>
        @endforeach
    </div>
</section>
