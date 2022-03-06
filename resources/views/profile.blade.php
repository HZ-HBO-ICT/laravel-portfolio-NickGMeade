@extends('layout')

@section('title')
    Who am I&#63
@endsection

@section('header')
    Who am I&#63
@endsection

@section('div-type')
    profile-article
@endsection

@section('content')
        <div class="about-me">
            <div class="profile"><img src="resources/images/profile-photo.png" alt="Profile Photo"></div>
            <div class="intro">
                <h2>About me </h2>
                <p>
                    </br>
                    Hello, I’m Nicholas Meade, but everyone calls me Nick. I am 31 years old, and I hail from Cork, Ireland.</br></br>
                    Before coming to HZ in Middelburg I spent the last 5 years working in the IT company
                    <a href="https://www.xanadu.ie/" target="_blank">Xanadu Consultancy Ltd.</a>, who are both the
                    service provider and operator for the online gambling exchange Matchbook. While
                    the role was a Client Support position for Matchbook, where I assisted users with account queries,
                    issues, and troubleshooting, I was able to connect with members of the various IT teams in the company.
                    </br></br>
                    It was thanks to this I was able to pick up skills that, while not directly involved in coding,
                    networking, or the likes, allowed for me to better understand how the systems operated and develop
                    a more troubleshooting, and analytical-focused mindset that let me look at issues and interactions from
                    a different perspective and come up with an efficient resolution where possible.
                </p>
                </br>
            </div>
        </div>
        <div class="about-cork">
            <h2>A bit about Cork</h2>
            <p>
                Cork, or Corcaigh in Irish, is the largest county situated in the southernmost part of Ireland.
                Although Dublin may be official capital of Ireland, the proud people of Cork (jokingly) believe that Cork is in fact the <em>Real Capital</em>, calling it <em>The People's Republic of Cork</em>.
                </br></br>
            </p>
            <p>
                We are also known for our sarcasm and strange phrases such as saying <em>"I will yeah"</em> when asked to do something, which, depending on the tone of voice, means "No" or "Not a chance".
            </p>
            </br>
            <p>
                While I could go on about all the great things about the city and county, I'll limit myself to only a few:
            <ul class="cork-places">
                <li><a href="http://gotireland.com/2012/04/22/the-shandon-tower-cork-citys-famous-four-faced-liar/" target="_blank">Shandon Bell Tower, aka The Four Faced Liar</a></li>
                <li><a href="https://www.jamesonwhiskey.com/en-IE/visit-us/jameson-distillery-midleton" target="_blank">The Jameson Distillery Midleton</a></li>
                <li><a href="http://www.visitcobh.com/" target="_blank">The Port Town of Cobh</a></li>
            </ul>
            </p>
        </div>
        <div class="cork-map">
            <a href="resources/images/cork-map.jpg" target="_blank"><img src="resources/images/cork-map.jpg" alt="Cork Map"></a>
        </div>
        <div class="hobbies">
            <h2>Hobbies & Activities</h2>
            <p>
                Many of my hobbies would be common passive hobbies, like with many others, which let me kick back and unwind. These include:
            <ul>
                <li>Reading</li>
                <li>Watching TV &#38 Movies, mostly Animations, Sci-Fi, Fantasy, or even Gordon Ramsay creatively shouting at chefs in MasterChef &#38 Hell's Kitchen.</li>
                <li>Playing Video Games</li>
                <li>Listening to Music</li>
            </ul>
            </br>
            <p>For anyone interested in experiencing the mixed bag that are the genres of music I listen too, I've made a Spotify playlist for you to browse below.</p>
            </br>
            <iframe src="https://open.spotify.com/embed/playlist/7osOlq9EshHJbIVRxtKlu8" width="60%" height="80" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
            </br></br>
            However, my more active hobbies also include:
            <ul>
                <li>Cooking</li>
                <li>Wandering - think walking but you pick a random direction and go! You only are in trouble when you enter somewhere where you're not supposed to be in, or you can't remember your way back...</li>
                <li>Collecting, building and playing Warhammer, a miniature tabletop game played globally.</li>
            </ul>
            </br>
            I took this photo of a Warhammer Diorama when I travelled to the world's largest Warhammer 40,000 event in Las Vegas, Nevada, in January 2020 for my birthday. The owner of this army and display is an award-winning painter who also won best display at that year's event.
            </br></br>
            This event in particular had slightly over 1000 players, but there was an overall attendance of at least 3500 people for the many events held over 4 days.
            </p>
        </div>
        <div class="lvo-display">
            <a href="resources/images/lvo-display.jpg" target="_blank"><img src="resources/images/lvo-display.jpg" alt="LVO Player Display"></a>
        </div>
@endsection
