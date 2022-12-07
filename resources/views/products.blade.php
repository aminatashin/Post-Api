@extends('layout')

@section('content')

<div class=" max-w-lg mx-auto mt-24" >


<form method="POST" action="/products" enctype="multipart/form-data" >
    @csrf
   
    @if(session('success'))
    <div class="alert alert-success" >
        {{session('success')}}
    </div>
    @endif
    <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2"
            > Title</label
        >
        <input
            type="text"
            class="border border-gray-200 rounded p-2 w-full"
            name="title"
            placeholder="Example: Senior Laravel Developer"
            value="{{old('title')}}"
        />
        @error('title')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>


    <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
            Company Logo
        </label>
        <input
            type="file"
            class="border border-gray-200 rounded p-2 w-full"
            name="logo"
            value="{{old('logo')}}"
        />
        @error('logo')
        <P class="text-red-500 text-xs mt-1">{{$message}}</P>  
        @enderror
    </div>

   

    <div class="mb-6">
        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Create Job
        </button>

        <a href="/" class="text-black ml-4"> Back </a>

    </div>
</form>
</div>
@endsection