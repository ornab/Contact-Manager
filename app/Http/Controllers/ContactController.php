<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Contact;

class ContactController extends Controller
{
    private $limit = 5;
    private $rules = [
        'name' => ['required', 'min:5'],
        'company' => ['required'],
        'email' => ['required', 'email'],
        'photo' => ['mimes:jpg,jpeg,png,gif,bmp']
    ];
    private $upload_dir = 'public/uploads';

    public function __construct()
    {
        $this->upload_dir = base_path() . '/' . $this->upload_dir;
    }

    public function index(Request $request)
    {
        if ($group_id = ($request->get('group_id'))) {
            $contacts = Contact::where('group_id', $group_id)->orderBy('id', 'desc')->paginate($this->limit);
        }
        else {
            $contacts = Contact::orderBy('id', 'desc')->paginate($this->limit);
        }

    	return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view("contacts.create");
    }

    public function edit($id)
    {
        $contact = Contact::find($id);
        return view("contacts.edit", compact('contact'));
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->rules);

        $data = $this->getRequest($request);

        Contact::create($data);

        return redirect('contacts')->with('message', 'Contact Saved!');
    }

    private function getRequest(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('photo'))
        {
            $photo       = $request->file('photo');
            $fileName    = $photo->getClientOriginalName();
            $destination = $this->upload_dir;
            $photo->move($destination, $fileName);

            $data['photo'] = $fileName;
        }

        return $data;
    }

    public function update($id, Request $request)
    {
        $this->validate($request, $this->rules);

        $contact = Contact::find($id);
        $oldPhoto = $contact->photo;

        $data = $this->getRequest($request);
        $contact->update($data);

        if ($oldPhoto !== $contact->photo) {
            $this->removePhoto($oldPhoto);
        }

        return redirect('contacts')->with('message', 'Contact Updated!');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);

        $contact->delete();

        $this->removePhoto($contact->photo);

        return redirect('contacts')->with('message', 'Contact Deleted!');
    }

    private function removePhoto($photo)
    {
        if ( ! empty($photo))
        {
            $file_path = $this->upload_dir . '/' . $photo;

            if ( file_exists($file_path) ) unlink($file_path);
        }
    }
}
