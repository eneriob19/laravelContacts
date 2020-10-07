
@extends('layout')

@section('content')
    <a href="{{ url('/insertContact') }}">Insert Contact</a>
    <table cellspacing="50">
        <thead>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th>Contact Number</th>
            <th>Street</th>
            <th>City</th>
            <th>State</th>
            <th>Postal</th>
            <th>Country</th>
            <th>Notes</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->FirstName }}</td>
                <td>{{ $contact->MiddleName }}</td>
                <td>{{ $contact->LastName }}</td>
                <td>0{{ $contact->ContactNumber }}</td>
                <td>{{ $contact->Street }}</td>
                <td>{{ $contact->City }}</td>
                <td>{{ $contact->State }}</td>
                <td>{{ $contact->Postal }}</td>
                <td>{{ $contact->Country }}</td>
                <td>{{ $contact->Notes }}</td>
                <td><a href="{{ url('/contact/'.$contact->id) }}">View/Edit</a>&nbsp;&nbsp;<a href="{{ url('/contact/delete/'.$contact->id) }}">Delete</a></button>
            </tr>
            @endforeach
        </tbody>
    </table>
@stop
