@extends('layouts.app')

@section('content')
    {{-- Show session value name --}}
    @if(session('name'))
        <h3>Welcome, {{ session('name') }}!</h3>
    @endif

    <h2>Contact List</h2>

    @php
        // Static (hardcoded) contacts array
        $contacts = [
            ['name' => 'Alice', 'email' => 'alice@example.com', 'phone' => '123-456-7890'],
            ['name' => 'Bob', 'email' => 'bob@example.com', 'phone' => '987-654-3210'],
            ['name' => 'Charlie', 'email' => 'charlie@example.com', 'phone' => '555-666-7777'],
        ];
    @endphp

    {{-- If contacts exist --}}
    @if(count($contacts) > 0)
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No Contacts Found</p>
    @endif
@endsection
