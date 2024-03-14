<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <!-- {{ __("You're logged in!") }} -->

                    <h3 class="mt-4">Users List</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Email</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $u)
                                    
                                <tr>
                                    <td class="border px-4 py-2">{{ $u->name }}</td>
                                    <td class="border px-4 py-2">{{ $u->email }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <h3 class="mt-4">Categories Section</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Category</th>
                                    <th class="px-4 py-2">Action</th>
                                    {{-- <th class="px-4 py-2">Delete</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cat as $c)
                                <tr>
                                    <td class="border px-4 py-2">{{$c->name}}</td>
                                    <td class="border px-4 py-2">
                                        {{-- <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                            Modify
                                        </a> --}}
                                        <form action="{{ route('modifiedCat', $c) }}" method="POST">
                                            @method('put')
                                            @csrf
                                            <input type="text" name="modifiedCat" placeholder="{{$c->name}}">
                                            <button type="submit">Modify</button>

                                        </form>
                                    </td> 
                                    <td class="border px-4 py-2">
                                        {{-- <a href="#" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded">
                                            Delete
                                        </a> --}}
                                        <form action="{{ route('deleteCat', $c) }} " method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" >Delete</button>
                                        </form>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4 flex">
                        <form action="{{route('addCat')}}" method="POST">
                            @csrf
                            <input name="name" type="text" class=" border border-gray-300 rounded-l px-4 py-2" placeholder="Add Another Category">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-r">Apply</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="mt-4">Awaiting Events List</h3>
                    <div class="overflow-x-auto">
                        <table class="table-auto w-full mt-2">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">Event Name</th>
                                    <th class="px-4 py-2">Organiser</th>
                                    <th class="px-4 py-2">Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($events as $event)
                                <tr>
                                    <td class="border px-4 py-2">{{ $event->title }}</td>
                                    <td class="border px-4 py-2">{{ $event->user->name }}</td>
                                    <td class="border px-4 py-2">
                                        <form action="{{ route('event.accept', ['event' => $event->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="">
                                                <button type="submit">Accept</button>
                                            </div>
                                        </form>
                                        <form action="{{ route('event.deny', ['event' => $event->id]) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="">
                                                <button type="submit">Deny</button>
                                            </div>
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
    </div>

    
</x-app-layout>
