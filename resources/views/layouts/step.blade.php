@extends('layouts.sidebar')

@section('content')
<div class="card shadow-sm">
    <div class="card-header bg-white">
        <h5 class="mb-0">@yield('page-title')</h5>
        <small class="text-muted">@yield('page-desc')</small>
    </div>

    <div class="card-body">
        <!-- STEP INDICATOR -->
        <ul class="nav nav-pills mb-4">
            <li class="nav-item"><span class="nav-link @yield('step1')">1. Data Pasien</span></li>
            <li class="nav-item"><span class="nav-link @yield('step2')">2. Tanggal</span></li>
            <li class="nav-item"><span class="nav-link @yield('step3')">3. Poli</span></li>
            <li class="nav-item"><span class="nav-link @yield('step4')">4. Dokter</span></li>
            <li class="nav-item"><span class="nav-link @yield('step5')">5. Pembayaran</span></li>
        </ul>

        @yield('step-content')
    </div>
</div>
@endsection