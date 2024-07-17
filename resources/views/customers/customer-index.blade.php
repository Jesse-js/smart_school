@extends('layouts.app')

@section('content')
    <table class="uk-table uk-table-divider uk-table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->id }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- {{ $customers->links('vendor.pagination.tailwind') }} --}}
    {{ $customers->links('_partials.pagination') }}
@endsection
