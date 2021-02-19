<?php

use Illuminate\Database\Seeder;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->insert([
            'genre_id' => '1',
            'title'=> 'REPLY 1988',
            'photo'=> 'asset/drama/reply1988.jpg',
            'description'=>'Reply 1988 revolves around the lives of a group of five friends in Ssangmun-dong, a small neighborhood in Seoul. Most of the series covered their struggles and memorable moments when they were 18 and 19 years old. The story starts in 1988, covers 1989, and fast-forwards to 1994 and 1995. It also has snippets of 2016, where Deok Sun (Lee Hye Ri) is being interviewed with her husband, whose identity is only revealed later on in the story.',
            'rating'=>'4.8',
        ]);
        DB::table('movies')->insert([
            'genre_id' => '1',
            'title'=> 'CRASH LANDING ON YOU',
            'photo'=> 'asset/drama/CrashLandingOY.jpg',
            'description'=>'Crash Landing on You tells the story of two star-crossed lovers, Yoon Se-ri (Son Ye-jin), a South Korean fashion entrepreneur with her company Se-ris Choice, and Ri Jeong-hyeok (Hyun Bin), a member of the North Korean elite and a Captain in the North Korean Special Police Force.',
            'rating'=>'4.7',
        ]);
        DB::table('movies')->insert([
            'genre_id' => '1',
            'title'=> 'VAGABOND',
            'photo'=> 'asset/drama/vagabond.jpg',
            'description'=>'Cha Dal Gun becomes an awakened tiger in the face of his nephew’s death in a mysterious plane crash. As an orphan himself, he had raised his nephew singlehandedly in place of his brother who had passed on.',
            'rating'=>'4.6',
        ]);
        DB::table('movies')->insert([
            'genre_id' => '1',
            'title'=> 'ITAEWON CLASS',
            'photo'=> 'asset/drama/itaewon_Class.jpg',
            'description'=>'Itaewon Class follows Park Sae-ro-yi (Park Seo-joon), a kind-hearted boy who dreams of becoming a police officer. His teachers describe Park as socially inept because he doesn’t interact much with other people, much less have friends. This worries his father (Park Sung-yeol), an employee at a large food corporation called Jangga.',
            'rating'=>'4.8',
        ]);

        DB::table('movies')->insert([
            ['genre_id' => '2',
            'title'=> 'AVATAR',
            'photo'=> 'asset/kids/avatar.jpg',
            'description'=>'Synopsis of The Last Airbender. In his absence, the Fire Nation, now ruled by Fire Lord Ozai, has been waging a seemingly endless war against the Earth Kingdom and the Water Tribe, having already destroyed the Air Nomads. As the Avatar, he is hunted by Zuko, an exiled prince of the Fire Nation seeking to redeem his honor, and the Fire Nation itself, led by Commander Zhao .',
            'rating'=>'4.7'],

            ['genre_id' => '2',
            'title'=> 'DESPICABLE ME 2',
            'photo'=> 'asset/kids/Despicable_Me2.jpg',
            'description'=>'Now that Gru (Steve Carell) has forsaken a life of crime to raise Margo, Agnes and Edith, hes trying to figure out how to provide for his new family. As he struggles with his responsibilities as a father, the Anti-Villain League -- an organization dedicated to fighting evil -- comes calling. The AVL sends Gru on a mission to capture the perpetrator of a spectacular heist, for who would be better than the worlds greatest ex-villain to capture the individual who seeks to usurp his power.',
            'rating'=>'4.9'],

            ['genre_id' => '2',
            'title'=> 'SPONGEBOB SQUAREPANTS',
            'photo'=> 'asset/kids/SpongebobSquarepants.jpg',
            'description'=>'Everyone will want to dive in and soak up every second of this full-length animated feature when SpongeBob, one of Nickelodeons most absorbing characters, makes a huge splash in his first venture onto the big screen. Starring the squarepants-clad sponge himself along with all his trusty friends from Bikini Bottom, this action-packed undersea adventure is based on the ever-popular Emmy-nominated TV series.',
            'rating'=>'4.5'],

            ['genre_id' => '2',
            'title'=> 'UPIN & IPIN',
            'photo'=> 'asset/kids/upinipin.jpg',
            'description'=>'5-year old twin brothers Upin and Ipin, together with their friends Ehsan, Fizi, Mail, Jarjit, Mei Mei, and Susanti stumble upon a mystical kris that leads them straight into the fantastical kingdom of Inderaloka. While trying to find their way back home, they are suddenly burdened with the task of saving the kingdom from the clutches of the evil Raja Bersiong. With help from Mat Jenin and Belalang, Upin, Ipin, and their friends must overcome a series of challenging obstacles in order to restore the kingdom back to its former glory.',
            'rating'=>'4.4'],

            ['genre_id' => '3',
            'title'=> 'DYNASTY',
            'photo'=> 'asset/kids/dynasty.jpg',
            'description'=>'Dynasty Synopsis Reboot of Esther Shapiro and Richard Shapiros famed 1981-1989 series, "Dynasty" tells story about two of Americas wealthiest families, the Carringtons and the Colbys, as they feud for control over their fortune and their children.',
            'rating'=>'4.4'],

            ['genre_id' => '3',
            'title'=> 'STRANGER THINGS',
            'photo'=> 'asset/kids/strangerthings.jpg',
            'description'=>'It is November 16, 1983 in Hawkins, Indiana. Inside Hawkins National Laboratory, a scientist bursts out a door, running from something that isnt there. He runs to the elevator, tapping the floor button repeatedly, looking back and forth. He then gets in and taps the button again. He looks forward then up slowly, as he hears and sees something that we cant see. He is then pulled up as the elevator doors close, yelling loudly.',
            'rating'=>'4.7'],

            ['genre_id' => '3',
            'title'=> 'THE WITCHER',
            'photo'=> 'asset/kids/thewitcher.jpg',
            'description'=>'The synopsis reveals Geralts belief that Yennefer had perished in the Battle of Sodden, a battle from which the mage disappeared shortly after securing victory against the forces of Nilfgaard. It then reveals that the witcher and his ward, Ciri, will appear at Kaer Morhen, the headquarters of the School of the Wolf and Geralts childhood home. ',
            'rating'=>'4.5'],

            ['genre_id' => '3',
            'title'=> 'UMBERELLA ACADEMY',
            'photo'=> 'asset/kids/umberella_academy.jpg',
            'description'=>'Synopsis This episodic TV show is based on the comic "The Umbrella Academy" published by Dark Horse Comics. The backstory is: at the 12th hour of the first day of October 1989, 43 babies were born whose mothers were not pregnant when the day started.',
            'rating'=>'4.7'],

        ]);
    }
}
