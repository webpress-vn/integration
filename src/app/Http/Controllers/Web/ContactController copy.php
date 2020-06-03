<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactCreateRequest;
use Illuminate\Http\Request;
use VCComponent\Laravel\Contact\Entities\Contact;

class ContactController extends Controller
{
    public function __invoke()
    {
        $this->insertSeoMetaFields();
        return view('pages.contact');
    }
    public function store(ContactCreateRequest $request)
    {
        $data = $request->all();
        $data['type'] = 1;
        if (Contact::create($data)) {
            return redirect()->back()->with('succses', 'Bạn đã gửi thông tin liên hệ thành công');
        }
        return redirect()->back()->with('errow', 'Bạn đã gửi thông tin liên hệ thất bại');
    }
}
