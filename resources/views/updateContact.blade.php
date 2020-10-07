
@extends('layout')

@section('content')
    <p>*Required</p><br/>
    <form action="{{url('/contact/update/'.$contact->id)}}" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
    <table cellspacing="50">
        <tr>
            <td><img src="{{ asset($contact->Avatar) }}"/></td><td></td>
        </tr>
        <tr>
            <td>Avatar</td><td><input type="file" name="Photo" id="Photo"></td>
        </tr>
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
            <td>Contact Number</td><td><input type="text" name="Contact Number" value="{{ '0'.$contact->ContactNumber }}"></td>
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
        <tr>
            <td>Notes</td><td><textarea name="Notes">{{ $contact->Notes }}</textarea></td>
        </tr>
    </table>
    <button type="submit">Save Contact</button>&nbsp;&nbsp;<a href="{{ url('/contacts') }}">Cancel</a>
    </form>
@stop
