<?php


function lang($locale, $key)
{
    $locale = "uz";

    $keys = [
        'uz' => [
            "hi" => "ASSALOMU ALAYKUM. TO'LIQ ISMINGIZNI KIRITING",
            "ask_phone1" => "TELEFON RAQAMINGIZNI KIRITING:",
            "ask_phone2" => "MASALAN:",
            "code1" => "USHBU ",
            "code2" => "GA TASDIQLASH KODI YUBORILDI. ILTIMOS TASDIQLASH KODINI KIRITING. π©",
            "menu" => "BIRGALIKDA BUYURTMA BERAMIZ! AXIR BU ORIGINAL OLOT SOMSA βοΈβ¬οΈβΆοΈοΈ",
            "history" => "π Buyurtmalar tarixi",
            "lang" => "πΊπΏ Tilni o'zgartirish",
            "cart" => "π Savatga o'tish",
            "phone" => "βοΈMening telefon raqamim",
            "select" => "Siz tanladingiz",
            "price" => "Narxi",
            "number" => "Iltimos, sonini tanlang",
            "addToCart" => "π Savatga qo'shish",
            "back" => "β¬οΈ Ortga",
            "accept" => "β¬οΈ raqamli buyurtmangiz qabul qilindi! Iltimos, operator qo'ng'irog'ini kutmang. Buyurtmangizni 40 daqiqa davomida yetkazib beramiz.",
            "empty" => "π€·ββοΈSavat hali bo'm-bo'sh",
            "order_time" => "Buyurtma vaqti:",
            "order_no" => "Buyurtma raqami: ",
            "general" => "Umumiy:",
            "section" => "Bo'lim:",
            "select_no" => "Iltimos, soni tanlang!",
            "error" => "Xato, qaytadan urinib ko'ring",
            "confirm3" => "NAQD PUL π΅  β",
            "confirm" => "TASDIQLASH  β",
            "confirm2" => "KARTA ORQALI π³  β",
            "yana" => "Yana tanlash",
            "no_orders" => "Buyurtmalar hali mavjud emas",
            "delivery" => "π Yetkazib berish",
            "sam" => "πββοΈ Olib ketish",
            "select_type" => "Yetkazib berish usulini tanlang",
            "geolocation" => "π Geolokatsiyani tanlash π ",
            "location_text" => '"Iltimos, βπ Geolokatsiyani joβnatishβ tugmasini bosish orqali geolokatsiyangizni yuboring. Bunda telefoningizda manzilni aniqlash funksiyasi yoqilgan boβlishi lozim."',
            "re_location" => "π Geolatsiyani qayta jo'natish",
            "your_address" => "Sizning manzilingiz",
            "correct_address"   => "XURMATLI MIJOZ, ILTIMOS YASHASH MANZILINGIZNI YOZMA RAVISHDA ANIK VA TO'G'RI YOZING !",
            "next" => "β‘οΈ Keyingi"

        ],
        'ru' => [
            "hi" => "ASSALOMU ALAYKUM. ILTIMOS TO'LIQ ISMINGIZNI KIRITING",
            "ask_phone1" => "ILTIMOS, TELEFON RAQAMINGIZNI KIRITING:",
            "ask_phone2" => "MASALAN:",
            "code1" => "USHBU ",
            "code2" => "GA TASDIQLASH KODI YUBORILDI. ILTIMOS TASDIQLASH KODINI KIRITING. π©",
            "menu" => "BIRGALIKDA BUYURTMA BERAMIZ π€ β¬οΈ",
            "history" => "π Buyurtmalar tarixi",
            "lang" => "πΊπΏ Tilni o'zgartirish",
            "cart" => "π Savatga o'tish",
            "phone" => "βοΈMening telefon raqamim",
            "select" => "Siz tanladingiz",
            "price" => "Narxi",
            "number" => "Iltimos, sonini tanlang",
            "addToCart" => "π Savatga qo'shish",
            "back" => "β¬οΈ Ortga",
            "accept" => "β¬οΈ raqamli buyurtmangiz qabul qilindi! Iltimos, operator qo'ng'irog'ini kutmang. Buyurtmangizni 40 daqiqa davomida yetkazib beramiz.",
            "empty" => "π€·ββοΈSavat hali bo'm-bo'sh",
            "order_time" => "Buyurtma vaqti:",
            "order_no" => "Buyurtma raqami: ",
            "general" => "Umumiy:",
            "section" => "Bo'lim:",
            "select_no" => "Iltimos, soni tanlang!",
            "error" => "Xato, qaytadan urinib ko'ring",
            "confirm" => "TASDIQLASH β",
            "yana" => "Yana tanlash",
            "no_orders" => "Buyurtmalar hali mavjud emas",
            "delivery" => "π Yetkazib berish",
            "sam" => "πββοΈ Olib ketish",
            "select_type" => "Yetkazib berish usulini tanlang",
            "geolocation" => "π Geolokatsiyani tanlash π ",
            "location_text" => '"Iltimos, βπ Geolokatsiyani joβnatishβ tugmasini bosish orqali geolokatsiyangizni yuboring. Bunda telefoningizda manzilni aniqlash funksiyasi yoqilgan boβlishi lozim."',
            "re_location" => "π Geolatsiyani qayta jo'natish",
            "your_address" => "Manzilingizni yozma ravishda kiriting!",
            "correct_address"   => "XURMATLI MIJOZ ILTIMOS YASHASH MANZILINGIZNI YOZMA RAVISHDA ANIK VA TUGRI YOZING !",
            "next" => "β‘οΈ Keyingi"
        ],
        'en' => [
            "hi" => "ASSALOMU ALAYKUM. ILTIMOS TO'LIQ ISMINGIZNI KIRITING",
            "ask_phone1" => "ILTIMOS, TELEFON RAQAMINGIZNI KIRITING:",
            "ask_phone2" => "MASALAN:",
            "code1" => "USHBU ",
            "code2" => "GA TASDIQLASH KODI YUBORILDI. ILTIMOS TASDIQLASH KODINI KIRITING. π©",
            "menu" => "BIRGALIKDA BUYURTMA BERAMIZ π€ β¬οΈ",
            "history" => "π Buyurtmalar tarixi",
            "lang" => "πΊπΏ Tilni o'zgartirish",
            "cart" => "π Savatga o'tish",
            "phone" => "βοΈMening telefon raqamim",
            "select" => "Siz tanladingiz",
            "price" => "Narxi",
            "number" => "Iltimos, sonini tanlang",
            "addToCart" => "π Savatga qo'shish",
            "back" => "β¬οΈ Ortga",
            "accept" => "β¬οΈ raqamli buyurtmangiz qabul qilindi! Iltimos, operator qo'ng'irog'ini kutmang. Buyurtmangizni 40 daqiqa davomida yetkazib beramiz.",
            "empty" => "π€·ββοΈSavat hali bo'm-bo'sh",
            "order_time" => "Buyurtma vaqti:",
            "order_no" => "Buyurtma raqami: ",
            "general" => "Umumiy:",
            "section" => "Bo'lim:",
            "select_no" => "Iltimos, soni tanlang!",
            "error" => "Xato, qaytadan urinib ko'ring",
            "confirm" => "TASDIQLASH β",
            "yana" => "Yana tanlash",
            "no_orders" => "Buyurtmalar hali mavjud emas",
            "delivery" => "π Yetkazib berish",
            "sam" => "πββοΈ Olib ketish",
            "select_type" => "Yetkazib berish usulini tanlang",
            "geolocation" => "π Geolokatsiyani tanlash π ",
            "location_text" => '"Iltimos, βπ Geolokatsiyani joβnatishβ tugmasini bosish orqali geolokatsiyangizni yuboring. Bunda telefoningizda manzilni aniqlash funksiyasi yoqilgan boβlishi lozim."',
            "re_location" => "π Geolatsiyani qayta jo'natish",
            "your_address" => "Sizning manzilingiz",
            "correct_address"   => "XURMATLI MIJOZ ILTIMOS YASHASH MANZILINGIZNI YOZMA RAVISHDA ANIK VA TUGRI YOZING !",
            "next" => "β‘οΈ Keyingi"
        ]

    ];
    return $keys[$locale][$key];
}


