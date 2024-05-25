<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
        </div>
        <div class="mb-4">
            <a href="{{ route('content.create') }}">
                <button href="{{ route('content.create') }}"
                        class=" float-end bg-purple-700 hover:bg-purple-700 text-white font-bold py-2 px-4 border-b-4 border-pink-600 hover:border-pink-600 rounded">
                    Add Content
                </button>
            </a>
        </div>
        <div class="px-4 sm:px-8 py-4 overflow-x-auto col-md-12">
            <div
                class="inline-block min-w-full shadow-md rounded-lg overflow-hidden"
            >
                <table class="min-w-full leading-normal">
                    <thead>
                    <tr>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Title
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Sub title
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Section one
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Photo one
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Photo one source
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Section two
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Photo two
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Photo two source
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Content::all() as $content)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $content->title }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $content->sub_title }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $content->section_one }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <img src=" {{ $content->image_one }} " alt="">
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                            {{ $content->image_one_source }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $content->section_two }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <img src=" {{ $content->image_two }} " alt="">
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $content->image_two_source }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{ route('content.edit', $content->id) }}" class="text-red-600">
                                   Edit
                                </a>

                                <form action="{{ route('content.destroy', $content->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
