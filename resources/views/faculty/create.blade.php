@extends('app')

@section('title')
    Faculty Create
@endsection

@section('content')

<div >
    <h2 class="card-header text-center font-semibold">Faculty Create</h2>
    <div class="card-body">
        
        @if(session('success'))
            <div class="alert alert-success" role="alert">{{ session('success') }}</div>
        @endif

        <button class="border rounded-lg px-2">
            <a href="{{ route('faculties.index') }}"><i class="fa fa-plus"></i> back</a>
        </button>


            <form class="my-4" action="{{ route('faculties.store') }}" method="POST">
                @csrf
    
                <div class="mb-3">
                    <label class="form-label block"><strong>Faculty TH:</strong></label>
                    <input 
                        type="text" 
                        name="faculty_th" 
                        class="border px-2 rounded-lg @error('faculty_th') is-invalid @enderror" 
                        id="inputName" 
                        placeholder="faculty_th">
                    @error('faculty_th')
                        <div class="form-text text-red-700">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                <label class="form-label block"><strong>Faculty en:</strong></label>
                <input 
                    type="text" 
                    name="faculty_en" 
                    class="border px-2 rounded-lg @error('faculty_en') is-invalid @enderror" 
                    id="inputName" 
                    placeholder="Faculty EN">
                @error('faculty_en')
                    <div class="form-text text-red-700">{{ $message }}</div>
                @enderror
            </div>
    
                <button type="submit" class="border rounded-lg px-2"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
            </form>

    </div>
</div>  

@endsection