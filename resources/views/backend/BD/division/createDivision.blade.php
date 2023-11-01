@extends('backend.master')
@section('content')
    <div class="page-wrapper mt-5" style="display: flex; justify-content: center; flex-direction:row">
        <div class="col-md-6 ">
            <form action="{{ route('divisions.store') }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Add Division</h3>
                    </div>
                    <div class=" card-body  ">

                        <div class="mb-3">
                            {{-- <label class="form-label ">Category</label> --}}
                            <div>
                                <input type="text" class="form-control @error('division_name') is-invalid @enderror"
                                    name="division_name" placeholder="Enter category name">
                                @error('division_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>


                    </div>
                    <div class="card-footer text-end">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
