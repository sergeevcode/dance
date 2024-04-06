<div class="row justify-content-center">
    <div class="col-sm-6">
        <form class="card card-md" action="" method="post" autocomplete="off" novalidate>
            <div class="card-body">
            <h2 class="card-title text-center mb-4">Профиль</h2>
            <div class="mb-3">
                <label class="form-label">Ваше имя</label>
                <input type="text" class="form-control" name="name" value="<?=$data['user']['name']?>" placeholder="Ваше имя">
            </div>  
            <?php if ($data['user']['role'] == 2): ?>
                <div class="form-group mb-3">
                    <label class="form-label">Описание</label>

                    <textarea name="descr" class="form-control" id="" cols="30" rows="5"><?=$data['user']['descr']?></textarea>
                </div>
            <?php endif;?>
            <div class="form-group">
                <input type="file" name="file" class="form-control">
            </div>
            <div class="form-footer">
                <button type="submit" class="btn btn-primary w-100">Обновить</button>
            </div>
            </div>
        </form>
        <div class="text-center text-muted mt-3">
            Есть аккаунт? <a href="/" tabindex="-1">Войти</a>
        </div> 
    </div> 
</div>