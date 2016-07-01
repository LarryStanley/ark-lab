@extends("defaultSemantic")
@section("head")
    <style>
        html,body {
            background-color: #404040;
        }

        .center {
            position: absolute;
            width: 390px;
            height: 550px;
            margin-top: -275px;
            margin-left: -195px;
            top: 50%;
            left: 50%;
            text-align: left;
        }

        .img {
            text-align: center;
        }

    </style>
@stop
@section("body")
<div class="center">
    <div class="ui red segment">
        <div class="img">
            <img src="/images/mark.png" alt="" height="60px"><br>
            <h3>你準備起飛了嗎？</h3>
        </div>
        <div class="ui divider">
        </div>
        <a class="ui facebook button" href="/login/facebook" style="width:100%">
            <i class="facebook icon"></i>
            Facebook 登入
        </a>
        <!--
        <div class="ui  three column very relaxed grid">
            <div class="ui column" style="text-align:center">
                <a href="/login/facebook" class="ui circular icon big button">
                    <i class="facebook f icon"></i>
                </a>
            </div>
            <div class="ui column" style="text-align:center">
                <a href="/login/google" class="ui circular icon big button">
                    <i class="google icon"></i>
                </a>
            </div>
            <div class="ui column" style="text-align:center">
                <a href="/login/github" class="ui circular icon big button">
                    <i class="github icon"></i>
                </a>
            </div>
        </div>
        !-->
        <div class="ui horizontal divider">
            <h3>或</h3>
        </div>
        <form method="POST" action="/auth/login" class="ui form">
            {!! csrf_field() !!}
            <div class="field">
                <label>Email</label>
                <input type="email" name="email" autocomplete="off"  value="{{ old('email') }}">
            </div>

            <div class="field">
                <label for="">密碼</label>
                <input type="password" autocomplete="off"  name="password" id="password">
            </div>

            <div class="field">
                <div class="ui checkbox">
                    <input type="checkbox" name="remember" id="remember" class="hidden"> 
                    <label for="remember">記住我</label>
                </div>
            </div>
            <div style="width:100%">
                <button style="width:100%" type="submit" class="ui blue floated right button">登入</button>
            </div>
        </form>
    </div>
    <div style="width:100%; text-align:center">
        <a href="/auth/register" style="color:white;" id="registerButton">
            建立賬戶
        </a>
    </div>
    <div class="ui modal small" id="registerModal">
        <div class="header">註冊</div>
        <div class="content">
            <form method="POST" action="/auth/register" class="ui form">
                {!! csrf_field() !!}
                <div class="field">
                    <label for="">您的姓名</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="姓名">
                </div>

                <div class="field">
                    <label for="">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" placeholder="email">
                </div>

                <div class="field">
                    <label for="">密碼</label>
                    <input type="password" name="password" placeholder="密碼">
                </div class="field">

                <div class="field">
                    <label for="">再次輸入密碼</label>
                    <input type="password" name="password_confirmation" placeholder="密碼">
                </div>

                <div class="field">
                    <button type="submit" class="ui button primary" style="width:100%">註冊</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop

@section("javascript")
<script>
    $(document).ready(function() {
        $("#registerButton").click(function() {
            $("#registerModal").modal("show");
            return false;
        });
    });
</script>
@stop