<!------footer start here-->

<footer class="footer-bg pt-3 ">

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-2 d-none d-lg-block">
                <h6 class="about-us">About Us</h6>

                <ul class="footer-list text-left">
                    <li>About Us</li>
                    <li>Customer Reviews</li>
                    <li>Career</li>
                    <li>Media</li>
                    <li>Affiliate Program</li>

                </ul>

            </div>

            <div class="col-md-2 d-none d-lg-block">
                <h6 class="customer-service">Customer Service</h6>
                <ul class="footer-list text">
                    <li>844-986-6922</li>
                    <li>Email Us</li>
                    <li>Track My Order</li>
                    <li> FAQ's</li>
                    <li>Shipping Info</li>

                </ul>

            </div>



            <div class="col-md-2 d-none d-lg-block">
                <h6 class="quick-link">Quick Links </h6>
                <ul class="footer-list text">
                    <li>844-986-6922</li>
                    <li>Email Us</li>
                    <li>Track My Order</li>
                    <li> FAQ's</li>
                    <li>Shipping Info</li>

                </ul>


            </div>



            <div class="col-md-2 d-none d-lg-block">
                <h6 class="more">More</h6>
                <ul class="footer-list text">
                    <li>844-986-6922</li>
                    <li>Email Us</li>
                    <li>Track My Order</li>
                    <li> FAQ's</li>
                    <li>Shipping Info</li>

                </ul>



            </div>




            <div class="col-md-4">
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1"><b>Email address</b></label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

                    </div>


                    <p class="text-center"><button type="submit" class="btn btn-primary ">Submit</button></p>
                </form>

                <h6 class="text-center">Install Major Delight's App </h6>
                <!----image div-->
                <div class="text-center">
                    <img src="images/app-download-ios.png" alt="app download" class="" height="35px">
                    <img src="images/app-download-android.png" alt="app download" class="" height="35px">

                    <p class="pt-3">Follow us <i class="fab fa-facebook"></i>
                        <i class="fab fa-instagram"></i>
                        <i class="fab fa-twitter"></i>
                    </p>
                </div>

            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <ul class="footer-nav-list pt-1">
                    <li class="footer-nav-list">Sitemap |</li>
                    <li>Privacy |</li>
                    <li>Policy |</li>
                    <li>Terms of Service</li>


                </ul>



            </div>

            <div class="col-md-4">
                <p class="text-center pt-1">
                    <span><i class="fab fa-cc-visa fa-2x"></i></span>
                    <span><i class="fab fa-cc-mastercard fa-2x"></i></span>
                    <span><i class="fab fa-cc-paypal fa-2x"></i></span>
                    <span><i class="fas fa-cart-arrow-down fa-2x"></i></span>
                    <span><i class="fas fa-truck fa-2x"></i></span>
                </p>



            </div>

            <div class="col-md-4">


            </div>


        </div>

        <div class="row">
            <div class="col-md-12">
                <p class="footer-copyright pt-1">&copy; Copyright 2021 Developed & Designed with <i
                        class="fas fa-heart"></i> by Major</p>
            </div>

        </div>



    </div>
</footer>






<script type="text/javascript">
function validate(e) {
    var password = document.getElementById('password').value;
    var password2 = document.getElementById('password2').value;
    var firstname = document.getElementById('firstname').value;
    var lastname = document.getElementById('lastname').value;
    var address = document.getElementById('address').value;
    var email = document.getElementById('email').value;
    var phonenumber = document.getElementById('phonenumber').value;

    if (firstname == "") {
        alert("please enter your first name");
        e.preventDefault();
        document.getElementById('firstname').style.borderColor = 'red';

    } else if (lastname == "") {
        alert('please enter your last name');
        e.preventDefault();
        document.getElementById('lastname');
        document.getElementById('lastname').style.borderColor = 'red';

    } else if (address == "") {
        alert('please enter your address');
        e.preventDefault();
        document.getElementById('address').style.borderColor = 'red';


    } else if (password == "") {
        alert('You have not typed in your password')
        e.preventDefault();
        document.getElementById('password').style.borderColor = 'red';
    } else if (password2 == "") {
        alert('please confirm your password')
        e.preventDefault();
        document.getElementById('password2').style.borderColor = 'red';


    } else if (password == "" && password2 == "") {
        alert('you have not typed in your password')
        e.preventDefault();
        document.getElementById('password').style.borderColor = 'red';
        document.getElementById('password2').style.borderColor = 'red';

    } else if (password != password2) {
        alert("The password entered do not match")
        e.preventDefault();
        document.getElementById('password').style.borderColor = 'red';
        document.getElementById('password2').style.borderColor = 'red';

    } else if (email == "") {
        alert("please enter your email");
        e.preventDefault();
        document.getElementById('email').style.borderColor = 'red';

    } else if (phonenumber == "") {
        alert("please enter your phone number");
        e.preventDefault();
        document.getElementById('phonenumber').style.borderColor = 'red';


    } else {
        alert('Registration was successful!')
    }


}
</script>








<!----Java script files and they must follow this sequence because it runs starting with the first--->

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
</script>




</body>



</html>