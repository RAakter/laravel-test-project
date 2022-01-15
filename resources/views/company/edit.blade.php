<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Company') }}
            <a href="{{ route('company.index') }}"><button class="btn btn-sm btn-info text-white mb-2" style="float: right">View</button></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @include('ErrorMessage')
                    <form action="{{ route('company.update', $company->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" value="{{ $company->name }}" id="name" placeholder="Name" name="name" required>
                                <input type="hidden" name="id" value="{{ $company->id }}">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" value="{{ $company->email }}" placeholder="Email" name="email">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="logo">Logo</label>
                                <img src="{{ $company->logo }}" height="100px" width="100px">
                                <input type="file" class="form-control" id="logo" name="logo">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="website">Website</label>
                                <input type="text" class="form-control" id="website" value="{{ $company->website }}" placeholder="Please Enter Website link here" name="website">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
