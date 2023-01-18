<?php

namespace App\Http\Controllers;
use App\Mail\SignupEmail;
use App\Models\Career;
use App\Models\Catagory;
use App\Models\Customer;
use App\Models\Recruiter;
use App\Models\Seeker;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;
use phpDocumentor\Reflection\DocBlock\Tags\See;
use Symfony\Component\HttpKernel\Profiler\Profile;


class CustomerController extends Controller
{
    public function index()
    {

        $customer = Customer::all();

        return view('customer.index', compact('customer'));
    }




    public function create()
    {
        $catagory = Catagory::all();
        $user = User::all();
        return view('customer.create', compact('catagory','user'));
    }


    public function store()
    {
        $data = \request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'active' => 'required',
            'catagory_id' => 'required',

            'link' => 'required',
            'location'=>'required',
            'institution'=>'required',
            'exp'=>'required',
            'image'=>'required',
            'recruiter_id'=>'required',
            'vacancy'=>'required',
            'deadline'=>'required',


        ]);
//        Customer::create($data);
//        return redirect('customer');
        //dd(\request('name'));

        $customer = new Customer();
        $customer->vacancy=\request('vacancy');
        $customer->deadline=\request('deadline');
        $customer->name=\request('name');
        $customer->recruiter_id=\request('recruiter_id');
        $customer->email=\request('email');
        $customer->active=\request('active');
        $customer->catagory_id=\request('catagory_id');
        $customer->link=\request('link');
        $customer->location=\request('location');
        $customer->institution=\request('institution');
        $customer->exp=\request('exp');
        if(\request()->hasFile('image')){
            $file = \request()->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extention;
            $file->move('uplods/mazhar/',$filename);
            $customer->image = $filename;
        }

        $customer->save();
        return back();
    }


    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }


    public function edit(Customer $customer)
    {
        $catagory = Catagory::all();
        $user = User::all();

        return view('customer.edit', compact('customer', 'catagory','user'));
    }


    public function link(Customer $customer){
        //dd($customer);
        $catagory = Catagory::all();
        //$customer = Customer::all();
       // $seeker = Seeker::all();
        $user=User::all();
        //dd($customer);
        return view('customer.new' , compact('customer', 'catagory','user'));
    }

    public  function store2(){

        $data =  \request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'ins_name'=>'required',
            'sub' => 'required',
            'exp' => 'required',
            'statement' => 'required',
            'image'=>'required',
            'user_id'=>'required',
            'customer_id'=>'required',
            'select'=>'required',

        ]);
        //dd($data);

        $customer = new Seeker();
        $customer->name=\request('name');
        $customer->select=\request('select');
        $customer->customer_id=\request('customer_id');
        $customer->user_id=\request('user_id');
        $customer->email=\request('email');
        $customer->ins_name=\request('ins_name');
        $customer->sub=\request('sub');
        $customer->exp=\request('exp');
        $customer->statement=\request('statement');

        if(\request()->hasFile('image')){
            $file = \request()->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extention;
            $file->move('uplods/saurav/',$filename);
            $customer->image = $filename;
        }
        $customer->save();
        return back();
    }



    public function rec_form(){
        $rec = Recruiter::all();
        $user = User::all();
        Return view('recruiter',compact('rec','user'));
    }

    public function store4(){
        $data =  \request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'rec_id'=>'required',
            'address'=>'required',
            'company'=>'required',
            'contact_no'=>'required',

        ]);
        //dd($data);

        $customer = new Recruiter();
        $customer->name=\request('name');
        $customer->rec_id=\request('rec_id');
        $customer->email=\request('email');
        $customer->address=\request('address');
        $customer->company=\request('company');
        $customer->contact_no=\request('contact_no');
        $customer->save();
       // return back();
        return redirect('dd');

    }






    public function saurav(){
        $seeker = Seeker::all();
        $customer = Customer::all();
        $catagory = Catagory::all();
        $user = User::all();
        return view('newshow',compact('seeker','customer','catagory','user'));
    }

    public function image(Seeker $customer){

        return view('image',compact('customer'));
    }

    public function delete_fun($sek){

        $cmp = Seeker::find($sek);
        $cmp->delete();
        return redirect('/newshow');
    }



