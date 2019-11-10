<div class="footer">
<div class="container">
    <div class="col-md-3 footer-grid">
        <h3>About Us</h3>
        <p> This is Pro shopping. This is most fashionable online shoe store. All the Products are imported from china</p>
    </div>
    <div class="col-md-3 footer-grid ">
        <h3> Popular Brands </h3>
        @foreach($brands as $brand)
        <ul>
            <li><a href=" ">{{ $brand->brand_name }}</a></li>

        </ul>
            @endforeach
    </div>
    <div class="col-md-3 footer-grid ">
        <h3>Customer Services</h3>
        <ul>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Faqs</a></li>
            <li><a href="#">Contact</a></li>
            <li><a href="#">Online Shopping</a></li>

        </ul>
    </div>
    <div class="col-md-3 footer-grid">
        <h3>My Account</h3>
        <ul>
            <li><a href="#">Login</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">Wishlist</a></li>

        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="footer-bottom">
        <h2 ><a href="index.html"><b>P<br>R<br>O</b>PRO SHOPPING <span> BD</span></a></h2>
        <p class="fo-para"> Men's ultimate Fashion destination</p>
        <ul class="social-fo">
            <li><a href="#" class=" face"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" twi"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" pin"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="#" class=" dri"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
        </ul>
        <div class=" address">
            <div class="col-md-4 fo-grid1">
                <p><i class="fa fa-home" aria-hidden="true"></i>Sector-8 , Uttara Dhaka 1230.</p>
            </div>
            <div class="col-md-4 fo-grid1">
                <p><i class="fa fa-phone" aria-hidden="true"></i>+8801671354804</p>
            </div>
            <div class="col-md-4 fo-grid1">
                <p><a href="mailto:info@example.com"><i class="fa fa-envelope-o" aria-hidden="true"></i>info@proshoppingbd.com</a></p>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <div class="copy-right">
        <p> &copy; 2019 Pro Shopping. All Rights Reserved | Developed by  <a href="http://www.devsprince.com"> Tanvir Rahman Prince </a></p>
    </div>
</div>
</div>