<?php
echo <<<HTML
    <h1>Welcome to Mega-Burger</h1>
    <h2>Please create your order:</h2>
    <form method="get">
        <div class="form-group">
            <label for="customer">Your name</label>
            <input class="form-control" id="customer" type="text" name="customer" required />
        </div><br>
        <div class="form-group">
            <label for="burger">Do you want a burger?</label>        
            <select class="form-control" id="burger" name="burger">
                <option value="" selected>No Burger</option>
                <option value="beef">Beef-Burger</option>
                <option value="bean">Bean-Burger</option>
                <option value="chicken">Chicken-Burger</option>
                <option value="fish">Fish-Burger</option>
                <option value="seitan">Seitan-Burger</option>
            </select>
        </div>
        <div class="form-group">
            <label for="burgerExtras">Do you want extras with your burger?</label><br>             
            <input type="checkbox" name="burgerExtras[]" id="burgerExtras" value="cheese"> Cheese<br>
            <input type="checkbox" name="burgerExtras[]" id="burgerExtras" value="cucumber"> Cucumber<br>
            <input type="checkbox" name="burgerExtras[]" id="burgerExtras" value="onion"> Onion<br>
            <input type="checkbox" name="burgerExtras[]" id="burgerExtras" value="salad"> Salad<br>  
            <input type="checkbox" name="burgerExtras[]" id="burgerExtras" value="tomato"> Tomato<br>
        </div><br>  
        <div class="form-group">
        <label for="tAway">Do you want your Burger for take away?</label>         
        <select class="form-control" id="burgerExtras" name="burgerExtras[]">
                <option value="" selected>No</option>
                <option value="togo">Yes</option>     
            </select>
        </div>     
        <div class="form-group">
            <label for="fries">Do you want fries?</label>
            <select class="form-control" id="fries" name="fries">
                <option value="" selected>No Fries</option>
                <option value="french">French-Fries</option>    
            </select>
        </div>
        <div class="form-group">
            <label for="friesExtras">Do you want extras with your fries?</label><br>
            <input type="checkbox" name="friesExtras[]" id="friesExtras" value="ketchup"> Ketchup<br>
            <input type="checkbox" name="friesExtras[]" id="friesExtras" value="mayonnaise"> Mayonnaise<br>      
        </div><br>
        <div class="form-group">
        <label for="take">Do you want your fries for take away?</label>         
        <select class="form-control" id="friesExtras" name="friesExtras[]">
                <option value="" selected>No</option>
                <option value="togo">Yes</option>     
            </select>
        </div>     
        <div class="form-group">
            <label for="salad">Do you want a salad?</label>         
            <select class="form-control" id="salad" name="salad">
                <option value="" selected>No Salad</option>
                <option value="salad">Standard Salad</option>    
            </select>
        </div>
        <div class="form-group">
            <label for="saladExtras">Do you want extras with your salad?</label><br>  
            <input type="checkbox" name="saladExtras[]" id="saladExtras" value="vinaigrette"> Vinaigrette<br>
            <input type="checkbox" name="saladExtras[]" id="saladExtras" value="yogurt"> Yogurt Dressing<br>
            <input type="checkbox" name="saladExtras[]" id="saladExtras" value="garlic"> Garlic Dressing<br>        
        </div><br> 
        <div class="form-group">
        <label for="togo">Do you want your Salad for take away?</label>         
        <select class="form-control" id="saladExtras" name="saladExtras[]">
                <option value="" selected>No</option>
                <option value="togo">Yes</option>     
            </select>
        </div>    
        <div class="form-group">
            <label for="drink">Do you want something to drink?</label>         
            <select class="form-control" id="drink" name="drink">
                <option value="" selected>Nothing to drink</option>
                <option value="cola">Cola</option>    
                <option value="lemonade">Lemonade</option>    
            </select>
        </div><br> 
        <div class="form-group">
        <label for="away">Do you want your Drink for take away?</label>         
        <select class="form-control" id="drinkExtras" name="drinkExtras[]">
                <option value="" selected>No</option>
                <option value="togo">Yes</option>     
            </select>
        </div>      
    <button type="submit" class="btn btn-primary">Order</button>
    </form>
    HTML;
    ?>