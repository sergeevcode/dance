<?php if (!isset($_GET['id'])):?>
<div class="row row-cards">

    <?php foreach($data['chats'] as $chat):?>
        <?php if ($data['user']['role'] != $chat['role']):?>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body p-4 text-center">
            <span class="avatar avatar-xl mb-3 rounded" style="background-image: url('/uploads/users/<?=$chat['id']?>.jpeg')"></span>
            
             <h3 class="m-0 mb-1" style="padding: 0 20px"><a href="?id=<?=$chat['id']?>"><?=$chat['name']?></a></h3>
      

           
            </div> 
        </div>
    </div>
    <?php endif;?>
    <?php endforeach;?>
</div>
<?else:?>

    <div class="row mb-5">
        <div class="col">
            <?php foreach($data['chat'] as $mess):?>

            <div class="row mb-3 <?=($mess['user_from'] == $_SESSION['user_id']) ? 'justify-content-end' : 'justify-content-start'?>">
                    <div class="col-6">
                <div class="card pl-2 pt-2 pr-2 pb-2" style="padding: 20px"><?=$mess['message']?></div>

                </div>
            </div>
            <?php endforeach;?> 
        </div>
    </div>

    <div class="row">
        <form action="" method="post">
            <div class="form-group mb-3">
                <input type="hidden" name="user_from" class="form-control" value="<?=$_SESSION['user_id']?>">
            </div>
            <div class="form-group mb-3">
                 <input type="hidden" name="user_to" class="form-control"  value="<?=$_GET['id']?>">
            </div>
            <div class="form-group mb-3">
                <textarea name="message" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <button class="btn btn-primary">Отправить</button>
        </form>
    </div>

<?endif;?>