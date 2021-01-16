<div class="ui fixed inverted menu">
    <div class="ui container">
        <a href="#" class="header item left floated">
            Keizoku
        </a>
        @guest
        <a href="{{ route('register') }}" class="item small">ユーザ登録</a>
        <a href="{{ route('login') }}" class="small item">ログイン</a>
        @endguest
        @auth
        <a href="{{ route('projects.create') }}" class="small item">新規プロジェクト</a>
        <div class="ui simple dropdown small item">
            マイメニュー <i class="dropdown icon"></i>
            <div class="menu">
                <a class="item" href="{{ route('users.show',['name'=>Auth::user()->name]) }}">マイページ</a>
                <a class="item" href="#">設定</a>
                <div class="divider"></div>
                <div class="header">ログアウト</div>
                <div class="item">
                    <i class="dropdown icon"></i>
                    Sub Menu
                    <div class="menu">
                        <form method="post" name="logout" action="{{ route('logout') }}">
                            @csrf
                            <a class="item" href="javascript:logout.submit()">ログアウト</a>
                        </form>
                    </div>
                </div>
                <a class="item" href="#">Link Item</a>
            </div>
        </div>
        @endauth
    </div>
</div>
