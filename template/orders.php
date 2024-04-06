<div class="row row-cards">

    <?php foreach($data['orders'] as $order):?>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body p-4 text-center">
            <span class="avatar avatar-xl mb-3 rounded" style="background-image: url('/uploads/users/<?=$order['user_id']?>.jpeg')"></span>
            <?php foreach($data['users'] as $userName):?>
                <?php if ($userName['id'] == $order['user_id']):?>
                    <h3 class="m-0 mb-1"><a href="#"><?=$userName['name']?></a></h3>
                <?php endif;?>
            <?php endforeach;?>
            <?php foreach($data['services'] as $service):?>
                <?php if ($service['id'] == $order['service_id']):?>

                        <div class="text-secondary"><?=$service['name']?></div> 
                <?php endif;?>
            <?php endforeach;?>

           
            </div> 
        </div>
    </div>
    <?php endforeach;?>
</div>