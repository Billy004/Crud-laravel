<x-app-web-layout>

    <x-slot name="title" >
       Edit Categories
    </x-slot>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                 <div class="alert alert-success">
                    {{session('status')}}
                </div>   
                @endif
                <div class="card">
                    <div class="card-header">
                        <h4>
                            Edit Categories
                            <a href="{{url('categories')}}" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('categories/create')}}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control" value="{{$categorie->name}}">
                                @error('name') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Description</label>
                                <textarea name="description" class="form-control" rows="3">{{$categorie->description}}</textarea>
                                @error('description') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="mb-3">
                                <label>Is Active</label>
                                <input type="checkbox" name="is_active" {{$categorie->is_active ==true ? checked: '' }}>
                                @error('is_active') <span class="text-danger">{{$message}}</span>@enderror
                            </div>
                            <div class="md-3">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    


</x-app-web-layout>
