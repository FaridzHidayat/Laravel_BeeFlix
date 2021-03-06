<?php

use Illuminate\Database\Seeder;

class EpisodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('episodes')->insert([
            ['movie_id' => '1',
             'episode'=>'episode 1',
             'title'=> 'Seoul tahun 1988'],
            ['movie_id' => '1',
             'episode'=>'episode 2',
             'title'=> 'Kemenangan terbaru choi taek'],
            ['movie_id' => '1',
             'episode'=>'episode 3',
             'title'=> 'Deok-sun bertekad untuk menang'],
            ['movie_id' => '1',
             'episode'=>'episode 4',
             'title'=> 'Deok-sun ingin kuliah'],
            ['movie_id' => '1',
             'episode'=>'episode 5',
             'title'=> 'Partisipasi Bo-ra dalam protes siswa'],
            ['movie_id' => '1',
             'episode'=>'episode 6',
             'title'=> 'Taek merasa tertekan saat pergi ke Tiongkok'],
            ['movie_id' => '1',
             'episode'=>'episode 7',
             'title'=> 'Mengambil satu nama dalam permainan santa rahasia'],
            ['movie_id' => '1',
             'episode'=>'episode 8',
             'title'=> 'operasi jantung yang akan dijalani Jung-bong'],
            ['movie_id' => '1',
             'episode'=>'episode 9',
             'title'=> 'Deok-sun melihat potret kehidupan,Taek yang jadi sorotan'],

            ['movie_id' => '2',
             'episode'=>'episode 1',
             'title'=> 'Dibuat pingsan oleh angin kencang'],
            ['movie_id' => '2',
             'episode'=>'episode 2',
             'title'=> 'Se-ri membujuk jeong hyuk menyembunyikan dirumah'],
            ['movie_id' => '2',
             'episode'=>'episode 3',
             'title'=> 'Jeong hyeok mengarang cerita nekat soal latar belakang Se-ri'],
            ['movie_id' => '2',
             'episode'=>'episode 4',
             'title'=> 'Ketika rencan melarikan dirinya gagal'],
            ['movie_id' => '2',
             'episode'=>'episode 5',
             'title'=> 'Partisipasi Bo-ra dalam protes siswa'],
            ['movie_id' => '2',
             'episode'=>'episode 6',
             'title'=> 'Dan kurang senang saat ia mendengar Jeong Hyeok'],
            ['movie_id' => '2',
             'episode'=>'episode 7',
             'title'=> 'Sebuah penerbangan keluar dari korea utara'],
            ['movie_id' => '2',
             'episode'=>'episode 8',
             'title'=> 'membuat jeong hyeok berada jauh dari Se-ri'],
            ['movie_id' => '2',
             'episode'=>'episode 9',
             'title'=> 'Se-ri berhadapan dengan penculiknya'],

            ['movie_id' => '3',
             'episode'=>'episode 1',
             'title'=> 'Cha dal-geon mendorong sang keponakan untuk pergi'],
            ['movie_id' => '3',
             'episode'=>'episode 2',
             'title'=> 'Cha dal-geon membuat pengumuman yang mencemaskan'],
            ['movie_id' => '3',
             'episode'=>'episode 3',
             'title'=> 'Hae-ri tetap meragukan rekaman suara kokpit'],
            ['movie_id' => '3',
             'episode'=>'episode 4',
             'title'=> 'Dal-geon menerima telpon dari seseorang'],
            ['movie_id' => '3',
             'episode'=>'episode 5',
             'title'=> 'Dal-geon berupaya memberi tahu pers'],
            ['movie_id' => '3',
             'episode'=>'episode 6',
             'title'=> 'NIS membawa Dal-geon ke rumah aman'],

            ['movie_id' => '4',
             'episode'=>'episode 1',
             'title'=> 'Pada hari pertama di SMA baru'],
            ['movie_id' => '4',
             'episode'=>'episode 2',
             'title'=> 'Sewaktu menjalani hukuman'],
            ['movie_id' => '4',
             'episode'=>'episode 3',
             'title'=> 'Saeroyi tak sengaja bertemu dengan jo yi-seo'],
            ['movie_id' => '4',
             'episode'=>'episode 4',
             'title'=> 'Choi seung-kwon menyesal kembali ke kebiasaan lamanya'],
            ['movie_id' => '4',
             'episode'=>'episode 5',
             'title'=> 'Perubahan di DanBam'],
            ['movie_id' => '4',
             'episode'=>'episode 6',
             'title'=> 'Dae-hee terus memantau kemajuan DanBam'],

            ['movie_id' => '5',
             'episode'=>'episode 1',
             'title'=> 'aang bertemu katara'],
            ['movie_id' => '5',
             'episode'=>'episode 2',
             'title'=> 'aang ke negara angin bersama katara'],
            ['movie_id' => '5',
             'episode'=>'episode 3',
             'title'=> 'aang ke negara air untuk pengendalian air'],
            ['movie_id' => '5',
             'episode'=>'episode 4',
             'title'=> 'negara air diserang oleh negara api'],
            ['movie_id' => '5',
             'episode'=>'episode 5',
             'title'=> 'aang bertemu dengan zuko'],
            ['movie_id' => '5',
             'episode'=>'episode 6',
             'title'=> 'aang ke negara tanah'],

            ['movie_id' => '6',
             'episode'=>'episode 1',
             'title'=> 'gru ingin melakukan percobaan yang gila'],
            ['movie_id' => '6',
             'episode'=>'episode 2',
             'title'=> 'gru bersama tiga anak yatim ingin mengecilkan bulan'],
            ['movie_id' => '6',
             'episode'=>'episode 3',
             'title'=> 'gru melakukan penelitian senjata berbahaya'],
            ['movie_id' => '6',
             'episode'=>'episode 4',
             'title'=> 'minions membantu gru untuk membuat senjata'],
            ['movie_id' => '6',
             'episode'=>'episode 5',
             'title'=> 'gru bertemu pesaing dengan tujuan yang sama'],
            ['movie_id' => '6',
             'episode'=>'episode 6',
             'title'=> 'gru melakukan percobaan untuk pertama kalinya'],

            ['movie_id' => '7',
             'episode'=>'episode 1',
             'title'=> 'Squidward murah saat melihat squilliam dalam acara TV'],
            ['movie_id' => '7',
             'episode'=>'episode 2',
             'title'=> 'Spongebob memungut sesuatu dijalan dan dilihat oleh tuan krab'],
            ['movie_id' => '7',
             'episode'=>'episode 3',
             'title'=> 'Plankton telah menghancurkan chum bucket'],
            ['movie_id' => '7',
             'episode'=>'episode 4',
             'title'=> 'Spongebob memutuskan bahwa misinya adalah menjadi normal'],
            ['movie_id' => '7',
             'episode'=>'episode 5',
             'title'=> 'jari spongebob tertusuk serpihan kayu'],
            ['movie_id' => '7',
             'episode'=>'episode 6',
             'title'=> 'semua mengamati gaya liar larry si lobster'],
            
            ['movie_id' => '8',
             'episode'=>'episode 1',
             'title'=> 'upin ipin bersama temannya pergi ke hutan'],
            ['movie_id' => '8',
             'episode'=>'episode 2',
             'title'=> 'bertemu datu di tengah hutan'],
            ['movie_id' => '8',
             'episode'=>'episode 3',
             'title'=> 'hujan deras di tengah hutan'],
            ['movie_id' => '8',
             'episode'=>'episode 4',
             'title'=> 'tidak bisa pulang karena hujan deras yang lama'],
            ['movie_id' => '8',
             'episode'=>'episode 5',
             'title'=> 'ketemu siluman penunggu hutan'],
            ['movie_id' => '8',
             'episode'=>'episode 6',
             'title'=> 'upin ipin bersama temannya melarikan diri'],

            ['movie_id' => '9',
             'episode'=>'episode 1',
             'title'=> 'Bertengkar dengan calon ibu tiri'],
            ['movie_id' => '9',
             'episode'=>'episode 2',
             'title'=> 'Blade dipaksa mengadakan rapat keluarga'],
            ['movie_id' => '9',
             'episode'=>'episode 3',
             'title'=> 'Steven menghadapi dakwaan yang serius'],
            ['movie_id' => '9',
             'episode'=>'episode 4',
             'title'=> 'Cristal membujuk blake untuk berlibur dihutan'],
            ['movie_id' => '9',
             'episode'=>'episode 5',
             'title'=> 'Cristal dan fallon bersaing untuk tampil di sampul majalah'],
            ['movie_id' => '9',
             'episode'=>'episode 6',
             'title'=> 'Cristal membuka pintu rumahnya untuk seorang tamu'],

            ['movie_id' => '10',
             'episode'=>'episode 1',
             'title'=> 'Willi muda melihat sosok mengerikan'],
            ['movie_id' => '10',
             'episode'=>'episode 2',
             'title'=> 'Lucas mengajak bicara gadis yang ditemuinya'],
            ['movie_id' => '10',
             'episode'=>'episode 3',
             'title'=> 'nancy merasa cemas'],
            ['movie_id' => '10',
             'episode'=>'episode 4',
             'title'=> 'Menolak mempercayai bahwa willi telah tewas'],
            ['movie_id' => '10',
             'episode'=>'episode 5',
             'title'=> 'Hopper membobol lab'],
            ['movie_id' => '10',
             'episode'=>'episode 6',
             'title'=> 'Jonathan panik dan mencari nancy'],
             
            ['movie_id' => '11',
             'episode'=>'episode 1',
             'title'=> 'Penduduk yang tidak ramah'],
            ['movie_id' => '11',
             'episode'=>'episode 2',
             'title'=> 'Yennefer tak sengaja menemukan cara kabur'],
            ['movie_id' => '11',
             'episode'=>'episode 3',
             'title'=> 'Geralt menangani urusan Witcher lain'],
            ['movie_id' => '11',
             'episode'=>'episode 4',
             'title'=> 'Geralt menemani jaskier ke pesta dansa'],
            ['movie_id' => '11',
             'episode'=>'episode 5',
             'title'=> 'Yennifer mencari obat'],
            ['movie_id' => '11',
             'episode'=>'episode 6',
             'title'=> 'Pria misterius berupaya menghasut geralt'], 

            ['movie_id' => '12',
             'episode'=>'episode 1',
             'title'=> 'Hargreeves bersaudara berkumpul kembali'],
            ['movie_id' => '12',
             'episode'=>'episode 2',
             'title'=> 'Five memburu seorang pemilik mata palsu'],
            ['movie_id' => '12',
             'episode'=>'episode 3',
             'title'=> 'Luther meminta agar diadakan rapat keluarga'],
            ['movie_id' => '12',
             'episode'=>'episode 4',
             'title'=> 'Klaus menguji hasil latihan Hazel'],
            ['movie_id' => '12',
             'episode'=>'episode 5',
             'title'=> 'Five membocorkan rahasia ke luther'],
            ['movie_id' => '12',
             'episode'=>'episode 6',
             'title'=> 'Five memulai pekerjaa baru dimarkas'], 
        ]);
    }
}
