<div class="container text-center">
    <h1 class="caption">панель администратора</h1>
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Вход</div>
        <div class="card-body">
            <form action="/admin/login" method="post">
                <div class="form-group">
                    <label>Логин</label>
                    <input class="form-control" type="text" name="login">
                </div>
                <div class="form-group">
                    <label>Пароль</label>
                    <input class="form-control" type="password" name="password">
                </div>
                <button type="submit" class="btn btn-block">Войти</button>
            </form>
        </div>
    </div>
</div>