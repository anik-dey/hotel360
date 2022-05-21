<?php

namespace Database\Seeders;

use App\Models\Common\Thana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ThanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Thana::truncate();

        $thanas = [
            [
              "city_id" => "1",
              "name" => "Debidwar",
              "bn_name" => "দেবিদ্বার",
              "url" => "debidwar.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Barura",
              "bn_name" => "বরুড়া",
              "url" => "barura.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Brahmanpara",
              "bn_name" => "ব্রাহ্মণপাড়া",
              "url" => "brahmanpara.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Chandina",
              "bn_name" => "চান্দিনা",
              "url" => "chandina.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Chauddagram",
              "bn_name" => "চৌদ্দগ্রাম",
              "url" => "chauddagram.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Daudkandi",
              "bn_name" => "দাউদকান্দি",
              "url" => "daudkandi.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Homna",
              "bn_name" => "হোমনা",
              "url" => "homna.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Laksam",
              "bn_name" => "লাকসাম",
              "url" => "laksam.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Muradnagar",
              "bn_name" => "মুরাদনগর",
              "url" => "muradnagar.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Nangalkot",
              "bn_name" => "নাঙ্গলকোট",
              "url" => "nangalkot.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Comilla Sadar",
              "bn_name" => "কুমিল্লা সদর",
              "url" => "comillasadar.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Meghna",
              "bn_name" => "মেঘনা",
              "url" => "meghna.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Monohargonj",
              "bn_name" => "মনোহরগঞ্জ",
              "url" => "monohargonj.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Sadarsouth",
              "bn_name" => "সদর দক্ষিণ",
              "url" => "sadarsouth.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Titas",
              "bn_name" => "তিতাস",
              "url" => "titas.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Burichang",
              "bn_name" => "বুড়িচং",
              "url" => "burichang.comilla.gov.bd"
            ],
            [
              "city_id" => "1",
              "name" => "Lalmai",
              "bn_name" => "লালমাই",
              "url" => "lalmai.comilla.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Chhagalnaiya",
              "bn_name" => "ছাগলনাইয়া",
              "url" => "chhagalnaiya.feni.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Feni Sadar",
              "bn_name" => "ফেনী সদর",
              "url" => "sadar.feni.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Sonagazi",
              "bn_name" => "সোনাগাজী",
              "url" => "sonagazi.feni.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Fulgazi",
              "bn_name" => "ফুলগাজী",
              "url" => "fulgazi.feni.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Parshuram",
              "bn_name" => "পরশুরাম",
              "url" => "parshuram.feni.gov.bd"
            ],
            [
              "city_id" => "2",
              "name" => "Daganbhuiyan",
              "bn_name" => "দাগনভূঞা",
              "url" => "daganbhuiyan.feni.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Brahmanbaria Sadar",
              "bn_name" => "ব্রাহ্মণবাড়িয়া সদর",
              "url" => "sadar.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Kasba",
              "bn_name" => "কসবা",
              "url" => "kasba.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Nasirnagar",
              "bn_name" => "নাসিরনগর",
              "url" => "nasirnagar.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Sarail",
              "bn_name" => "সরাইল",
              "url" => "sarail.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Ashuganj",
              "bn_name" => "আশুগঞ্জ",
              "url" => "ashuganj.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Akhaura",
              "bn_name" => "আখাউড়া",
              "url" => "akhaura.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Nabinagar",
              "bn_name" => "নবীনগর",
              "url" => "nabinagar.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Bancharampur",
              "bn_name" => "বাঞ্ছারামপুর",
              "url" => "bancharampur.brahmanbaria.gov.bd"
            ],
            [
              "city_id" => "3",
              "name" => "Bijoynagar",
              "bn_name" => "বিজয়নগর",
              "url" => "bijoynagar.brahmanbaria.gov.bd    "
            ],
            [
              "city_id" => "4",
              "name" => "Rangamati Sadar",
              "bn_name" => "রাঙ্গামাটি সদর",
              "url" => "sadar.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Kaptai",
              "bn_name" => "কাপ্তাই",
              "url" => "kaptai.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Kawkhali",
              "bn_name" => "কাউখালী",
              "url" => "kawkhali.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Baghaichari",
              "bn_name" => "বাঘাইছড়ি",
              "url" => "baghaichari.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Barkal",
              "bn_name" => "বরকল",
              "url" => "barkal.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Langadu",
              "bn_name" => "লংগদু",
              "url" => "langadu.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Rajasthali",
              "bn_name" => "রাজস্থলী",
              "url" => "rajasthali.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Belaichari",
              "bn_name" => "বিলাইছড়ি",
              "url" => "belaichari.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Juraichari",
              "bn_name" => "জুরাছড়ি",
              "url" => "juraichari.rangamati.gov.bd"
            ],
            [
              "city_id" => "4",
              "name" => "Naniarchar",
              "bn_name" => "নানিয়ারচর",
              "url" => "naniarchar.rangamati.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Noakhali Sadar",
              "bn_name" => "নোয়াখালী সদর",
              "url" => "sadar.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Companiganj",
              "bn_name" => "কোম্পানীগঞ্জ",
              "url" => "companiganj.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Begumganj",
              "bn_name" => "বেগমগঞ্জ",
              "url" => "begumganj.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Hatia",
              "bn_name" => "হাতিয়া",
              "url" => "hatia.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Subarnachar",
              "bn_name" => "সুবর্ণচর",
              "url" => "subarnachar.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Kabirhat",
              "bn_name" => "কবিরহাট",
              "url" => "kabirhat.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Senbug",
              "bn_name" => "সেনবাগ",
              "url" => "senbug.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Chatkhil",
              "bn_name" => "চাটখিল",
              "url" => "chatkhil.noakhali.gov.bd"
            ],
            [
              "city_id" => "5",
              "name" => "Sonaimori",
              "bn_name" => "সোনাইমুড়ী",
              "url" => "sonaimori.noakhali.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Haimchar",
              "bn_name" => "হাইমচর",
              "url" => "haimchar.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Kachua",
              "bn_name" => "কচুয়া",
              "url" => "kachua.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Shahrasti",
              "bn_name" => "শাহরাস্তি	",
              "url" => "shahrasti.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Chandpur Sadar",
              "bn_name" => "চাঁদপুর সদর",
              "url" => "sadar.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Matlab South",
              "bn_name" => "মতলব দক্ষিণ",
              "url" => "matlabsouth.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Hajiganj",
              "bn_name" => "হাজীগঞ্জ",
              "url" => "hajiganj.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Matlab North",
              "bn_name" => "মতলব উত্তর",
              "url" => "matlabnorth.chandpur.gov.bd"
            ],
            [
              "city_id" => "6",
              "name" => "Faridgonj",
              "bn_name" => "ফরিদগঞ্জ",
              "url" => "faridgonj.chandpur.gov.bd"
            ],
            [
              "city_id" => "7",
              "name" => "Lakshmipur Sadar",
              "bn_name" => "লক্ষ্মীপুর সদর",
              "url" => "sadar.lakshmipur.gov.bd"
            ],
            [
              "city_id" => "7",
              "name" => "Kamalnagar",
              "bn_name" => "কমলনগর",
              "url" => "kamalnagar.lakshmipur.gov.bd"
            ],
            [
              "city_id" => "7",
              "name" => "Raipur",
              "bn_name" => "রায়পুর",
              "url" => "raipur.lakshmipur.gov.bd"
            ],
            [
              "city_id" => "7",
              "name" => "Ramgati",
              "bn_name" => "রামগতি",
              "url" => "ramgati.lakshmipur.gov.bd"
            ],
            [
              "city_id" => "7",
              "name" => "Ramganj",
              "bn_name" => "রামগঞ্জ",
              "url" => "ramganj.lakshmipur.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Rangunia",
              "bn_name" => "রাঙ্গুনিয়া",
              "url" => "rangunia.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Sitakunda",
              "bn_name" => "সীতাকুন্ড",
              "url" => "sitakunda.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Mirsharai",
              "bn_name" => "মীরসরাই",
              "url" => "mirsharai.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Patiya",
              "bn_name" => "পটিয়া",
              "url" => "patiya.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Sandwip",
              "bn_name" => "সন্দ্বীপ",
              "url" => "sandwip.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Banshkhali",
              "bn_name" => "বাঁশখালী",
              "url" => "banshkhali.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Boalkhali",
              "bn_name" => "বোয়ালখালী",
              "url" => "boalkhali.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Anwara",
              "bn_name" => "আনোয়ারা",
              "url" => "anwara.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Chandanaish",
              "bn_name" => "চন্দনাইশ",
              "url" => "chandanaish.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Satkania",
              "bn_name" => "সাতকানিয়া",
              "url" => "satkania.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Lohagara",
              "bn_name" => "লোহাগাড়া",
              "url" => "lohagara.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Hathazari",
              "bn_name" => "হাটহাজারী",
              "url" => "hathazari.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Fatikchhari",
              "bn_name" => "ফটিকছড়ি",
              "url" => "fatikchhari.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Raozan",
              "bn_name" => "রাউজান",
              "url" => "raozan.chittagong.gov.bd"
            ],
            [
              "city_id" => "8",
              "name" => "Karnafuli",
              "bn_name" => "কর্ণফুলী",
              "url" => "karnafuli.chittagong.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Coxsbazar Sadar",
              "bn_name" => "কক্সবাজার সদর",
              "url" => "sadar.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Chakaria",
              "bn_name" => "চকরিয়া",
              "url" => "chakaria.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Kutubdia",
              "bn_name" => "কুতুবদিয়া",
              "url" => "kutubdia.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Ukhiya",
              "bn_name" => "উখিয়া",
              "url" => "ukhiya.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Moheshkhali",
              "bn_name" => "মহেশখালী",
              "url" => "moheshkhali.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Pekua",
              "bn_name" => "পেকুয়া",
              "url" => "pekua.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Ramu",
              "bn_name" => "রামু",
              "url" => "ramu.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "9",
              "name" => "Teknaf",
              "bn_name" => "টেকনাফ",
              "url" => "teknaf.coxsbazar.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Khagrachhari Sadar",
              "bn_name" => "খাগড়াছড়ি সদর",
              "url" => "sadar.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Dighinala",
              "bn_name" => "দিঘীনালা",
              "url" => "dighinala.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Panchari",
              "bn_name" => "পানছড়ি",
              "url" => "panchari.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Laxmichhari",
              "bn_name" => "লক্ষীছড়ি",
              "url" => "laxmichhari.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Mohalchari",
              "bn_name" => "মহালছড়ি",
              "url" => "mohalchari.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Manikchari",
              "bn_name" => "মানিকছড়ি",
              "url" => "manikchari.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Ramgarh",
              "bn_name" => "রামগড়",
              "url" => "ramgarh.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Matiranga",
              "bn_name" => "মাটিরাঙ্গা",
              "url" => "matiranga.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "10",
              "name" => "Guimara",
              "bn_name" => "গুইমারা",
              "url" => "guimara.khagrachhari.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Bandarban Sadar",
              "bn_name" => "বান্দরবান সদর",
              "url" => "sadar.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Alikadam",
              "bn_name" => "আলীকদম",
              "url" => "alikadam.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Naikhongchhari",
              "bn_name" => "নাইক্ষ্যংছড়ি",
              "url" => "naikhongchhari.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Rowangchhari",
              "bn_name" => "রোয়াংছড়ি",
              "url" => "rowangchhari.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Lama",
              "bn_name" => "লামা",
              "url" => "lama.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Ruma",
              "bn_name" => "রুমা",
              "url" => "ruma.bandarban.gov.bd"
            ],
            [
              "city_id" => "11",
              "name" => "Thanchi",
              "bn_name" => "থানচি",
              "url" => "thanchi.bandarban.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Belkuchi",
              "bn_name" => "বেলকুচি",
              "url" => "belkuchi.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Chauhali",
              "bn_name" => "চৌহালি",
              "url" => "chauhali.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Kamarkhand",
              "bn_name" => "কামারখন্দ",
              "url" => "kamarkhand.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Kazipur",
              "bn_name" => "কাজীপুর",
              "url" => "kazipur.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Raigonj",
              "bn_name" => "রায়গঞ্জ",
              "url" => "raigonj.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Shahjadpur",
              "bn_name" => "শাহজাদপুর",
              "url" => "shahjadpur.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Sirajganj Sadar",
              "bn_name" => "সিরাজগঞ্জ সদর",
              "url" => "sirajganjsadar.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Tarash",
              "bn_name" => "তাড়াশ",
              "url" => "tarash.sirajganj.gov.bd"
            ],
            [
              "city_id" => "12",
              "name" => "Ullapara",
              "bn_name" => "উল্লাপাড়া",
              "url" => "ullapara.sirajganj.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Sujanagar",
              "bn_name" => "সুজানগর",
              "url" => "sujanagar.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Ishurdi",
              "bn_name" => "ঈশ্বরদী",
              "url" => "ishurdi.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Bhangura",
              "bn_name" => "ভাঙ্গুড়া",
              "url" => "bhangura.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Pabna Sadar",
              "bn_name" => "পাবনা সদর",
              "url" => "pabnasadar.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Bera",
              "bn_name" => "বেড়া",
              "url" => "bera.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Atghoria",
              "bn_name" => "আটঘরিয়া",
              "url" => "atghoria.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Chatmohar",
              "bn_name" => "চাটমোহর",
              "url" => "chatmohar.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Santhia",
              "bn_name" => "সাঁথিয়া",
              "url" => "santhia.pabna.gov.bd"
            ],
            [
              "city_id" => "13",
              "name" => "Faridpur",
              "bn_name" => "ফরিদপুর",
              "url" => "faridpur.pabna.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Kahaloo",
              "bn_name" => "কাহালু",
              "url" => "kahaloo.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Bogra Sadar",
              "bn_name" => "বগুড়া সদর",
              "url" => "sadar.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Shariakandi",
              "bn_name" => "সারিয়াকান্দি",
              "url" => "shariakandi.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Shajahanpur",
              "bn_name" => "শাজাহানপুর",
              "url" => "shajahanpur.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Dupchanchia",
              "bn_name" => "দুপচাচিঁয়া",
              "url" => "dupchanchia.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Adamdighi",
              "bn_name" => "আদমদিঘি",
              "url" => "adamdighi.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Nondigram",
              "bn_name" => "নন্দিগ্রাম",
              "url" => "nondigram.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Sonatala",
              "bn_name" => "সোনাতলা",
              "url" => "sonatala.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Dhunot",
              "bn_name" => "ধুনট",
              "url" => "dhunot.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Gabtali",
              "bn_name" => "গাবতলী",
              "url" => "gabtali.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Sherpur",
              "bn_name" => "শেরপুর",
              "url" => "sherpur.bogra.gov.bd"
            ],
            [
              "city_id" => "14",
              "name" => "Shibganj",
              "bn_name" => "শিবগঞ্জ",
              "url" => "shibganj.bogra.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Paba",
              "bn_name" => "পবা",
              "url" => "paba.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Durgapur",
              "bn_name" => "দুর্গাপুর",
              "url" => "durgapur.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Mohonpur",
              "bn_name" => "মোহনপুর",
              "url" => "mohonpur.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Charghat",
              "bn_name" => "চারঘাট",
              "url" => "charghat.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Puthia",
              "bn_name" => "পুঠিয়া",
              "url" => "puthia.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Bagha",
              "bn_name" => "বাঘা",
              "url" => "bagha.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Godagari",
              "bn_name" => "গোদাগাড়ী",
              "url" => "godagari.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Tanore",
              "bn_name" => "তানোর",
              "url" => "tanore.rajshahi.gov.bd"
            ],
            [
              "city_id" => "15",
              "name" => "Bagmara",
              "bn_name" => "বাগমারা",
              "url" => "bagmara.rajshahi.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Natore Sadar",
              "bn_name" => "নাটোর সদর",
              "url" => "natoresadar.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Singra",
              "bn_name" => "সিংড়া",
              "url" => "singra.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Baraigram",
              "bn_name" => "বড়াইগ্রাম",
              "url" => "baraigram.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Bagatipara",
              "bn_name" => "বাগাতিপাড়া",
              "url" => "bagatipara.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Lalpur",
              "bn_name" => "লালপুর",
              "url" => "lalpur.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Gurudaspur",
              "bn_name" => "গুরুদাসপুর",
              "url" => "gurudaspur.natore.gov.bd"
            ],
            [
              "city_id" => "16",
              "name" => "Naldanga",
              "bn_name" => "নলডাঙ্গা",
              "url" => "naldanga.natore.gov.bd"
            ],
            [
              "city_id" => "17",
              "name" => "Akkelpur",
              "bn_name" => "আক্কেলপুর",
              "url" => "akkelpur.joypurhat.gov.bd"
            ],
            [
              "city_id" => "17",
              "name" => "Kalai",
              "bn_name" => "কালাই",
              "url" => "kalai.joypurhat.gov.bd"
            ],
            [
              "city_id" => "17",
              "name" => "Khetlal",
              "bn_name" => "ক্ষেতলাল",
              "url" => "khetlal.joypurhat.gov.bd"
            ],
            [
              "city_id" => "17",
              "name" => "Panchbibi",
              "bn_name" => "পাঁচবিবি",
              "url" => "panchbibi.joypurhat.gov.bd"
            ],
            [
              "city_id" => "17",
              "name" => "Joypurhat Sadar",
              "bn_name" => "জয়পুরহাট সদর",
              "url" => "joypurhatsadar.joypurhat.gov.bd"
            ],
            [
              "city_id" => "18",
              "name" => "Chapainawabganj Sadar",
              "bn_name" => "চাঁপাইনবাবগঞ্জ সদর",
              "url" => "chapainawabganjsadar.chapainawabganj.gov.bd"
            ],
            [
              "city_id" => "18",
              "name" => "Gomostapur",
              "bn_name" => "গোমস্তাপুর",
              "url" => "gomostapur.chapainawabganj.gov.bd"
            ],
            [
              "city_id" => "18",
              "name" => "Nachol",
              "bn_name" => "নাচোল",
              "url" => "nachol.chapainawabganj.gov.bd"
            ],
            [
              "city_id" => "18",
              "name" => "Bholahat",
              "bn_name" => "ভোলাহাট",
              "url" => "bholahat.chapainawabganj.gov.bd"
            ],
            [
              "city_id" => "18",
              "name" => "Shibganj",
              "bn_name" => "শিবগঞ্জ",
              "url" => "shibganj.chapainawabganj.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Mohadevpur",
              "bn_name" => "মহাদেবপুর",
              "url" => "mohadevpur.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Badalgachi",
              "bn_name" => "বদলগাছী",
              "url" => "badalgachi.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Patnitala",
              "bn_name" => "পত্নিতলা",
              "url" => "patnitala.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Dhamoirhat",
              "bn_name" => "ধামইরহাট",
              "url" => "dhamoirhat.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Niamatpur",
              "bn_name" => "নিয়ামতপুর",
              "url" => "niamatpur.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Manda",
              "bn_name" => "মান্দা",
              "url" => "manda.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Atrai",
              "bn_name" => "আত্রাই",
              "url" => "atrai.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Raninagar",
              "bn_name" => "রাণীনগর",
              "url" => "raninagar.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Naogaon Sadar",
              "bn_name" => "নওগাঁ সদর",
              "url" => "naogaonsadar.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Porsha",
              "bn_name" => "পোরশা",
              "url" => "porsha.naogaon.gov.bd"
            ],
            [
              "city_id" => "19",
              "name" => "Sapahar",
              "bn_name" => "সাপাহার",
              "url" => "sapahar.naogaon.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Manirampur",
              "bn_name" => "মণিরামপুর",
              "url" => "manirampur.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Abhaynagar",
              "bn_name" => "অভয়নগর",
              "url" => "abhaynagar.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Bagherpara",
              "bn_name" => "বাঘারপাড়া",
              "url" => "bagherpara.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Chougachha",
              "bn_name" => "চৌগাছা",
              "url" => "chougachha.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Jhikargacha",
              "bn_name" => "ঝিকরগাছা",
              "url" => "jhikargacha.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Keshabpur",
              "bn_name" => "কেশবপুর",
              "url" => "keshabpur.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Jessore Sadar",
              "bn_name" => "যশোর সদর",
              "url" => "sadar.jessore.gov.bd"
            ],
            [
              "city_id" => "20",
              "name" => "Sharsha",
              "bn_name" => "শার্শা",
              "url" => "sharsha.jessore.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Assasuni",
              "bn_name" => "আশাশুনি",
              "url" => "assasuni.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Debhata",
              "bn_name" => "দেবহাটা",
              "url" => "debhata.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Kalaroa",
              "bn_name" => "কলারোয়া",
              "url" => "kalaroa.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Satkhira Sadar",
              "bn_name" => "সাতক্ষীরা সদর",
              "url" => "satkhirasadar.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Shyamnagar",
              "bn_name" => "শ্যামনগর",
              "url" => "shyamnagar.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Tala",
              "bn_name" => "তালা",
              "url" => "tala.satkhira.gov.bd"
            ],
            [
              "city_id" => "21",
              "name" => "Kaliganj",
              "bn_name" => "কালিগঞ্জ",
              "url" => "kaliganj.satkhira.gov.bd"
            ],
            [
              "city_id" => "22",
              "name" => "Mujibnagar",
              "bn_name" => "মুজিবনগর",
              "url" => "mujibnagar.meherpur.gov.bd"
            ],
            [
              "city_id" => "22",
              "name" => "Meherpur Sadar",
              "bn_name" => "মেহেরপুর সদর",
              "url" => "meherpursadar.meherpur.gov.bd"
            ],
            [
              "city_id" => "22",
              "name" => "Gangni",
              "bn_name" => "গাংনী",
              "url" => "gangni.meherpur.gov.bd"
            ],
            [
              "city_id" => "23",
              "name" => "Narail Sadar",
              "bn_name" => "নড়াইল সদর",
              "url" => "narailsadar.narail.gov.bd"
            ],
            [
              "city_id" => "23",
              "name" => "Lohagara",
              "bn_name" => "লোহাগড়া",
              "url" => "lohagara.narail.gov.bd"
            ],
            [
              "city_id" => "23",
              "name" => "Kalia",
              "bn_name" => "কালিয়া",
              "url" => "kalia.narail.gov.bd"
            ],
            [
              "city_id" => "24",
              "name" => "Chuadanga Sadar",
              "bn_name" => "চুয়াডাঙ্গা সদর",
              "url" => "chuadangasadar.chuadanga.gov.bd"
            ],
            [
              "city_id" => "24",
              "name" => "Alamdanga",
              "bn_name" => "আলমডাঙ্গা",
              "url" => "alamdanga.chuadanga.gov.bd"
            ],
            [
              "city_id" => "24",
              "name" => "Damurhuda",
              "bn_name" => "দামুড়হুদা",
              "url" => "damurhuda.chuadanga.gov.bd"
            ],
            [
              "city_id" => "24",
              "name" => "Jibannagar",
              "bn_name" => "জীবননগর",
              "url" => "jibannagar.chuadanga.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Kushtia Sadar",
              "bn_name" => "কুষ্টিয়া সদর",
              "url" => "kushtiasadar.kushtia.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Kumarkhali",
              "bn_name" => "কুমারখালী",
              "url" => "kumarkhali.kushtia.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Khoksa",
              "bn_name" => "খোকসা",
              "url" => "khoksa.kushtia.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Mirpur",
              "bn_name" => "মিরপুর",
              "url" => "mirpurkushtia.kushtia.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Daulatpur",
              "bn_name" => "দৌলতপুর",
              "url" => "daulatpur.kushtia.gov.bd"
            ],
            [
              "city_id" => "25",
              "name" => "Bheramara",
              "bn_name" => "ভেড়ামারা",
              "url" => "bheramara.kushtia.gov.bd"
            ],
            [
              "city_id" => "26",
              "name" => "Shalikha",
              "bn_name" => "শালিখা",
              "url" => "shalikha.magura.gov.bd"
            ],
            [
              "city_id" => "26",
              "name" => "Sreepur",
              "bn_name" => "শ্রীপুর",
              "url" => "sreepur.magura.gov.bd"
            ],
            [
              "city_id" => "26",
              "name" => "Magura Sadar",
              "bn_name" => "মাগুরা সদর",
              "url" => "magurasadar.magura.gov.bd"
            ],
            [
              "city_id" => "26",
              "name" => "Mohammadpur",
              "bn_name" => "মহম্মদপুর",
              "url" => "mohammadpur.magura.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Paikgasa",
              "bn_name" => "পাইকগাছা",
              "url" => "paikgasa.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Fultola",
              "bn_name" => "ফুলতলা",
              "url" => "fultola.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Digholia",
              "bn_name" => "দিঘলিয়া",
              "url" => "digholia.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Rupsha",
              "bn_name" => "রূপসা",
              "url" => "rupsha.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Terokhada",
              "bn_name" => "তেরখাদা",
              "url" => "terokhada.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Dumuria",
              "bn_name" => "ডুমুরিয়া",
              "url" => "dumuria.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Botiaghata",
              "bn_name" => "বটিয়াঘাটা",
              "url" => "botiaghata.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Dakop",
              "bn_name" => "দাকোপ",
              "url" => "dakop.khulna.gov.bd"
            ],
            [
              "city_id" => "27",
              "name" => "Koyra",
              "bn_name" => "কয়রা",
              "url" => "koyra.khulna.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Fakirhat",
              "bn_name" => "ফকিরহাট",
              "url" => "fakirhat.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Bagerhat Sadar",
              "bn_name" => "বাগেরহাট সদর",
              "url" => "sadar.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Mollahat",
              "bn_name" => "মোল্লাহাট",
              "url" => "mollahat.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Sarankhola",
              "bn_name" => "শরণখোলা",
              "url" => "sarankhola.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Rampal",
              "bn_name" => "রামপাল",
              "url" => "rampal.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Morrelganj",
              "bn_name" => "মোড়েলগঞ্জ",
              "url" => "morrelganj.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Kachua",
              "bn_name" => "কচুয়া",
              "url" => "kachua.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Mongla",
              "bn_name" => "মোংলা",
              "url" => "mongla.bagerhat.gov.bd"
            ],
            [
              "city_id" => "28",
              "name" => "Chitalmari",
              "bn_name" => "চিতলমারী",
              "url" => "chitalmari.bagerhat.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Jhenaidah Sadar",
              "bn_name" => "ঝিনাইদহ সদর",
              "url" => "sadar.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Shailkupa",
              "bn_name" => "শৈলকুপা",
              "url" => "shailkupa.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Harinakundu",
              "bn_name" => "হরিণাকুন্ডু",
              "url" => "harinakundu.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Kaliganj",
              "bn_name" => "কালীগঞ্জ",
              "url" => "kaliganj.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Kotchandpur",
              "bn_name" => "কোটচাঁদপুর",
              "url" => "kotchandpur.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "29",
              "name" => "Moheshpur",
              "bn_name" => "মহেশপুর",
              "url" => "moheshpur.jhenaidah.gov.bd"
            ],
            [
              "city_id" => "30",
              "name" => "Jhalakathi Sadar",
              "bn_name" => "ঝালকাঠি সদর",
              "url" => "sadar.jhalakathi.gov.bd"
            ],
            [
              "city_id" => "30",
              "name" => "Kathalia",
              "bn_name" => "কাঠালিয়া",
              "url" => "kathalia.jhalakathi.gov.bd"
            ],
            [
              "city_id" => "30",
              "name" => "Nalchity",
              "bn_name" => "নলছিটি",
              "url" => "nalchity.jhalakathi.gov.bd"
            ],
            [
              "city_id" => "30",
              "name" => "Rajapur",
              "bn_name" => "রাজাপুর",
              "url" => "rajapur.jhalakathi.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Bauphal",
              "bn_name" => "বাউফল",
              "url" => "bauphal.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Patuakhali Sadar",
              "bn_name" => "পটুয়াখালী সদর",
              "url" => "sadar.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Dumki",
              "bn_name" => "দুমকি",
              "url" => "dumki.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Dashmina",
              "bn_name" => "দশমিনা",
              "url" => "dashmina.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Kalapara",
              "bn_name" => "কলাপাড়া",
              "url" => "kalapara.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Mirzaganj",
              "bn_name" => "মির্জাগঞ্জ",
              "url" => "mirzaganj.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Galachipa",
              "bn_name" => "গলাচিপা",
              "url" => "galachipa.patuakhali.gov.bd"
            ],
            [
              "city_id" => "31",
              "name" => "Rangabali",
              "bn_name" => "রাঙ্গাবালী",
              "url" => "rangabali.patuakhali.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Pirojpur Sadar",
              "bn_name" => "পিরোজপুর সদর",
              "url" => "sadar.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Nazirpur",
              "bn_name" => "নাজিরপুর",
              "url" => "nazirpur.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Kawkhali",
              "bn_name" => "কাউখালী",
              "url" => "kawkhali.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Zianagar",
              "bn_name" => "জিয়ানগর",
              "url" => "zianagar.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Bhandaria",
              "bn_name" => "ভান্ডারিয়া",
              "url" => "bhandaria.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Mathbaria",
              "bn_name" => "মঠবাড়ীয়া",
              "url" => "mathbaria.pirojpur.gov.bd"
            ],
            [
              "city_id" => "32",
              "name" => "Nesarabad",
              "bn_name" => "নেছারাবাদ",
              "url" => "nesarabad.pirojpur.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Barisal Sadar",
              "bn_name" => "বরিশাল সদর",
              "url" => "barisalsadar.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Bakerganj",
              "bn_name" => "বাকেরগঞ্জ",
              "url" => "bakerganj.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Babuganj",
              "bn_name" => "বাবুগঞ্জ",
              "url" => "babuganj.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Wazirpur",
              "bn_name" => "উজিরপুর",
              "url" => "wazirpur.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Banaripara",
              "bn_name" => "বানারীপাড়া",
              "url" => "banaripara.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Gournadi",
              "bn_name" => "গৌরনদী",
              "url" => "gournadi.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Agailjhara",
              "bn_name" => "আগৈলঝাড়া",
              "url" => "agailjhara.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Mehendiganj",
              "bn_name" => "মেহেন্দিগঞ্জ",
              "url" => "mehendiganj.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Muladi",
              "bn_name" => "মুলাদী",
              "url" => "muladi.barisal.gov.bd"
            ],
            [
              "city_id" => "33",
              "name" => "Hizla",
              "bn_name" => "হিজলা",
              "url" => "hizla.barisal.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Bhola Sadar",
              "bn_name" => "ভোলা সদর",
              "url" => "sadar.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Borhan Sddin",
              "bn_name" => "বোরহান উদ্দিন",
              "url" => "borhanuddin.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Charfesson",
              "bn_name" => "চরফ্যাশন",
              "url" => "charfesson.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Doulatkhan",
              "bn_name" => "দৌলতখান",
              "url" => "doulatkhan.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Monpura",
              "bn_name" => "মনপুরা",
              "url" => "monpura.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Tazumuddin",
              "bn_name" => "তজুমদ্দিন",
              "url" => "tazumuddin.bhola.gov.bd"
            ],
            [
              "city_id" => "34",
              "name" => "Lalmohan",
              "bn_name" => "লালমোহন",
              "url" => "lalmohan.bhola.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Amtali",
              "bn_name" => "আমতলী",
              "url" => "amtali.barguna.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Barguna Sadar",
              "bn_name" => "বরগুনা সদর",
              "url" => "sadar.barguna.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Betagi",
              "bn_name" => "বেতাগী",
              "url" => "betagi.barguna.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Bamna",
              "bn_name" => "বামনা",
              "url" => "bamna.barguna.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Pathorghata",
              "bn_name" => "পাথরঘাটা",
              "url" => "pathorghata.barguna.gov.bd"
            ],
            [
              "city_id" => "35",
              "name" => "Taltali",
              "bn_name" => "তালতলি",
              "url" => "taltali.barguna.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Balaganj",
              "bn_name" => "বালাগঞ্জ",
              "url" => "balaganj.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Beanibazar",
              "bn_name" => "বিয়ানীবাজার",
              "url" => "beanibazar.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Bishwanath",
              "bn_name" => "বিশ্বনাথ",
              "url" => "bishwanath.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Companiganj",
              "bn_name" => "কোম্পানীগঞ্জ",
              "url" => "companiganj.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Fenchuganj",
              "bn_name" => "ফেঞ্চুগঞ্জ",
              "url" => "fenchuganj.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Golapganj",
              "bn_name" => "গোলাপগঞ্জ",
              "url" => "golapganj.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Gowainghat",
              "bn_name" => "গোয়াইনঘাট",
              "url" => "gowainghat.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Jaintiapur",
              "bn_name" => "জৈন্তাপুর",
              "url" => "jaintiapur.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Kanaighat",
              "bn_name" => "কানাইঘাট",
              "url" => "kanaighat.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Sylhet Sadar",
              "bn_name" => "সিলেট সদর",
              "url" => "sylhetsadar.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Zakiganj",
              "bn_name" => "জকিগঞ্জ",
              "url" => "zakiganj.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Dakshinsurma",
              "bn_name" => "দক্ষিণ সুরমা",
              "url" => "dakshinsurma.sylhet.gov.bd"
            ],
            [
              "city_id" => "36",
              "name" => "Osmaninagar",
              "bn_name" => "ওসমানী নগর",
              "url" => "osmaninagar.sylhet.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Barlekha",
              "bn_name" => "বড়লেখা",
              "url" => "barlekha.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Kamolganj",
              "bn_name" => "কমলগঞ্জ",
              "url" => "kamolganj.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Kulaura",
              "bn_name" => "কুলাউড়া",
              "url" => "kulaura.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Moulvibazar Sadar",
              "bn_name" => "মৌলভীবাজার সদর",
              "url" => "moulvibazarsadar.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Rajnagar",
              "bn_name" => "রাজনগর",
              "url" => "rajnagar.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Sreemangal",
              "bn_name" => "শ্রীমঙ্গল",
              "url" => "sreemangal.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "37",
              "name" => "Juri",
              "bn_name" => "জুড়ী",
              "url" => "juri.moulvibazar.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Nabiganj",
              "bn_name" => "নবীগঞ্জ",
              "url" => "nabiganj.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Bahubal",
              "bn_name" => "বাহুবল",
              "url" => "bahubal.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Ajmiriganj",
              "bn_name" => "আজমিরীগঞ্জ",
              "url" => "ajmiriganj.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Baniachong",
              "bn_name" => "বানিয়াচং",
              "url" => "baniachong.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Lakhai",
              "bn_name" => "লাখাই",
              "url" => "lakhai.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Chunarughat",
              "bn_name" => "চুনারুঘাট",
              "url" => "chunarughat.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Habiganj Sadar",
              "bn_name" => "হবিগঞ্জ সদর",
              "url" => "habiganjsadar.habiganj.gov.bd"
            ],
            [
              "city_id" => "38",
              "name" => "Madhabpur",
              "bn_name" => "মাধবপুর",
              "url" => "madhabpur.habiganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Sunamganj Sadar",
              "bn_name" => "সুনামগঞ্জ সদর",
              "url" => "sadar.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "South Sunamganj",
              "bn_name" => "দক্ষিণ সুনামগঞ্জ",
              "url" => "southsunamganj.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Bishwambarpur",
              "bn_name" => "বিশ্বম্ভরপুর",
              "url" => "bishwambarpur.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Chhatak",
              "bn_name" => "ছাতক",
              "url" => "chhatak.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Jagannathpur",
              "bn_name" => "জগন্নাথপুর",
              "url" => "jagannathpur.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Dowarabazar",
              "bn_name" => "দোয়ারাবাজার",
              "url" => "dowarabazar.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Tahirpur",
              "bn_name" => "তাহিরপুর",
              "url" => "tahirpur.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Dharmapasha",
              "bn_name" => "ধর্মপাশা",
              "url" => "dharmapasha.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Jamalganj",
              "bn_name" => "জামালগঞ্জ",
              "url" => "jamalganj.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Shalla",
              "bn_name" => "শাল্লা",
              "url" => "shalla.sunamganj.gov.bd"
            ],
            [
              "city_id" => "39",
              "name" => "Derai",
              "bn_name" => "দিরাই",
              "url" => "derai.sunamganj.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Belabo",
              "bn_name" => "বেলাবো",
              "url" => "belabo.narsingdi.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Monohardi",
              "bn_name" => "মনোহরদী",
              "url" => "monohardi.narsingdi.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Narsingdi Sadar",
              "bn_name" => "নরসিংদী সদর",
              "url" => "narsingdisadar.narsingdi.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Palash",
              "bn_name" => "পলাশ",
              "url" => "palash.narsingdi.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Raipura",
              "bn_name" => "রায়পুরা",
              "url" => "raipura.narsingdi.gov.bd"
            ],
            [
              "city_id" => "40",
              "name" => "Shibpur",
              "bn_name" => "শিবপুর",
              "url" => "shibpur.narsingdi.gov.bd"
            ],
            [
              "city_id" => "41",
              "name" => "Kaliganj",
              "bn_name" => "কালীগঞ্জ",
              "url" => "kaliganj.gazipur.gov.bd"
            ],
            [
              "city_id" => "41",
              "name" => "Kaliakair",
              "bn_name" => "কালিয়াকৈর",
              "url" => "kaliakair.gazipur.gov.bd"
            ],
            [
              "city_id" => "41",
              "name" => "Kapasia",
              "bn_name" => "কাপাসিয়া",
              "url" => "kapasia.gazipur.gov.bd"
            ],
            [
              "city_id" => "41",
              "name" => "Gazipur Sadar",
              "bn_name" => "গাজীপুর সদর",
              "url" => "sadar.gazipur.gov.bd"
            ],
            [
              "city_id" => "41",
              "name" => "Sreepur",
              "bn_name" => "শ্রীপুর",
              "url" => "sreepur.gazipur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Shariatpur Sadar",
              "bn_name" => "শরিয়তপুর সদর",
              "url" => "sadar.shariatpur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Naria",
              "bn_name" => "নড়িয়া",
              "url" => "naria.shariatpur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Zajira",
              "bn_name" => "জাজিরা",
              "url" => "zajira.shariatpur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Gosairhat",
              "bn_name" => "গোসাইরহাট",
              "url" => "gosairhat.shariatpur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Bhedarganj",
              "bn_name" => "ভেদরগঞ্জ",
              "url" => "bhedarganj.shariatpur.gov.bd"
            ],
            [
              "city_id" => "42",
              "name" => "Damudya",
              "bn_name" => "ডামুড্যা",
              "url" => "damudya.shariatpur.gov.bd"
            ],
            [
              "city_id" => "43",
              "name" => "Araihazar",
              "bn_name" => "আড়াইহাজার",
              "url" => "araihazar.narayanganj.gov.bd"
            ],
            [
              "city_id" => "43",
              "name" => "Bandar",
              "bn_name" => "বন্দর",
              "url" => "bandar.narayanganj.gov.bd"
            ],
            [
              "city_id" => "43",
              "name" => "Narayanganj Sadar",
              "bn_name" => "নারায়নগঞ্জ সদর",
              "url" => "narayanganjsadar.narayanganj.gov.bd"
            ],
            [
              "city_id" => "43",
              "name" => "Rupganj",
              "bn_name" => "রূপগঞ্জ",
              "url" => "rupganj.narayanganj.gov.bd"
            ],
            [
              "city_id" => "43",
              "name" => "Sonargaon",
              "bn_name" => "সোনারগাঁ",
              "url" => "sonargaon.narayanganj.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Basail",
              "bn_name" => "বাসাইল",
              "url" => "basail.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Bhuapur",
              "bn_name" => "ভুয়াপুর",
              "url" => "bhuapur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Delduar",
              "bn_name" => "দেলদুয়ার",
              "url" => "delduar.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Ghatail",
              "bn_name" => "ঘাটাইল",
              "url" => "ghatail.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Gopalpur",
              "bn_name" => "গোপালপুর",
              "url" => "gopalpur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Madhupur",
              "bn_name" => "মধুপুর",
              "url" => "madhupur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Mirzapur",
              "bn_name" => "মির্জাপুর",
              "url" => "mirzapur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Nagarpur",
              "bn_name" => "নাগরপুর",
              "url" => "nagarpur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Sakhipur",
              "bn_name" => "সখিপুর",
              "url" => "sakhipur.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Tangail Sadar",
              "bn_name" => "টাঙ্গাইল সদর",
              "url" => "tangailsadar.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Kalihati",
              "bn_name" => "কালিহাতী",
              "url" => "kalihati.tangail.gov.bd"
            ],
            [
              "city_id" => "44",
              "name" => "Dhanbari",
              "bn_name" => "ধনবাড়ী",
              "url" => "dhanbari.tangail.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Itna",
              "bn_name" => "ইটনা",
              "url" => "itna.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Katiadi",
              "bn_name" => "কটিয়াদী",
              "url" => "katiadi.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Bhairab",
              "bn_name" => "ভৈরব",
              "url" => "bhairab.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Tarail",
              "bn_name" => "তাড়াইল",
              "url" => "tarail.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Hossainpur",
              "bn_name" => "হোসেনপুর",
              "url" => "hossainpur.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Pakundia",
              "bn_name" => "পাকুন্দিয়া",
              "url" => "pakundia.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Kuliarchar",
              "bn_name" => "কুলিয়ারচর",
              "url" => "kuliarchar.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Kishoreganj Sadar",
              "bn_name" => "কিশোরগঞ্জ সদর",
              "url" => "kishoreganjsadar.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Karimgonj",
              "bn_name" => "করিমগঞ্জ",
              "url" => "karimgonj.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Bajitpur",
              "bn_name" => "বাজিতপুর",
              "url" => "bajitpur.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Austagram",
              "bn_name" => "অষ্টগ্রাম",
              "url" => "austagram.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Mithamoin",
              "bn_name" => "মিঠামইন",
              "url" => "mithamoin.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "45",
              "name" => "Nikli",
              "bn_name" => "নিকলী",
              "url" => "nikli.kishoreganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Harirampur",
              "bn_name" => "হরিরামপুর",
              "url" => "harirampur.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Saturia",
              "bn_name" => "সাটুরিয়া",
              "url" => "saturia.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Manikganj Sadar",
              "bn_name" => "মানিকগঞ্জ সদর",
              "url" => "sadar.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Gior",
              "bn_name" => "ঘিওর",
              "url" => "gior.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Shibaloy",
              "bn_name" => "শিবালয়",
              "url" => "shibaloy.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Doulatpur",
              "bn_name" => "দৌলতপুর",
              "url" => "doulatpur.manikganj.gov.bd"
            ],
            [
              "city_id" => "46",
              "name" => "Singiar",
              "bn_name" => "সিংগাইর",
              "url" => "singiar.manikganj.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Savar",
              "bn_name" => "সাভার",
              "url" => "savar.dhaka.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Dhamrai",
              "bn_name" => "ধামরাই",
              "url" => "dhamrai.dhaka.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Keraniganj",
              "bn_name" => "কেরাণীগঞ্জ",
              "url" => "keraniganj.dhaka.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Nawabganj",
              "bn_name" => "নবাবগঞ্জ",
              "url" => "nawabganj.dhaka.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Dohar",
              "bn_name" => "দোহার",
              "url" => "dohar.dhaka.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Munshiganj Sadar",
              "bn_name" => "মুন্সিগঞ্জ সদর",
              "url" => "sadar.munshiganj.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Sreenagar",
              "bn_name" => "শ্রীনগর",
              "url" => "sreenagar.munshiganj.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Sirajdikhan",
              "bn_name" => "সিরাজদিখান",
              "url" => "sirajdikhan.munshiganj.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Louhajanj",
              "bn_name" => "লৌহজং",
              "url" => "louhajanj.munshiganj.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Gajaria",
              "bn_name" => "গজারিয়া",
              "url" => "gajaria.munshiganj.gov.bd"
            ],
            [
              "city_id" => "48",
              "name" => "Tongibari",
              "bn_name" => "টংগীবাড়ি",
              "url" => "tongibari.munshiganj.gov.bd"
            ],
            [
              "city_id" => "49",
              "name" => "Rajbari Sadar",
              "bn_name" => "রাজবাড়ী সদর",
              "url" => "sadar.rajbari.gov.bd"
            ],
            [
              "city_id" => "49",
              "name" => "Goalanda",
              "bn_name" => "গোয়ালন্দ",
              "url" => "goalanda.rajbari.gov.bd"
            ],
            [
              "city_id" => "49",
              "name" => "Pangsa",
              "bn_name" => "পাংশা",
              "url" => "pangsa.rajbari.gov.bd"
            ],
            [
              "city_id" => "49",
              "name" => "Baliakandi",
              "bn_name" => "বালিয়াকান্দি",
              "url" => "baliakandi.rajbari.gov.bd"
            ],
            [
              "city_id" => "49",
              "name" => "Kalukhali",
              "bn_name" => "কালুখালী",
              "url" => "kalukhali.rajbari.gov.bd"
            ],
            [
              "city_id" => "50",
              "name" => "Madaripur Sadar",
              "bn_name" => "মাদারীপুর সদর",
              "url" => "sadar.madaripur.gov.bd"
            ],
            [
              "city_id" => "50",
              "name" => "Shibchar",
              "bn_name" => "শিবচর",
              "url" => "shibchar.madaripur.gov.bd"
            ],
            [
              "city_id" => "50",
              "name" => "Kalkini",
              "bn_name" => "কালকিনি",
              "url" => "kalkini.madaripur.gov.bd"
            ],
            [
              "city_id" => "50",
              "name" => "Rajoir",
              "bn_name" => "রাজৈর",
              "url" => "rajoir.madaripur.gov.bd"
            ],
            [
              "city_id" => "51",
              "name" => "Gopalganj Sadar",
              "bn_name" => "গোপালগঞ্জ সদর",
              "url" => "sadar.gopalganj.gov.bd"
            ],
            [
              "city_id" => "51",
              "name" => "Kashiani",
              "bn_name" => "কাশিয়ানী",
              "url" => "kashiani.gopalganj.gov.bd"
            ],
            [
              "city_id" => "51",
              "name" => "Tungipara",
              "bn_name" => "টুংগীপাড়া",
              "url" => "tungipara.gopalganj.gov.bd"
            ],
            [
              "city_id" => "51",
              "name" => "Kotalipara",
              "bn_name" => "কোটালীপাড়া",
              "url" => "kotalipara.gopalganj.gov.bd"
            ],
            [
              "city_id" => "51",
              "name" => "Muksudpur",
              "bn_name" => "মুকসুদপুর",
              "url" => "muksudpur.gopalganj.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Faridpur Sadar",
              "bn_name" => "ফরিদপুর সদর",
              "url" => "sadar.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Alfadanga",
              "bn_name" => "আলফাডাঙ্গা",
              "url" => "alfadanga.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Boalmari",
              "bn_name" => "বোয়ালমারী",
              "url" => "boalmari.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Sadarpur",
              "bn_name" => "সদরপুর",
              "url" => "sadarpur.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Nagarkanda",
              "bn_name" => "নগরকান্দা",
              "url" => "nagarkanda.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Bhanga",
              "bn_name" => "ভাঙ্গা",
              "url" => "bhanga.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Charbhadrasan",
              "bn_name" => "চরভদ্রাসন",
              "url" => "charbhadrasan.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Madhukhali",
              "bn_name" => "মধুখালী",
              "url" => "madhukhali.faridpur.gov.bd"
            ],
            [
              "city_id" => "52",
              "name" => "Saltha",
              "bn_name" => "সালথা",
              "url" => "saltha.faridpur.gov.bd"
            ],
            [
              "city_id" => "53",
              "name" => "Panchagarh Sadar",
              "bn_name" => "পঞ্চগড় সদর",
              "url" => "panchagarhsadar.panchagarh.gov.bd"
            ],
            [
              "city_id" => "53",
              "name" => "Debiganj",
              "bn_name" => "দেবীগঞ্জ",
              "url" => "debiganj.panchagarh.gov.bd"
            ],
            [
              "city_id" => "53",
              "name" => "Boda",
              "bn_name" => "বোদা",
              "url" => "boda.panchagarh.gov.bd"
            ],
            [
              "city_id" => "53",
              "name" => "Atwari",
              "bn_name" => "আটোয়ারী",
              "url" => "atwari.panchagarh.gov.bd"
            ],
            [
              "city_id" => "53",
              "name" => "Tetulia",
              "bn_name" => "তেতুলিয়া",
              "url" => "tetulia.panchagarh.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Nawabganj",
              "bn_name" => "নবাবগঞ্জ",
              "url" => "nawabganj.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Birganj",
              "bn_name" => "বীরগঞ্জ",
              "url" => "birganj.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Ghoraghat",
              "bn_name" => "ঘোড়াঘাট",
              "url" => "ghoraghat.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Birampur",
              "bn_name" => "বিরামপুর",
              "url" => "birampur.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Parbatipur",
              "bn_name" => "পার্বতীপুর",
              "url" => "parbatipur.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Bochaganj",
              "bn_name" => "বোচাগঞ্জ",
              "url" => "bochaganj.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Kaharol",
              "bn_name" => "কাহারোল",
              "url" => "kaharol.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Fulbari",
              "bn_name" => "ফুলবাড়ী",
              "url" => "fulbari.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Dinajpur Sadar",
              "bn_name" => "দিনাজপুর সদর",
              "url" => "dinajpursadar.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Hakimpur",
              "bn_name" => "হাকিমপুর",
              "url" => "hakimpur.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Khansama",
              "bn_name" => "খানসামা",
              "url" => "khansama.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Birol",
              "bn_name" => "বিরল",
              "url" => "birol.dinajpur.gov.bd"
            ],
            [
              "city_id" => "54",
              "name" => "Chirirbandar",
              "bn_name" => "চিরিরবন্দর",
              "url" => "chirirbandar.dinajpur.gov.bd"
            ],
            [
              "city_id" => "55",
              "name" => "Lalmonirhat Sadar",
              "bn_name" => "লালমনিরহাট সদর",
              "url" => "sadar.lalmonirhat.gov.bd"
            ],
            [
              "city_id" => "55",
              "name" => "Kaliganj",
              "bn_name" => "কালীগঞ্জ",
              "url" => "kaliganj.lalmonirhat.gov.bd"
            ],
            [
              "city_id" => "55",
              "name" => "Hatibandha",
              "bn_name" => "হাতীবান্ধা",
              "url" => "hatibandha.lalmonirhat.gov.bd"
            ],
            [
              "city_id" => "55",
              "name" => "Patgram",
              "bn_name" => "পাটগ্রাম",
              "url" => "patgram.lalmonirhat.gov.bd"
            ],
            [
              "city_id" => "55",
              "name" => "Aditmari",
              "bn_name" => "আদিতমারী",
              "url" => "aditmari.lalmonirhat.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Syedpur",
              "bn_name" => "সৈয়দপুর",
              "url" => "syedpur.nilphamari.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Domar",
              "bn_name" => "ডোমার",
              "url" => "domar.nilphamari.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Dimla",
              "bn_name" => "ডিমলা",
              "url" => "dimla.nilphamari.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Jaldhaka",
              "bn_name" => "জলঢাকা",
              "url" => "jaldhaka.nilphamari.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Kishorganj",
              "bn_name" => "কিশোরগঞ্জ",
              "url" => "kishorganj.nilphamari.gov.bd"
            ],
            [
              "city_id" => "56",
              "name" => "Nilphamari Sadar",
              "bn_name" => "নীলফামারী সদর",
              "url" => "nilphamarisadar.nilphamari.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Sadullapur",
              "bn_name" => "সাদুল্লাপুর",
              "url" => "sadullapur.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Gaibandha Sadar",
              "bn_name" => "গাইবান্ধা সদর",
              "url" => "gaibandhasadar.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Palashbari",
              "bn_name" => "পলাশবাড়ী",
              "url" => "palashbari.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Saghata",
              "bn_name" => "সাঘাটা",
              "url" => "saghata.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Gobindaganj",
              "bn_name" => "গোবিন্দগঞ্জ",
              "url" => "gobindaganj.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Sundarganj",
              "bn_name" => "সুন্দরগঞ্জ",
              "url" => "sundarganj.gaibandha.gov.bd"
            ],
            [
              "city_id" => "57",
              "name" => "Phulchari",
              "bn_name" => "ফুলছড়ি",
              "url" => "phulchari.gaibandha.gov.bd"
            ],
            [
              "city_id" => "58",
              "name" => "Thakurgaon Sadar",
              "bn_name" => "ঠাকুরগাঁও সদর",
              "url" => "thakurgaonsadar.thakurgaon.gov.bd"
            ],
            [
              "city_id" => "58",
              "name" => "Pirganj",
              "bn_name" => "পীরগঞ্জ",
              "url" => "pirganj.thakurgaon.gov.bd"
            ],
            [
              "city_id" => "58",
              "name" => "Ranisankail",
              "bn_name" => "রাণীশংকৈল",
              "url" => "ranisankail.thakurgaon.gov.bd"
            ],
            [
              "city_id" => "58",
              "name" => "Haripur",
              "bn_name" => "হরিপুর",
              "url" => "haripur.thakurgaon.gov.bd"
            ],
            [
              "city_id" => "58",
              "name" => "Baliadangi",
              "bn_name" => "বালিয়াডাঙ্গী",
              "url" => "baliadangi.thakurgaon.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Rangpur Sadar",
              "bn_name" => "রংপুর সদর",
              "url" => "rangpursadar.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Gangachara",
              "bn_name" => "গংগাচড়া",
              "url" => "gangachara.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Taragonj",
              "bn_name" => "তারাগঞ্জ",
              "url" => "taragonj.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Badargonj",
              "bn_name" => "বদরগঞ্জ",
              "url" => "badargonj.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Mithapukur",
              "bn_name" => "মিঠাপুকুর",
              "url" => "mithapukur.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Pirgonj",
              "bn_name" => "পীরগঞ্জ",
              "url" => "pirgonj.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Kaunia",
              "bn_name" => "কাউনিয়া",
              "url" => "kaunia.rangpur.gov.bd"
            ],
            [
              "city_id" => "59",
              "name" => "Pirgacha",
              "bn_name" => "পীরগাছা",
              "url" => "pirgacha.rangpur.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Kurigram Sadar",
              "bn_name" => "কুড়িগ্রাম সদর",
              "url" => "kurigramsadar.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Nageshwari",
              "bn_name" => "নাগেশ্বরী",
              "url" => "nageshwari.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Bhurungamari",
              "bn_name" => "ভুরুঙ্গামারী",
              "url" => "bhurungamari.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Phulbari",
              "bn_name" => "ফুলবাড়ী",
              "url" => "phulbari.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Rajarhat",
              "bn_name" => "রাজারহাট",
              "url" => "rajarhat.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Ulipur",
              "bn_name" => "উলিপুর",
              "url" => "ulipur.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Chilmari",
              "bn_name" => "চিলমারী",
              "url" => "chilmari.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Rowmari",
              "bn_name" => "রৌমারী",
              "url" => "rowmari.kurigram.gov.bd"
            ],
            [
              "city_id" => "60",
              "name" => "Charrajibpur",
              "bn_name" => "চর রাজিবপুর",
              "url" => "charrajibpur.kurigram.gov.bd"
            ],
            [
              "city_id" => "61",
              "name" => "Sherpur Sadar",
              "bn_name" => "শেরপুর সদর",
              "url" => "sherpursadar.sherpur.gov.bd"
            ],
            [
              "city_id" => "61",
              "name" => "Nalitabari",
              "bn_name" => "নালিতাবাড়ী",
              "url" => "nalitabari.sherpur.gov.bd"
            ],
            [
              "city_id" => "61",
              "name" => "Sreebordi",
              "bn_name" => "শ্রীবরদী",
              "url" => "sreebordi.sherpur.gov.bd"
            ],
            [
              "city_id" => "61",
              "name" => "Nokla",
              "bn_name" => "নকলা",
              "url" => "nokla.sherpur.gov.bd"
            ],
            [
              "city_id" => "61",
              "name" => "Jhenaigati",
              "bn_name" => "ঝিনাইগাতী",
              "url" => "jhenaigati.sherpur.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Fulbaria",
              "bn_name" => "ফুলবাড়ীয়া",
              "url" => "fulbaria.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Trishal",
              "bn_name" => "ত্রিশাল",
              "url" => "trishal.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Bhaluka",
              "bn_name" => "ভালুকা",
              "url" => "bhaluka.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Muktagacha",
              "bn_name" => "মুক্তাগাছা",
              "url" => "muktagacha.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Mymensingh Sadar",
              "bn_name" => "ময়মনসিংহ সদর",
              "url" => "mymensinghsadar.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Dhobaura",
              "bn_name" => "ধোবাউড়া",
              "url" => "dhobaura.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Phulpur",
              "bn_name" => "ফুলপুর",
              "url" => "phulpur.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Haluaghat",
              "bn_name" => "হালুয়াঘাট",
              "url" => "haluaghat.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Gouripur",
              "bn_name" => "গৌরীপুর",
              "url" => "gouripur.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Gafargaon",
              "bn_name" => "গফরগাঁও",
              "url" => "gafargaon.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Iswarganj",
              "bn_name" => "ঈশ্বরগঞ্জ",
              "url" => "iswarganj.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Nandail",
              "bn_name" => "নান্দাইল",
              "url" => "nandail.mymensingh.gov.bd"
            ],
            [
              "city_id" => "62",
              "name" => "Tarakanda",
              "bn_name" => "তারাকান্দা",
              "url" => "tarakanda.mymensingh.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Jamalpur Sadar",
              "bn_name" => "জামালপুর সদর",
              "url" => "jamalpursadar.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Melandah",
              "bn_name" => "মেলান্দহ",
              "url" => "melandah.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Islampur",
              "bn_name" => "ইসলামপুর",
              "url" => "islampur.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Dewangonj",
              "bn_name" => "দেওয়ানগঞ্জ",
              "url" => "dewangonj.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Sarishabari",
              "bn_name" => "সরিষাবাড়ী",
              "url" => "sarishabari.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Madarganj",
              "bn_name" => "মাদারগঞ্জ",
              "url" => "madarganj.jamalpur.gov.bd"
            ],
            [
              "city_id" => "63",
              "name" => "Bokshiganj",
              "bn_name" => "বকশীগঞ্জ",
              "url" => "bokshiganj.jamalpur.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Barhatta",
              "bn_name" => "বারহাট্টা",
              "url" => "barhatta.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Durgapur",
              "bn_name" => "দুর্গাপুর",
              "url" => "durgapur.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Kendua",
              "bn_name" => "কেন্দুয়া",
              "url" => "kendua.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Atpara",
              "bn_name" => "আটপাড়া",
              "url" => "atpara.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Madan",
              "bn_name" => "মদন",
              "url" => "madan.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Khaliajuri",
              "bn_name" => "খালিয়াজুরী",
              "url" => "khaliajuri.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Kalmakanda",
              "bn_name" => "কলমাকান্দা",
              "url" => "kalmakanda.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Mohongonj",
              "bn_name" => "মোহনগঞ্জ",
              "url" => "mohongonj.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Purbadhala",
              "bn_name" => "পূর্বধলা",
              "url" => "purbadhala.netrokona.gov.bd"
            ],
            [
              "city_id" => "64",
              "name" => "Netrokona Sadar",
              "bn_name" => "নেত্রকোণা সদর",
              "url" => "netrokonasadar.netrokona.gov.bd"
            ],
            [
              "city_id" => "47",
              "name" => "Banani",
              "bn_name" => "বনানী",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Demra",
              "bn_name" => "ডেমরা",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Dhaka Cantonment",
              "bn_name" => "ঢাকা সেনানিবাস",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Dhanmondi",
              "bn_name" => "ধানমন্ডি",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Gulshan",
              "bn_name" => "গুলশান",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Adabor",
              "bn_name" => "আদাবর",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Jatrabari",
              "bn_name" => "যাত্রাবাড়ী",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Joypara",
              "bn_name" => "জয়পাড়া",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Khilgaon",
              "bn_name" => "খিলগাঁও",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Khilkhet",
              "bn_name" => "খিলক্ষেত",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Lalbag",
              "bn_name" => "লালবাগ",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Mirpur",
              "bn_name" => "মিরপুর",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Mohammadpur",
              "bn_name" => "মোহাম্মদপুর",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Motijheel",
              "bn_name" => "মতিঝিল",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Nawabganj",
              "bn_name" => "নবাবগঞ্জ",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "New market",
              "bn_name" => "নিউ মার্কেট",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Palton",
              "bn_name" => "পল্টন",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Ramna",
              "bn_name" => "রমনা",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Sabujbag",
              "bn_name" => "সবুজবাগ",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Sutrapur",
              "bn_name" => "সূত্রাপুর",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Tejgaon",
              "bn_name" => "তেজগাঁও",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Uttara",
              "bn_name" => "উত্তরা",
              "url" => "dmp.gov.bd/find-your-local-police"
            ],
            [
              "city_id" => "47",
              "name" => "Alfadanga",
              "bn_name" => "আলফাডাঙ্গা",
              "url" => "dmp.gov.bd/find-your-local-police"
            ]
          ];

        foreach ($thanas as $key => $value) {
            Thana::create($value);
        }
    }
}