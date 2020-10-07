<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Storage;

/*
* @Class Name: ContactsController
* @Autthor: Butch B. Enerio
* @Created date: October 7, 2020
* @Description: controller for contact
*/
class ContactsController extends Controller{

    /*
    * @Method Name: list
    * @Autthor: Butch B. Enerio
    * @Created date: October 7, 2020
    * @Description: method for getting all data from data base and passing it to the list contact view
    */
    public function list(){
        $contacts = Contacts::All();
        if(!$contacts){
            abort(404);
        }

        return view('listContacts',['contacts' => $contacts]);
    }

    /*
    * @Method Name: getContact
    * @Autthor: Butch B. Enerio
    * @Created date: October 7, 2020
    * @Description: method for getting the single contact
    */
    public function getContact($id){
        $contact = Contacts::where('id',$id)->firstOrFail();

        if(!$contact){  abort(404); }

        return view('updateContact',['contact' => $contact]);
    }

    /*
    * @Method Name: insertContact
    * @Autthor: Butch B. Enerio
    * @Created date: October 7, 2020
    * @Description: method for inserting new contact
    */
    public function insertContact(Request $req){
        $url = '';
        if($req->hasFile('Photo')){
            $path = $req->file('Photo')->store('public');
            $url = Storage::url($path);
        }

        if($req->input('Last_Name') != null || $req->input('Last_Name') != ''){

            $newContact = new Contacts;
            $newContact->FirstName      = $req->input('First_Name');
            $newContact->MiddleName     = $req->input('Middle_Name');
            $newContact->LastName       = $req->input('Last_Name');
            $newContact->Email          = ($req->input('Email') == null ? '' : $req->input('Email'));
            $newContact->ContactNumber  = $req->input('Contact_Number');
            $newContact->Street         = $req->input('Street');
            $newContact->City           = $req->input('City');
            $newContact->State          = $req->input('State');
            $newContact->Postal         = $req->input('Postal');
            $newContact->Country        = $req->input('Country');
            $newContact->Notes          = $req->input('Notes');
            $newContact->Avatar         = $url;
            $newContact->save();

            return redirect('contacts');
        }else{
            echo 'LastName is Required';
        }
    }

    /*
    * @Method Name: updateContact
    * @Autthor: Butch B. Enerio
    * @Created date: October 7, 2020
    * @Description: method to update existing contact
    */
    public function updateContact(Request $req,$id){
        $url = '';
        if($req->hasFile('Photo')){
            $path = $req->file('Photo')->store('public');
            $url = Storage::url($path);
        }

        if($req->input('Last_Name') != null || $req->input('Last_Name') != ''){

            $existingContact = Contacts::find($id);
            $existingContact->FirstName      = $req->input('First_Name');
            $existingContact->MiddleName     = $req->input('Middle_Name');
            $existingContact->LastName       = $req->input('Last_Name');
            $existingContact->Email          = $req->input('Email');
            $existingContact->ContactNumber  = $req->input('Contact_Number');
            $existingContact->Street         = $req->input('Street');
            $existingContact->City           = $req->input('City');
            $existingContact->State          = $req->input('State');
            $existingContact->Postal         = $req->input('Postal');
            $existingContact->Country        = $req->input('Country');
            $existingContact->Notes          = $req->input('Notes');
            $existingContact->Avatar         = ( $url == '' ? $existingContact->Avatar : $url);
            $existingContact->update();

            return redirect('contacts');
        }else{
            echo 'LastName is Required';
        }
    }

    /*
    * @Method Name: deleteContact
    * @Autthor: Butch B. Enerio
    * @Created date: October 7, 2020
    * @Description: method for deleting the contact
    */
    public function deleteContact($id){
        $contact = Contacts::find($id);

        if(!$contact){  abort(404); }

        $contact->delete();

        return redirect('contacts');
    }

}
