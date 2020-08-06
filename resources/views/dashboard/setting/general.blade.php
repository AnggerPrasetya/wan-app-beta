@extends('dashboard.templates.master')

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Setting General</h6>
            </div>
            <div class="card-body">
                <form action="/dashboard/settings/general/{{$general->id}}" method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="title" value="{{$general->title}}" class="form-control @error('title') is-invalid @enderror" placeholder="Site Title">
                            @error('title')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="tagline" value="{{$general->tagline}}" class="form-control @error('tagline') is-invalid @enderror" placeholder="Site Tagline">
                            @error('tagline')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="ig" value="{{$general->ig}}" class="form-control @error('ig') is-invalid @enderror" placeholder="Instagram URL">
                            @error('ig')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="fb" value="{{$general->fb}}" class="form-control @error('fb') is-invalid @enderror" placeholder="Facebook URL">
                            @error('fb')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="yt" value="{{$general->yt}}" class="form-control @error('yt') is-invalid @enderror" placeholder="Youtube URL">
                            @error('yt')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="tw" value="{{$general->tw}}" class="form-control @error('tw') is-invalid @enderror" placeholder="Twitter URL">
                            @error('tw')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="phone" value="{{$general->phone}}" class="form-control @error('phone') is-invalid @enderror" placeholder="Phone Number">
                            @error('phone')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 mb-3">
                            <input type="text" name="address" value="{{$general->address}}" class="form-control @error('address') is-invalid @enderror" placeholder="Address">
                            @error('address')
                                <div class="invalid-feedback">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="col-lg-12 text-right">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection