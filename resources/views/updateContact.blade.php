
@extends('layout')

@section('content')
    <form action="{{url('/contact/update/'.$contact->id)}}" method="POST">
    {{ csrf_field() }}
    <table cellspacing="50">
        <tr>
        <td>First Name</td><td><input type="text" name="First Name" value="{{ $contact->FirstName }}"></td>
        </tr>
        <tr>
            <td>MiddleName Name</td><td><input type="text" name="Middle Name" value="{{ $contact->MiddleName }}"></td>
        </tr>
        <tr>
            <td>*Last Name</td><td><input type="text" name="Last Name" value="{{ $contact->LastName }}"></td>
        </tr>
        <tr>
            <td>Contact Number</td><td><input type="text" name="Contact Number" value="{{ $contact->ContactNumber }}"></td>
        </tr>
        <tr>
            <td>Street</td><td><input type="text" name="Street" value="{{ $contact->Street }}"></td>
        </tr>
        <tr>
            <td>City</td><td><input type="text" name="City" value="{{ $contact->City }}"></td>
        </tr>
        <tr>
            <td>State</td><td><input type="text" name="State" value="{{ $contact->State }}"></td>
        </tr>
        <tr>
            <td>Postal</td><td><input type="text" name="Postal" value="{{ $contact->Postal }}"></td>
        </tr>
        <tr>
            <td>Country</td><td><input type="text" name="Country" value="{{ $contact->Country }}"></td>
        </tr>
    </table>
    <button type="submit">Save Contact</button>
    </form>
@stop
