<?php

namespace App\Http\Controllers;

use App\Helpers\Telegram;
use App\Models\GreenCard;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class GreenCardController extends Controller
{
    protected $telegram;

    public function __construct()
    {
        $this->telegram = new Telegram(config("bots.bot"));
    }


    public function index()
    {
        return view("form");
    }


    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'phone' => 'required',
        ],[
            'name.required' => "Ism va familiya kiritish majburiy",
            'phone.required' => "Telefon raqam kiritish majburiy"
        ]);
        $greencard = GreenCard::create($data);
        $text = "Yangi ariza: #ariza$greencard->id";
        $text .= "\n\n👤 Ism: $greencard->name";
        $text .= "\n📞 Telefon raqam: $greencard->phone";
        $this->telegram->sendMessage(config("bots.group"), $text)->body();

        Alert::success('Muvaffaqiyatli', 'Sizning arizangiz muvaffaqiyatli yuborildi. Tez orada siz bilan bog\'lanamiz');

        return back();
    }


}
