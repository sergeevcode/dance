<div class="row mb-5">

    <div class="col-md-6 col-xl-4">
        <div class="card">
            <div class="card-body text-center">
                <div class="mb-3">
                    <span class="avatar avatar-xl rounded" style="background-image: url(/static/avatars/010m.jpg)"></span>
                </div>
                <div class="card-title mb-1"><?=$data['user']['name']?></div>
                <div class="text-secondary">                    
                    <?php
                        if ($data['user']['role'] == 1) {
                            echo "Ученик";
                        } else {
                            echo "Хореограф";
                        }
                    ?>
                </div>
            </div> 
        </div>
        
    </div>
    <?if($data['user']['role'] == 2):?>
    <div class="col-xl-8">
        О хореографе
    </div>
    <?endif;?>
</div>
<?if($data['user']['role'] == 1):?>
    <div class="row">
        <div class="col">
            <h2>Хореографы</h2>
        </div> 
    </div>

    <div class="row">
        <?foreach($data['users'] as $dataUser):?>
        <div class="col-md-6 col-lg-3">
            <div class="card">
                <div class="card-body p-4 text-center">
                    <span class="avatar avatar-xl mb-3 rounded" style="background-image: url(./static/avatars/000m.jpg)"></span>
                    <h3 class="m-0 mb-1"><a href="/teachers/?id=<?=$dataUser['id']?>"><?=$dataUser['name']?></a></h3>
                    
                </div> 
            </div>
        </div>
        <?endforeach;?>
    </div>
<?endif;?>

<?if($data['user']['role'] == 2):?>
<div class="row">
    <div class="col">
        <h2>Лента хореографа</h2>
    </div>
    <div class="col-auto ms-auto d-print-none">
        <div class="d-flex"> 
            <a href="additem" class="btn btn-primary"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                Добавить запись
            </a>
        </div>
    </div> 
</div>
<div class="row  mb-5"> 
    <div class="col-md-12">
        <div class="row row-cards">
            <?foreach($data['feed'] as $item): ?>
            <div class="col-sm-6 col-lg-6">
                <div class="card card-sm">
                    <a href="<?=$item['src']?>" class="d-block">
                        <img src="<?=$item['src']?>" class="card-img-top">
                    </a>
                    <div class="card-body">
                        <div class="d-flex align-items-center"> 
                            <div>
                                <div>
                                    <?=$item['descr']?>
                                </div>
                                <div class="text-secondary"><?=date_ru(strtotime($item['date']))?></div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div> 
            <?endforeach;?>
        </div>
    </div>
</div>


<div class="row mb-3">
    <div class="col">
        <h2>Лента услуг</h2>
    </div>
    <div class="col-auto ms-auto d-print-none">
        <div class="d-flex"> 
            <a href="addservice" class="btn btn-primary"> 
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M12 5l0 14"></path><path d="M5 12l14 0"></path></svg>
                Добавить услугу
            </a>
        </div>
    </div> 
</div>

<div class="row">
    <div class="col">
        <?php foreach($data['services'] as $service):?>
        <div class="card mb-2">
            <div class="row g-0">
                <div class="col-auto">
                    <div class="card-body">
                    <div class="avatar avatar-md" style="background-image: url(<?=$service['icon']?>)"></div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-body ps-0">
                    <div class="row">
                        <div class="col">
                        <h3 class="mb-0"><a href="#"><?=$service['name']?></a></h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                        
                        <div class="mt-3 list mb-0 text-secondary d-flex align-items-center">
                            
                        <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/license -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 21h-9a3 3 0 0 1 -3 -3v-1h10v2a2 2 0 0 0 4 0v-14a2 2 0 1 1 2 2h-2m2 -4h-11a3 3 0 0 0 -3 3v11"></path><path d="M9 7l4 0"></path><path d="M9 11l4 0"></path></svg>
                            <?=$service['date']?></div>
                            <div class="list-item"><!-- Download SVG icon from http://tabler-icons.io/i/map-pin -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path><path d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z"></path></svg>
                            <?=$service['city']?></div>
                        </div>
                        </div>
                        <div class="col-md-auto">
                            <a href="#" class="btn btn-primary">Записаться</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?endif;?>
