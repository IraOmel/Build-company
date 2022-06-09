@yield('header')
@if (isset($_POST['submitForm']))
<div class="formOkMsg">
                    <h3>{{$user['name']}}</h3>
                    <p>Ваше повідомлення буде розглянуто через деякий час.
                        Відповідь буде надіслана на ваш email: {{$user['email']}}</p>
            <p><a href="/cooperation">Повернутись</a> до заповнення форми</p>
    </div>
@endif
@if(!isset($_POST['submitForm']))
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form class="home-input" action="/message_sent" method="POST">
        @csrf
    <div class="name">
        <div class="name-title">Прізвище та ім'я:&nbsp</div>
        <div class="name-class"><input type="text" name="name" required></div>
    </div>
    <div class="email">
        <div class="email-title">Пошта:&nbsp</div>
        <div class="input-class"><input type="email" name="email" placeholder="your_email@ukr.net" required></div>
    </div>
    <div class="message">
        <div class="message-title">Повідомлення:&nbsp;</div>
        <div class="input-message"><input type="text" name="text" required></div>
    </div>
    <div class="button">
        <button class="button-6" type="submit" name="submitForm">Відправити</button>
    </div>
</form>
@endif
@yield('footer')
