@extends('layout')

@section('title')
    Home
@endsection

@section('header')
    Fáilte
@endsection

@section('div-type')
    index-article
@endsection

@section('content')
                <div class="index-content">
                    <h2>
                        Welcome, or as we say in Ireland fáilte!
                    </h2>
                    </br>
                    <p>
                        From a young age I was fortunate to encounter various forms of technology and try my hand at multiple coding languages.
                        This mainly manifested through playing around, and tinkering with different devices and games, and resulted in me being
                        the “fix-it guy” in my family when it came to a mobile phone, laptop or even the television not working. Although I wouldn’t
                        say I was an expert, my inquisitive nature and resourcefulness opened many possibilities over the years.
                    </p>
                    </br>
                    <p>
                        When working, I was always be interested in discovering how the systems that I used on a regular basis worked and using that
                        knowledge to see if I could discover new ways of using the existing reports and tools to do things such as quickly looking up
                        information which would normally be acquired by raising support tickets with the tech team. (But obviously communicating with
                        members of the tech team to confirm if my ideas could work without causing issues, and going through the process with them until
                        we could determine if it was possible or not)
                    </p>
                    </br>
                    <p>
                        Following on from that, I had an aim to eventually return to full-time education, focusing on the IT field as I was building
                        further interest in IT and Data Analysis after my many experiences. All that I needed was to find the right time and a course.
                    </p>
                    </br>
                    <p>
                        Cut forward to early March 2020, before the madness, I decided to take the leap and  apply for a newly established, 1 year
                        <a href="https://corkcollegeofcommerce.ie/data-analytics/" target="_blank">Data Analysis</a> course, in a local Further Education College.
                        Unfortunately, while originally accepted for a position in the course, it never went ahead but I was offered a place in their
                        <a href="https://corkcollegeofcommerce.ie/software-development-level-5/" target="_blank"> Software Development</a> course in its stead.
                    </p>
                    </br>
                    <p>
                        It was thanks to this course that I believed I could progress further with a career in this industry, and the reason behind how I discovered
                        <a href="https://hz.nl/en/study-programmes/it" target="_blank">HZ University of Applied Science’s ICT course</a>.
                    </p>
                    </br>
                </div>
                <div class="articles" style="width: 90%">
                    <br><hr><br>
                        @foreach($articles as $article)
                        <a href="{{route('articles.show', $article)}}">
                            <li class="blog-post blog-link">
                                <h3>{{$article->title}}</h3>
                                <h4>{{Str::limit($article->created_at, 10)}}</h4>
                                <p>{{$article->excerpt}}</p>
                            </li>
                        </a>
                        <br><hr><br>
                        @endforeach
                    </ul>
                </div>
                <div class="cork-img"><img src="resources\images\cork-view.jpg" alt="Cork View"></div>
                <div class="index-content2">
                    <h2>But why choose ICT at HZ, why leave a full-time career to pursue full-time study in a different country?</h2>
                    </br>
                    <p>
                        Some of the many things which HZ offers, which I did not notice in any of my local universities, could be summarised as:
                        </br></br>
                        <ul>
                            <li>Their strong focus on the practical application of learning</li>
                            <li>A hands-on approach to learning, encouraging us to be both self-sufficient as well as developing teamworking skills</li>
                            <li>Using real-life situations as a base for the projects and studies, such as using our coding experience to create a game
                                for school children which involved the transferral of learning for specific topics.</li>
                            <li>Focus on helping students acclimate to working in a business environment through working with local business for project work
                                and, holding information sessions and company safaris to introduce us to potential progression paths.</li>
                        </ul>
                        </br>
                        Considering my own learning style and how I have operated for the last 5 years, I felt that these qualities suited my preference for
                        hands-on learning and could provide plenty of opportunities to further develop myself in both a personal and a professional capacity.
                        </br></br>
                        As for why I took the leap from my cosy island corner into the mainland of Europe. If I was to briefly summarise my reasoning it
                        would be that I felt that a change was needed and to better develop myself and broaden my cultural horizons. ICT is truly a global
                        field and what better way to acquaint myself with the world of ICT than to immerse myself into a new culture and connect with students
                        from many differing backgrounds, but all sharing the same plans of delving into ICT.
                        </br></br>
                        If you would like to know more about <a href="articles/103" target="_blank">why ICT caught my interest</a>, or even <a href="articles/106" target="_blank">
                            my brief thoughts and musings about being an "Adult Learner"</a> in	an environment where many of my fellow learners range from 8 to 15 years
                        younger than me, I have added (and in future will look at expanding upon) some <a href="/articles" target="_blank">Blog posts</a> which go into a bit more detail
                        (or as some would say, where I take you for a wander through said topics!).
                    </p>
                    </br>
                </div>
                <div class="middelburg-img"><img src="resources\images\middelburg-canal.jpg" alt="Middelburg View"></div>
@endsection
