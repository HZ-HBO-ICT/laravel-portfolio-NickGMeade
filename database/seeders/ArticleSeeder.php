<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder; // needed for general seeding
use Illuminate\Support\Facades\DB; // needed so you can seed hard coded data

use App\Models\Article; // needed so you can call the factory
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory()->count(100)->create();

        DB::table('articles')->insert([
                [
                'title' => 'Company Safari 2021',
                'excerpt' => 'On Friday, September 10th, both the Dutch and International ICS classes took part in a
                Company Safari',
                'body' => '<p>
                                On Friday, September 10th, our both the Dutch and International ICS classes were split
                                into groups so that we complete a "Company Safari", where we were tasked with
                                researching various companies and create a poster displaying details about the
                                following:
                            <ul>
                                <li>About the Company</li>
                                <li>Technology they work with</li>
                                <li>Skill Expectations of Employees</li>
                                <li>Internship &#38 Graduation Opportunities</li>
                                <li>Functions and Roles at the company</li>
                                <li>The Company Culture</li>
                            </ul>
                            </p>
                            <h3>My group decided to research Oracle, below is our slide on the topic:</h3>
                            <div class="oracle">
                                <a href="../resources/images/oracle-slide.jpg" target="_blank">
                                    <img src="../resources/images/oracle-slide.jpg" alt="Oracle Information">
                                </a>
                            </div>
                            <h3>Below are some photos of posters created by other teams that day:</h3>
                            <div class="company-slides">
                                <div class="slide-box">
                                    <a href="../resources/images/google.jpg" target="_blank">
                                        <img src="../resources/images/google.jpg" alt="Google">
                                    </a>
                                </div>
                                <div class="slide-box">
                                    <a href="../resources/images/atos.jpg" target="_blank">
                                        <img src="../resources/images/atos.jpg" alt="ATOS">
                                    </a>
                                </div>
                                <div class="slide-box">
                                    <a href="../resources/images/accenture.jpg" target="_blank">
                                        <img src="../resources/images/accenture.jpg" alt="Accenture">
                                    </a>
                                </div>
                                <div class="slide-box">
                                    <a href="../resources/images/dxc.jpg" target="_blank">
                                        <img src="../resources/images/dxc.jpg" alt="DXC Technologies">
                                    </a>
                                </div>
                                <p>
                                    Unfortunately as I was dealing with printer issues, in trying to print out our
                                    poster for the safari, I was unable to see most of the posters, but our team were
                                    able to show this off from our laptops to the groups in its stead. However the
                                    one\'s that I did come across did show some interesting information that I did not
                                    know before about some companies.
                                </p>
                            </div>',
                'link' => 'company-safari',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
                [
                'title' => 'All the coding languages I\'ve tried before',
                'excerpt' => 'Over the years I was able to try my hand at multiple coding languages, here\'s a few of them. ',
                'body' => '"<p>
                            Over the years I was able to try my hand at multiple coding languages to varying degrees.
                            While some may not be remembered as well as others, all of these played their part in the
                            development of how I view and approach tasks.
                            </p>
                            <div class="img-container">
                                <div class="img-box">
                                    <img src="../resources/images/java.png" alt="Java">
                                </div>
                                <div class="img-box">
                                    <img src="../resources/images/python.png" alt="Python">
                                </div>
                                <div class="img-box">
                                    <img src="../resources/images/html-css.png" alt="HTML &#38 CSS">
                                </div>
                                <div class="img-box">
                                    <img src="../resources/images/vb-net.png" alt="Visual Basic .NET">
                                </div>
                                <div class="img-box">
                                    <img src="../resources/images/vb6.png" alt="Visual Basic 6">
                                </div>
                                <div class="img-box">
                                    <img src="../resources/images/cpp.png" alt="C &#x271A &#x271A">
                                </div>
                            </div>',
                'link' => 'past-coding-experience',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
                [
                'title' => 'Why did I choose ICT at HZ?',
                'excerpt' => 'Why did I move to the Netherlands to study ICT?',
                'body' => '<p>
                           <b>Let me start where it all began:</b>
                           </br></br>
                           My interest in technology started with my introduction to the Sega Mega Drive, also known
                           as the Sega Genesis in the USA, and watching the coloured, animated characters run across
                           the screen. At the time I had no idea how such a magical feat could happen, but that was
                           the spark which initially ignited my curiosity.
                           </br></br>
                           As life went on, and paths changed in unexpected ways, I was fortunate to have many
                           encounters with different computers and during my teenage years I had my first coding
                           experience by learning to code C++ as a part of a youth initiative scheme called Munster
                           Programming Training. While I was only able to create a few basic programs at the time,
                           learning the thought processes behind coding a program intrigued me, and it was something
                           that I carried with me ever since. In later years, this encouraged me to try additional
                           coding courses in various languages before making the decision to return to full-time
                           education in 2020, where I could further develop on my skills and analytical mindset.
                           </br><br>
                            But as for why I decided to jump into the ICT field. Ever since I started working, I was
                            always looking at ways to make work more efficient, e.g., where a process was being
                            completed in 10 steps, I would see if it could be done in 7 and still give the same,
                            or better results.
                           </br></br>
                           Although these only started in the form of updating excel reports or unused features in the
                           system software, when I later moved to working as a Client Support Agent for an IT company,
                           the company was always open to suggestions and feedback regarding the team’s reporting
                           software.
                           </br></br>
                           Through this, I was able to see the more technical work involved in how reports were
                           generated and by conversing with members of the IT teams I figured out some tips and tricks
                           to further expand on the search parameters, which helped the team immediately discover and
                           solve more customer issues without having to create a support ticket and waiting for
                           minutes, to hours, to days before receiving a response for the customer. As I became more
                           accustomed with the systems, part of my role evolved into training new staff and team
                           managers in how to work some of the systems, out of which came an opportunity to study a
                           Training &#38 Development course, for occupational training, that I completed back in 2019.
                           </br></br>
                           As time went on, my interest turned towards more analytical fields grew, and I made the
                           decision to apply for a newly offered 1-year course in that field in early 2020.
                           Unfortunately, that course never went ahead, due to the state of global affairs, but back
                           when I first applied for the course, I was introduced to the course director for their
                           Software Development course, after hearing about my past experiences. It was thanks to
                           that encounter that I was fortunate to receive an offer to transfer from the now cancelled
                           Data Analysis course to Software Development 2 weeks before the college year started.
                           </br></br>
                           <b>That brings us to how I found HZ and why I took the leap overseas to study there:</b>
                           </br></br>
                           During my studies, one of our assignments for Personal &#38 Professional Development was
                           to research progression opportunities after graduation, which included both educational
                           and employment routes. As I was familiar with the available educational opportunities
                           within Ireland, I decided to look overseas and came across HZ as one of the courses of
                           interest. After further research, the practical nature of the ICT course in HZ seemed to
                           suit my learning style and the course allows for me to try various sectors before deciding
                           on which direction I want to go, be it Software, Data or Business IT related.
                           </br></br>
                           In addition to this, I do think that using the opportunity to study in a different country
                           and environment would be beneficial to both my personal and professional development, by
                           allowing me to push my current boundaries.
                           </br></br>
                           So now the first step has been taken, where is the destination?
                           </br></br>
                           From all that you’ve read above, I would like to progress further in an IT related career,
                           be it in an Analysis or Business IT related role (although I am aware that the latter
                           isn’t fully available for international students at this time). This is mainly due to what
                           I perceive to be my analytical approach to how I helped customers in my previous careers
                           combined with what I studied in my Software Development course. While looking at
                           progression opportunities I did come across a Customer Experience position at Riot Games,
                           which was a team who was an intermediary between the Player Support and IT teams that
                           reviewed cases and determined if systems need updating, or if new systems were required
                           from the IT teams. Following that they would work with the Player Support teams in
                           arranging or providing training in the new developments, which also ties into my
                           Training &#38 Development course.
                           </br></br>
                           Over the next 4 years, all remains to be seen is whether I continue down this same path or
                           if additional opportunities appear before me. The world of ICT is ever expanding and who
                           knows what else it creates in the future.
                        </p>',
                'link' => 'why-choose-ict',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
                [
                'title' => 'ICT Article',
                'excerpt' => 'Summary of an article linked to the ICT field. (In progress)',
                'body' => '<p class="assistant-fix pending">
                                My executive assistant is currently reviewing the materials and will have a response
                                for you shortly.
                                <br>
                                However,
                                <a
                                href="https://www.weforum.org/agenda/2015/01/how-messaging-apps-are-replacing-texting/"
                                >here\'s
                                </a> an article that might interest you in the meantime.  Which delves into how
                                messaging apps, like WhatsApp, have been replacing text messaging over the years.
                                <img
                                    class=assistant" src="../resources/images/my-assistant.jpg"
                                    alt="My Executive Assistant"
                                >
                            </p>',
                'link' => 'ict-article',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
                [
                'title' => 'My personal SWOT analysis',
                'excerpt' => 'A Personal Analysis of my Strengths , Weaknesses, Opportunities and Threats.',
                'body' => '<p>
                                A Personal SWOT-Analysis is where one analyses their Strengths and  Weaknesses,
                                while also taking notes of Opportunities and Threats that  could affect their studies.
                                Below are the details I submitted in my  “Who Am I?” document earlier this year.
                            </p>
                            <div class="swot-box">
                                <div class="s-box yellow">
                                    <h3>Strengths</h3>
                                    <ul>
                                        <li>Adaptable and can react to changing and sudden situations.</li>
                                        <li>I can work well as a part of a team but also capable of working
                                        autonomously</li>
                                        <li>Have a relatively analytical mindset</li>
                                        <li>Take a broad approach when it comes to investigating/reviewing customer
                                        issues, and I use these same skills when completing my course\'s coding
                                        assignments.</li>
                                    </ul>
                                </div>
                                <div class="w-box blue">
                                    <h3>Weaknesses</h3>
                                    <ul>
                                        <li>Can come across as a "quiet" individual (Until you get me talking)</li>
                                        <li>Introvert personality</li>
                                        <li>Sometimes looks deeper into the details than needed, taking on more work
                                        than necessary</li>
                                        <li>Study focus needs improvement</li>
                                        </ul>
                                </div>
                                <div class="o-box blue">
                                    <h3>Opportunities</h3>
                                    <ul>
                                        <li>I can use and develop my previous work and education experiences</li>
                                        <li>The course\'s practical experience can help improve upon my weaknesses and
                                        develop my existing strengths</li>
                                        <li>It can help me realise new ways of incorporating my existing skills and
                                        knowledge in the subject area.</li>
                                    </ul>
                                </div>
                                <div class="t-box yellow">
                                    <h3>Threats</h3>
                                    <ul>
                                        <li>My study focus isn\'t as good as I would like for it to be, but I am
                                        working on improving it as much as possible.</li>
                                    </ul>
                                </div>
                            </div>',
                'link' => 'swot-analysis',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ],
                [
                'title' => 'My "Who am I" document feedback',
                'excerpt' => 'Who am I? What did HZ learn about me?',
                'body' => '<p>
                                Back when I was initially accepted into HZ’s ITC course one request that the
                                department had  was we filled out a short “Who am I?” form, where we gave some info
                                on our backgrounds, aspirations and if we had any previous experiences with coding.
                                This was an interesting way of letting them get to know us better and see if and why
                                we thought it was a good idea to continue with the course. After we submitted the
                                form, we later received some feedback from one of the lecturers.
                                </br></br>
                                Compared to many of the students in the class, I came from a background where I was
                                employed as a Client Support Agent (think Customer Service but with a fancier name)
                                at an IT company for 5 years and I was also in the middle of completing a 1 year
                                software development course, which focused on the introduction to coding, basics of
                                architecture in the IT field as well as developing some soft skills (mainly for
                                helping those fresh out of school or returning to the professional environment).
                                Another thing that I was bringing to the course was the fact that at the time of
                                applying I recently turned 31 and would be entering into a college course consisting
                                of students in their late teenage years, into their early 20s.
                                </br></br>
                                This was one of their main surprise points and an area of focus for when it came to
                                my form being reviewed. While my application and inclusion into ICT was welcomed and
                                warmly received, one topic raised was if would see it as a challenge having to
                                incorporate myself into a much younger group and if I would find any other challenges
                                to my study focus and motivation.
                                </br></br>
                                When I first had a go at third level education (aka college education) back home in
                                Ireland, all the way back in 2008, one thing which was strange, but not unknown, to
                                me was the concept of adult learners. This basically means anyone who’s at least 25
                                years old and returning to full time education from a wide range of backgrounds
                                (employment, unemployment or even from moving between different levels of education
                                and courses). Many people have the natural assumption that anyone going to college
                                would be in the 18 to mid-20s range, and adult learners being towards to top end of
                                that range. However, one thing which they soon discover is that a student can be
                                almost any age, so long as they feel like they are able to learn and are willing to
                                put the work in. Since those days I was fortunate to make many friends ranging from
                                those close to my own age up to others who were in the same position which I have
                                placed myself into now.
                            </p>
                            <p>
                                <img src="../resources/images/adult-learner.gif" alt="How do you, fellow kids?">
                                For many students at HZ, I was very lucky to receive a warm welcome from many of
                                the students, who were both surprised at my age (most people don’t believe I’m 31,
                                even back at home) as well as congratulating my on making such a move, especially
                                combing it with leaving my existing career and moving to a completely new environment
                                (which would be similar to many of their own experiences to a degree). Also, in the
                                years since many of the communities I am involved with, as well as those who I worked
                                and studied with branches far into both directions.
                                </br></br>
                                There are of course a minority of people who I have been introduced to who had an
                                opposite reaction, but they were not too negative and was more their surprise at
                                speaking casually with someone who is almost double their age than simply myself
                                being “old”. But that is something still prevalent in society since before even I
                                initially started college back in 2008, as it was once believed that you go to school,
                                get a college degree and then your life‘s path is determined. While going into that
                                topic is something for another day, I would say that I believe that idea is no longer
                                a true representation of life after school and we always have an opportunity to
                                either restart from step one all over again, or even divert to a new path whenever
                                it suits ourselves.
                                </br></br>
                                Regarding my study focus, it will be a challenge to change back from a schedule where
                                I worked during the night and going to sleep at 7:00 in the morning, into one where
                                I must be in class for 9:00 was a challenge, but I had the summer to help offset that
                                (the odd late night aside). I was also fortunate enough to have completed a full-time
                                course last year, which consisted of a 9:00 to 16:00 schedule 3 days a week, albeit
                                all online instead of an offline course due to the pandemic. Rebuilding a structure
                                around college and allocating dedicated time to studying and/or project work is an
                                aim of mine and it can only be developed upon with further practice, which this course
                                does offer in it’s allocated “self-study” time, which in turn I can look at
                                incorporating into my out-of-college hours as I progress.
                                </br></br>
                                Even though it is still early into the college year, I have been fortunate to have
                                many positive encounters and have already made many friends both inside and outside of
                                the ICT course, we’ll see how those change as time goes on, or once we all start
                                panicking ahead of our quarterly exams… (I joke!)
                            </p>',
                'link' => 'who-am-i',
                'class' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
                ]
        ]);
    }
}
