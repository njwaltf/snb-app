<?php

namespace Database\Seeders;

use App\Models\BullyType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BullyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run() : void
    {
        BullyType::create([
            'name' => 'Cyber Bullying',
            'desc' => 'Segala bentuk tindakan yang dapat menyakiti orang lain dengan saran media elektronik (rekaman video intimidasi, pencemaran nama baik lewat media sosial).',
            'image' => 'types/cyber.png',
            'status' => 1
        ]);
        BullyType::create([
            'name' => 'Bullying Fisik',
            'desc' => 'Berupa pukulan, menendang, menampar, meludahi atau segala bentuk kekerasan yang menggunakan fisik.',
            'image' => 'types/fisik.png',
            'status' => 1
        ]);
        BullyType::create([
            'name' => 'Bullying Verbal',
            'desc' => 'Berupa celaan, fitnah, atau penggunaan kata-kata yang tidak baik untuk menyakiti orang lain.',
            'image' => 'types/verbal.png',
            'status' => 1
        ]);
        BullyType::create([
            'name' => 'Bullying Relasional',
            'desc' => 'Berupa pengabaian, pengucilan, cibiran dan segala bentuk tindakan untuk mengasingkan seseorang dari komunitasnya.',
            'image' => 'types/relasional.png',
            'status' => 1
        ]);
    }
}