<div class="row">
        <div class="col-sm-6 google-blok">
                <iframe
                src="http://ditu.google.cn/maps/embed?pb=!1m23!1m12!1m3!1d9911.912811825856!2d4.810950248133056!3d51.60528797442021!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x47c69f40aefa53d1%3A0x3ae72549b0c6be99!2sImmenhof%2C+4847+SR+Teteringen!3m2!1d51.6052883!2d4.819705!4m0!5e0!3m2!1snl!2snl!4v1557482119550!5m2!1snl!2snl"
                width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen>
                </iframe>
                 <div class="google-overlay"></div>
                     <span class="google-contact-tekst">
                <a href="https://goo.gl/maps/96WkhzCzycb4FzXk7" target="_blank">
                    <h1>I'm here</h1>
                    <p>You can always contact me</p>
                    <h2>My adress</h2>
                    <p>Immenhof 16</p>
                    <p>4847SR Teteringen</p>
                    <p>The Netherlands</p>
                </a>
            </span>
            <span class="google-contact-vlag">
                <img class="vlag" src="{{ asset('images/Netherlands.png') }}">
            </span>
                <span class="google-contact-icons">
                <a href="https://github.com/adjevanmierlo" target="_blank"><img
                        src="{{ asset('images/github-sign.png') }}"></a>
                <a href="https://www.linkedin.com/in/adje-van-mierlo/" target="_blank"><img
                        src="{{ asset('images/linkedin.png') }}"></a>
                </span>

    </div>

            <div class="col-sm-6 info-blok">
                <div class="text">
                    <H1>Let's talk</H1>
                    <p>Share your thoughts with me</p>
                    <a href="mailto:a.vanmierlo@ziggo.nl">a.vanmierlo@ziggo.nl</a>
                    <h2>Let's talk about</h2>

                    @if(session('message'))
                    <div class='alert alert-success'>
                        {{ session('message') }}
                    </div>
                    @endif

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form class="form-horizontal" method="POST" action="/contact">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="Name">Name: </label>
                            <input type="text" class="form-control" id="name" placeholder="Your name" name="name" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email: </label>
                            <input type="text" class="form-control" id="email" placeholder="Your email:" name="email"
                                required>
                        </div>

                        <div class="form-group">
                            <label for="message">message: </label>
                            <textarea type="text" class="form-control luna-message" id="message"
                                placeholder="Type your messages here:" name="message" required></textarea>
                            <br>
                            <button type="submit" class="btn btn-outline-primary" value="Send">Neem contact op</button>
                        </div>

                    </form>

                </div>
            </div>
</div>
