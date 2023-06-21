@extends('layouts.base_layout')

@section('content')
        <form action="{{ route('storePatient') }}" method="POST" enctype="multipart/form-data" id="patientForm">
        @csrf
        <div class="logo">
            <img src="{{ asset('img/logo.svg') }}" alt="Logo">
        </div>
        <div class="card mx-auto my-5">
            <div class="card-body">
                <h3 class="card-title text-center">Patient Registration</h3>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Name -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="name" name="name"
                               placeholder="Nombre"
                               value="{{ old('name') }}"
                               required
                               autofocus autocomplete="off">
                        <label for="name">{{ __('Name') }} (*)</label>
                    </div>
                </div>
                <!-- Lastname -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="lastname" name="lastname"
                               placeholder="Nombre"
                               value="{{ old('lastname') }}"
                               required
                               max="60"
                               autofocus autocomplete="off">
                        <label for="lastname">{{ __('Lastname') }} (*)</label>
                    </div>
                </div>
                <!-- Email Address -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email"
                               placeholder="Nombre"
                               value="{{ old('email') }}"
                               required
                               autofocus autocomplete="off">
                        <label for="email">{{ __('Email') }} (*)</label>
                    </div>
                </div>
                <!-- Phone Number -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="phone" name="phone"
                               placeholder="Nombre"
                               value="{{ old('phone') }}"
                               required
                               max="20"
                               autofocus autocomplete="off">
                        <label for="phone">{{ __('Phone Number') }} (*)</label>
                    </div>
                </div>
                <!-- Document Photo -->
                <div class="col-12">
                    <div class="form-floating mb-3">
                        <input type="file" required class="form-control" id="documentPhoto" name="documentPhoto" accept=".jpg,.jpeg,.png">
                        <label for="documentPhoto">{{ __('Document Photo') }} (*)</label>
                    </div>
                </div>
                <button type="submit" class="btn w-100 btn-submit">Register</button>
            </div>
        </div>
    </form>
@stop
