<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    
    private $limit = 5;
    
    private  $rules = [
         
         'name' => ['required','min:5'],
         'company' => ['required'],
         'email' => ['required', 'email']
         
     ];   
    
    public function index(Request $request){
        
        if($group_id= ($request->get('group_id'))){
            
            $contacts = Contact::where('group_id', $group_id)->orderBy('id', 'desc')->paginate($this->limit);
            
        }
        else{
            
            $contacts = Contact::orderBy('id', 'desc')->paginate($this->limit);
            
        }
        
        
        return view('contacts.index', /*['contacts'=>$contacts]*/ compact('contacts'));
    }
    
    
     public function create(){
         
         
         return view('contacts.create');
         
     }  
    
    public function edit($id){
         
          $contact = Contact::find($id);
        
         return view('contacts.edit', compact('contact'));
         
     }  
    
    
    
    public function store(Request $request){
        
      
        
        $this->validate($request, $this->rules);
        
        Contact::create($request->all());
        
        return redirect('contacts')->with('message', 'Contact Saved!');
        
    }

       public function update($id, Request $request){
        
    
        
        $this->validate($request, $this->rules);
           
        $contact = Contact::find($id);   
        
        $contact->update($request->all());
        
        return redirect('contacts')->with('message', 'Contact Updated!');
        
    }



}
