<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
                [
                'question' => 'How can you print your documents at HZ?',
                'answer' => '</br>
                                    You can connect to a printer in HZ in 1 of 2 ways.
                                </br></br>
                                    The first is to have your laptop scan the local Wi-Fi
                                    network for available devices, and you should see a
                                    printer listed, connect to that
                                    printer and select it when printing your documents.
                                </br></br>
                                    The second is to go to
                                    <a href="https://print.hz.nl/" target="_blank"> print.hz.nl</a>
                                    and log in with your HZ logins (not your HZ email, only the details
                                    before the &#64; symbol)
                                </br></br>
                                    Once logged in, upload your file and select the printer you want
                                    to print your document to, you can also select ""Advanced"" to open the
                                    advanced printer settings.
                                </br></br>
                                    Finally, go to the printer on your floor (next to the coffee machines)
                                    and scan your student card against the terminal and select ""Print"", follow
                                    the steps on screen to print your document.
                                </br></br>
                                    Just remember, you will need to have funds on your student card as you will
                                    before charged per page. The price varies on the print-type but will be
                                    listed on the terminal before you confirm the print request.',
                'link' => null,
                'class' => 'box yellow',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'How can you scan documents at HZ?',
                'answer' => '</br>
                                    To scan a document, go to the printers on any floor and tap your
                                    card against the terminal.
                                </br></br>
                                    Select Scan and place your document in the Scanner.
                                </br></br>
                                    Follow the steps on the Scanner and once completed you will receive
                                    an email with the document in your HZ email account.',
                'link' => null,
                'class' => 'box blue',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'What should you do when you are feeling unwell/ are showing symptoms of Coronavirus?',
                'answer' => '</br>
                                    Your health should always be your first priority!
                                </br></br>
                                    If you are feeling unwell and/or believe you are showing symptoms similar to
                                    those of the coronavirus then you should stay at home and follow
                                    these steps:
                                    </br></br>
                                    <ul>
                                        <li>Stay at home and make an appointment for a free corona test, by
                                        calling 1202 or online via
                                        <a href="https://coronatest.nl/" target="_blank">coronatest.nl</a> </li>
                                        </br>
                                        Contact HZ and let them know that you may have the virus.</li>
                                        </br></br>
                                        <li>If you are a student, email your study program coordinator.</li>
                                        <li>If you are an international student then also inform the International
                                        Office at
                                        <a href="mailto:internationaloffice@hz.nl">internationaloffice@hz.nl</a>
                                        .</li>
                                        <li>If you are a member of staff then report it directly to your manager,
                                        via email.</li>
                                    </ul>',
                'link' => null,
                'class' => 'box pink',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'How can you book a project space in the building?',
                'answer' => '</br>
                                    You can book a meeting room on campus by logging into the Service Portal in
                                        your <a href="https://portal.hz.nl/en/" target="_blanl">MyHZ account.</a>
                                    </br></br>
                                        From here you can select "Make a reservation" and then select the room type
                                        of your choice.
                                    </br></br>
                                        To complete the booking, select the room number and timeslot and then fill
                                        out the necessary details on the following page.',
                'link' => null,
                'class' => 'box yellow',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'question' => 'What do I need to do to park my car at HZ?',
                'answer' => '</br>
                                    Unfortunately it is not possible directly at the HZ building in Middelburg
                                    (excluding 2 disabled parking spaces next to the building),
                                    however there is free parking available at the PZEM building\'s car park
                                    across the way, at Poelendaelesingel 10. This is only about a
                                    5 - 10 minutes walk from campus.
                                </p>
                                </br>
                                <p>
                                    Please note that the tunnel connecting PEZM to HZ is currently blocked due
                                    to the ongoing construction of the Joint Research Center Zeeland.
                                    However, there is a pedestrian crossing a few meters away at the intersection.',
                'link' => null,
                'class' => 'box blue',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