//    public function delete_rec($pp){
//
//        $cmp = User::find($pp);
//        $cmp->delete();
//        return redirect('/admin');
//    }



    public function edit3($nn){

        $user = User::find($nn);
        return view('admin',compact('user'));
    }
    public function update3(Request $request,$nn){
        $user = User::find($nn);
        $user->select = $request->select;

        $user->update();

        return redirect('admin');
    }






    public function pro(){
        $user = User::all();
        $seeker = Seeker::all();
        $customer= Customer::all();

        return view('profile',compact('user','seeker','customer'));
    }

    public function edit1($pro){
        $user = User::find($pro);
    return view('customer.editpro',compact('user'));
    }
    public function update(Request $request,$pro){
        $producto = User::find($pro);
        $producto->name = $request->name;
        $producto-> email = $request->email;
        $producto-> mob = $request->mob;
        $producto-> Nat = $request->Nat;
        $producto-> nat_id = $request->nat_id;
        $producto-> pas_no = $request->pas_no;
        $producto-> d_b = $request->d_b;
        $producto-> gender = $request->gender;
        if(\request()->hasFile('profile_photo_path')){
            $file = \request()->file('profile_photo_path');
            $extention = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extention;
            $file->move('uplods/pro/',$filename);
            $producto->profile_photo_path = $filename;
        }
        $producto->update();

        return redirect('profile');
    }









    public function edit2($nn){

        $seeker = Seeker::find($nn);

        return view('newshow',compact('seeker'));
    }
    public function update2(Request $request,$nn){
        $seeker = Seeker::find($nn);
        $seeker->select = $request->select;

        $seeker->update();

        return redirect('newshow');
    }

    public function email(){
        $seeker = Seeker::all();
        return view('email',compact('seeker'));
    }
    public function sendmail(Request $request){
        $this->validate($request,[
            'email'=>'required',
            'subject'=>'required',
            'content'=>'required',

        ]);
        $myMail = new SignupEmail(
            $request->input('subject'),
            $request->input('content')
        );

        Mail::to($request->input('email'))->send($myMail);
        return redirect()->back()->with('success','Email is send successfully '.$request->input('email'));

    }



//    public function store3(){
//
//        $data =  \request()->validate([
//
//            'name'=>'required',
//            'email'=>'required'
//        ]);
//        $customer = new Profile();
//        $customer->name=\request('name');
//        $customer->email=\request('email');
//        $customer->save();
//        return back();
//    }



//
//    public function update(Customer $customer)
//    {
//        $data = \request()->validate([
//            'name' => 'required|min:3',
//            'email' => 'required|email',
//            'active' => 'required',
//            'catagory_id' => 'required',
//            'link' => 'required',
//            'location'=>'required',
//            'institution'=>'required',
//            'exp'=>'required',
//
//        ]);
//
//        $customer->update($data);
//        return redirect('customer/' . $customer->id);
//    }


    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect('customer');
    }


    public function SEARCH()
    {
       $search_text = request('query');
        $customer=Customer::where('name', 'LIKE', '%' . $search_text . '%')
                      ->orwhere('id', 'LIKE', '%' . $search_text . '%')
                      ->orwhere('catagory_id', 'LIKE', '%' . $search_text . '%')
            ->orwhere('link', 'LIKE', '%' . $search_text . '%')->with('catagory')->get();

       return view('customer.search', compact('customer'));
    }

    public function SEARCH2()
    {
        $search_text = request('query');
        $user = User::all();
        $seeker=Seeker::where('name', 'LIKE', '%' . $search_text . '%')
            ->orwhere('email', 'LIKE', '%' . $search_text . '%')
            ->orwhere('sub', 'LIKE', '%' . $search_text . '%')
            ->orwhere('ins_name', 'LIKE', '%' . $search_text . '%')
            ->orwhere('id', 'LIKE', '%' . $search_text . '%')->get();

        return view('customer.search2', compact('user','seeker'));
    }




    public function user(){
        $customer = Career::all();
        return view('customer.user',compact('customer'));
    }


    public function user1(){
        $customer = Career::all();
        $user = User::all();
        $rec = Recruiter::all();
        return view('admin',compact('customer','user','rec'));
    }

    public function store1(){
        $data =  \request()->validate([
            'name' => 'required',
            'take'=>'required'
        ]);
        $customer = new Career();
        $customer->name=\request('name');
        $customer->take=\request('take');
        $customer->save();
        return back();

    }



}

