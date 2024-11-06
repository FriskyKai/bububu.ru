@extends('layouts.layout')

@section('title', 'Регистрация')

@section('content')
    <section class="register">
        <h2>Регистрация</h2>
        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label for="register-surname">Фамилия *</label>
                <input id="register-surname" type="text" name="surname" required placeholder="Введите фамилию">
                @error('surname')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-name">Имя *</label>
                <input id="register-name" type="text" name="name" required placeholder="Введите имя">
                @error('name')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-patronymic">Отчество</label>
                <input id="register-patronymic" type="text" name="patronymic" placeholder="Введите отчество">
                @error('patronymic')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label>Пол *</label>
                <input type="radio" name="sex" value="1" checked> Мужской
                <input type="radio" name="sex" value="0"> Женский
                @error('sex')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-birthday">День рождения *</label>
                <input id="register-birthday" type="date" name="birthday" required placeholder="Введите дату рождения">
                @error('birthday')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-email">Электронная почта *</label>
                <input id="register-email" type="email" name="email" required placeholder="Введите электронную почту">
                @error('email')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-password">Пароль *</label>
                <input id="register-password" type="password" name="password" required placeholder="Введите пароль">
                @error('password')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-password-confirmation">Подтверждение пароля *</label>
                <input id="register-password-confirmation" type="password" name="password_confirmation" required placeholder="Введите пароль ещё раз">
            </div>
            <div>
                <label for="register-nickname">Никнейм *</label>
                <input id="register-nickname" type="text" name="nickname" required placeholder="Введите никнейм">
                @error('nickname')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-avatar">Аватар</label>
                <input id="register-avatar" type="file" name="avatar" accept="image/jpeg,image/png,image/svg+xml">
                @error('avatar')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="register-phone">Номер телефона</label>
                <input id="register-phone" type="tel" name="phone" placeholder="+7(___)___-__-__">
                @error('phone')
                    <p class="warning">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit">Зарегистрироваться</button>
            </div>
        </form>
    </section>
@endsection
