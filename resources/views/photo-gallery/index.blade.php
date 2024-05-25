<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
        </div>
        <div class="mb-4">
            <a href="{{ route('managers.create') }}">
                <button href="{{ route('managers.create') }}"
                        class=" float-end bg-purple-700 hover:bg-purple-700 text-white font-bold py-2 px-4 border-b-4 border-pink-600 hover:border-pink-600 rounded">
                    Add a Team Member
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
                            Name
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Email
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Mobile
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Role
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            About Me
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                            Photo
                        </th>
                        <th
                            class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider"
                        >
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(\App\Models\Manager::all() as $manager)
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $manager->name }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $manager->email }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $manager->mobile }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $manager->photo }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                {{ $manager->about_me }}
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">

                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <a href="{{route('managers.edit', $manager->id)}}" class="text-red-600">
                                   Edit
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
