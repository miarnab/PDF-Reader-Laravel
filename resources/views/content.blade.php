<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contents') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                        <table class="table table-bordered">
                            <tr>
                                <th>ID</th>
                                <th>Contents</th>
                            </tr>
                            @foreach ($contents as $content)
                            <tr>
                                <td>{{ $content->id }}</td>
                                <td>{{ $content->content }}</td>
                            </tr>
                            @endforeach
                        </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
