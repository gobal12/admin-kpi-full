@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>

    <div class="row mt-4">
        <!-- Menampilkan Jumlah Karyawan -->
        <div class="col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h5>Total Karyawan</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Jumlah total karyawan: {{ $employeesCount }}</p>
                </div>
            </div>
        </div>

        <!-- Menampilkan Ringkasan KPI Karyawan -->
        <div class="col-md-6 col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h5>Summary KPI Karyawan</h5>
                </div>
                <div class="card-body">
                    <ul>
                        @foreach($summaryKPI as $item)
                            <li>{{ $item->unit_project }}: {{ $item->total }} karyawan</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
