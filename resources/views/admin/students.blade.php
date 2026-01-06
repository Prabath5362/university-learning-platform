@extends('layouts.admin_layout')

@section('admin-content')
    <div class="container-fluid mt-4">

        <h4 class="mb-4 text-center">Student Details</h4>

        @php
            $students = [
                [

                    'name' => 'Jamz Fernando',
                    'reg' => 'SEU/IS/21/ICT/001',
                    'tel' => '0754568978',
                    'email' => 'jamz@gmail.com',
                    'status' => 'active',
                ],
                [
                    'name' => 'Nimal Perera',
                    'reg' => 'SEU/IS/21/ICT/002',
                    'tel' => '0771234567',
                    'email' => 'nimalp@gmail.com',
                    'status' => 'active',
                ],
                [
                    'name' => 'Saman Silva',
                    'reg' => 'SEU/IS/21/ICT/003',
                    'tel' => '0719876543',
                    'email' => 'saman.silva@gmail.com',
                    'status' => 'inactive',
                ],
                [
                    'name' => 'Kavindu Jayasinghe',
                    'reg' => 'SEU/IS/21/ICT/004',
                    'tel' => '0763456789',
                    'email' => 'kavindu.j@gmail.com',
                    'status' => 'active',
                ],
                [
                    'name' => 'Tharindu Lakshan',
                    'reg' => 'SEU/IS/21/ICT/005',
                    'tel' => '0784561239',
                    'email' => 'tharindu.l@gmail.com',
                    'status' => 'inactive',
                ],
            ];

        @endphp

        <div class="table-responsive">
            <table class="table table-bordered table-hover align-middle">
                <thead class="table-dark">
                    <tr class="text-center">
                        <th>No.</th>
                        <th>Name</th>
                        <th>Registration No.</th>
                        <th>Telephone No.</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $index => $student)
                        <tr>
                            <td class="text-center">{{ $index + 1}}</td>
                            <td>{{ $student["name"] }}</td>
                            <td class="text-center">{{ $student["reg"] }}</td>
                            <td class="text-center">{{ $student["tel"] }}</td>
                            <td>{{ $student["email"] }}</td>
                            <td class="text-center">
                                    <span class="badge bg-{{ $student["status"] == "active" ? "success" : "danger" }}">{{ $student["status"] }}</span>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-primary btn-sm">View</button>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
