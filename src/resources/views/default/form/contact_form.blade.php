

<form id="contactForm" method="POST" class="contact-form-items">
    <div class="row g-4">
        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
            <div class="form-clt form-group">
                <input type="text" name="name" id="name" placeholder="Imię *" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt form-group">
                <input id="email" type="email" name="email" placeholder="Email *" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-6 wow fadeInUp" data-wow-delay=".5s">
            <div class="form-clt form-group">
                <input id="phone" type="text" name="phone" placeholder="Telefon *" required>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-12 wow fadeInUp" data-wow-delay=".7s">
            <div class="form-clt form-group">
                <textarea id="message" name="message" rows="5" placeholder="Wiadomość *" required></textarea>
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
                <label for="rule" class="form-check-label" style="color:#fff;">{!! getConstField('contact_form_rule') !!}</label>
                <div class="invalid-feedback"></div>
            </div>
        </div>

        <div class="form-group">
            <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
            <div class="invalid-feedback"></div>
        </div>

        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
            <button type="submit" class="theme-btn bg-black">
                Wyślij wiadomość <i class="far fa-arrow-right"></i>
            </button>
        </div>
    </div>
    <div id="alert" class="alert"></div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
