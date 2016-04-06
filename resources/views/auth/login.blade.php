@extends("default")
@section("head")
    <style>
        html,body {
            background-color: #FFFFFF;
        }

        .center {
            position: absolute;
            width: 390px;
            height: 480px;
            margin-top: -210px;
            margin-left: -240px;
            top: 50%;
            left: 50%;
            text-align: left;
        }

    </style>
@stop
@section("body")
<div class="center">
    <div class="card blue-grey darken-1">
        <form method="POST" action="/auth/login">
            <div class="card-content white-text">
                <img src="/images/mark.png" alt="" height="60px">
                <div class="card-title">你準備起飛了嗎？</div>
                {!! csrf_field() !!}

                <div style="text-align: left">
                    Email
                    <input type="email" name="email" autocomplete="off"  value="{{ old('email') }}">
                </div>

                <div style="text-align: left">
                    密碼
                    <input type="password" autocomplete="off"  name="password" id="password">
                </div>

                <div>
                    <input type="checkbox" name="remember" id="remember"> 
                    <label for="remember">記住我</label>
                </div>
            </div>
            <div class="card-action">
                <div>
                    <button type="submit" class="btn waves-effect cyan darken-2">登入</button>
                </div>
            </div>
        </form>
    </div>
</div>
@stop