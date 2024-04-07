
<link rel="stylesheet" type="text/css" href="/css/header.css">

<?php
use App\Models\Database;

$categories = new Database;
$categories = $categories->SelectAll("categories");

?>

<div class="header">
    <div class="main-header-container">


        <div class="mobile-search-input">
                <ul>
                    <button class="burger-btn">KNOPKA</button>
                    <li><input type="search" name="" id="" placeholder="Найдется все"></li>
                    <li><button>Поиск</button></li>
                </ul>
        </div>


        <div class="left-header-btns">
            <ul>
                <li><a href="/home">Главная</a></li>
                <li><a href="#">Новости</a></li>
                <li><a href="#">Корзина</a></li>
                <li><a href="#">Panel Mode</a></li>
                <li class="Add-new-prod-btn"><a>New Product</a></li>
            </ul>
        </div>
        <div class="right-header-btns">
            <ul id="auth_container" style="display:none;">

                <li>
                    <p class="search_input">Поиск <img src="/images/down-arrow.png"  class="arrow_bottom" alt=""></p>
                    <div class="search_container">
                        <ul>
                            <li><input type="search" name="" id="" placeholder="Найдется все"></li>
                             <li><button>Поиск</button></li>
                        </ul>
                        <button>Фильтр</button>
                    </div>
                </li>

                <li>
                    <p><img src="/images/user.png" alt="" class="user_profile_img"></p>
                </li>
            </ul>
            <ul class="non_auth_container" >
                <li><a href="/auth/registration-form">Регистрация</a></li>
                <li><a href="/auth/authorization-form">Вход</a></li>
            </ul>
        </div>

    </div>
</div>

<!-- IF NEW PRODUCT BUTTON WAS CLICKED -->
<div class="add-prod-container">

        <div class="prod-form-back-btn">
            <p><img src="/images/back_icon.png" alt="" ></p>
        </div>


    <div class="main-all-zones">


        <div class="upload-zone">
            <input type="file" name="images[]" id="ImageInput" multiple accept="image/*">
            
            <label for="ImageInput">Add Photo</label>
            <button>Добавить Товар</button>
        </div>

        <div class="add-prod-inputs">

            <form class="add-product-form" id="myform">
                <div>
                    <input type="text" name="product-name" id="prodNameInput">
                    <label for="prodNameInput">Your product name</label>
                </div>

                <div>
                    <input type="text" name="product-price" id="prodPriceInput">
                    <label for="prodPriceInput">Your product price</label>
                </div>

                <div>
                    <textarea name="add-prod-description" placeholder="Description" id="ProdDesc" cols="50" rows="10"></textarea>
                </div>

             <div>
                    <select id="CategoryChoice">
                        <?php foreach($categories as $category):?>
                            <option value="<?=$category['id']?>" ><?=$category['title']?></option>
                        <?php endforeach;?>
                    </select>
            </div> 
         </form>
        </div>


    </div>
    
</div>
<!-- If search button was clicked -->
<script src="/js/header.js"></script>