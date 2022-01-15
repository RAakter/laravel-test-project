<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Company') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <a href="{{ route('company.create') }}"><button class="btn btn-sm btn-info text-white mb-2" style="float: right">Create</button></a>
                    <table class="table table-responsive table-bordered">
                        <caption>Company List</caption>
                        <thead>
                        <tr>
                            <th scope="col">SL</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Logo</th>
                            <th scope="col">Website</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($companies as $company)
                                <tr>
                                    <th scope="row">{{ $company->id }}</th>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td><img src="{{ $company->logo }}" height="100px" width="100px"></td>
                                    <td>{{ $company->website }}</td>
                                    <td>
                                        <button class="btn btn-sm btn-primary"><a href="{{ route('company.edit', $company->id) }}" method="GET">
                                                <i class="material-icons dp48">edit</i>
                                            </a></button>
                                            <form action="{{ route('company.destroy', $company->id) }}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm(' you want to delete?');">
                                                    <i class="material-icons dp48">delete</i>
                                                </button>
                                            </form>

                                    </td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>
                    {{ $companies->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
