<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Employee') }}
            <a href="{{ route('employee.index') }}"><button class="btn btn-sm btn-info text-white mb-2" style="float: right">View</button></a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-12 mb-3">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" id="first_name" placeholder="Please Enter First Name here" name="first_name" required>
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" id="last_name" placeholder="Please Enter Last Name here" name="last_name" required>
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Please Enter Email here" name="email">
                            </div>
                            <div class="form-group col-md-12 mb-3">
                                <label for="phone">phone</label>
                                <input type="number" class="form-control" id="phone" placeholder="Please Enter phone here" name="phone">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="inputCompany">Company</label>
                                <select id="inputCompany" class="form-control">
                                    <option selected>Choose Company</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                    <option value="">1</option>
                                </select>
                            </div>

                        </div>
                        <button type="submit" class="btn btn-sm btn-primary mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
