<?php $this->layout('MainLayout/layout', ['title' => 'Home']) ?>

<link rel="stylesheet" type="text/css" href="/css/MainPage.css">

<?php Use App\Models\Database;?>


<?php if(!empty($products)):?>

    <div class="main-page-container">
        <div class="product-cards-section">
            <?php foreach($products as $product): ?>

                <?php 
                    $saller = new Database();
                    $saller = $saller->SelectWhere("users", "user_id", $product['saller']);
                ?>
            <div class="product-card">
                <ul class="all-prod-info">
                    <li style="border-bottom:1px solid black;" ><img src="/images/user.png" alt=""></li>
                    <li><p><?=$product['prod_name'];?></p></li>
                    <li><p><?=$product['price'];?></p></li>
                    <li><p><?=$saller[0]['user_name'];?></p></li>
                    <li><p>Click to description</p></li>
                </ul>
                <ul class="prod-card-btns" >
                    <li><button>Купить</button></li>
                    <li><button>В корзину</button></li>
                </ul>
            </div>
            <?php endforeach; ?>
        </div>
        
    </div>

    



<?php else:?>
    <h1>ПУСТО</h1>
<?php endif;?>