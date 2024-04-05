<form action="" method="post" class="card"  enctype="multipart/form-data">
    <div class="card-body">
        <div class="form-group mb-3">
            <input type="text" name="name" placeholder="Название" class="form-control">
        </div>
        <div class="form-group mb-3">
            <input type="text" name="city" placeholder="Город" class="form-control">
        </div>

        <div class="form-group mb-3">
            <input type="text" name="date" placeholder="Время работы" class="form-control">
        </div>
        <div class="form-group">
            <input type="file" name="file" class="form-control">
        </div>

    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <a href="/profile/" class="btn btn-link">Вернуться</a>
            <button type="submit" class="btn btn-primary ms-auto">Добавить</button>
        </div>
    </div>
</form>