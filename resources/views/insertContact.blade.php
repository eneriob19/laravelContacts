
@extends('layout')

@section('content')
    <p>*Required</p><br/>
    <form action="{{url('/newContact/insert')}}" method="POST">
    {{ csrf_field() }}
    <table cellspacing="50">
        <tr>
            <td>First Name</td><td><input type="text" name="First Name"></td>
        </tr>
        <tr>
            <td>MiddleName Name</td><td><input type="text" name="Middle Name"></td>
        </tr>
        <tr>
            <td>*Last Name</td><td><input type="text" name="Last Name"></td>
        </tr>
        <tr>
            <td>Contact Number</td><td><input type="text" name="Contact Number"></td>
        </tr>
        <tr>
            <td>Street</td><td><input type="text" name="Street"></td>
        </tr>
        <tr>
            <td>City</td><td><input type="text" name="City"></td>
        </tr>
        <tr>
            <td>State</td><td><input type="text" name="State"></td>
        </tr>
        <tr>
            <td>Postal</td><td><input type="text" name="Postal"></td>
        </tr>
        <tr>
            <td>Country</td><td><input type="text" name="Country"></td>
        </tr>
        <tr>
            <td>Notes</td><td><textarea name="Notes"></textarea></td>
        </tr>
    </table>
    <button type="submit">Save Contact</button>&nbsp;&nbsp;<a href="{{ url('/contacts') }}">Cancel</a>
    </form>
@stop
