<div class="wrapper row3">
    <footer id="footer" class="clear">
        <p class="fl_left">Copyright &copy; 2012 - All Rights Reserved - <a href="#">Domain Name</a></p>
        <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    </footer>
</div>
<script>
    $(function () {
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            moveSlides: 1,
            slideMargin: 40,
            infiniteLoop: true,
            slideWidth: 660,
            minSlides: 3,
            maxSlides: 3,
            speed: 800,
        });

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        $(document).on('click', '.custom-menu .target', function (e) {
            $('.custom-menu').find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    //login
    $(function () {
        //document.getElementById("login_heading").innerHTML = "Please log in";

        //var elementul1, elementul2,  titlu;

        //elementul1 = $(".login_heading");
        //elementul2 = $("#subtitle");


        changeTitle($(".login_heading"), $(".login_heading").html());
        changeTitle($("#subtitle"), $("#subtitle").html());

        function changeTitle(elementul, titlu)
        {
            titlu = titlu + " sufix";
            elementul.html(titlu);
        }
    });
</script>

<script>
    //script for form - login
    $(document).ready(function () {
        $("#inputParola").blur(function (e) {
            if (validatePhone("inputParola")) {
                alert("Valid!");

            }
            else {
                alert("Please add at least one digit, at least one letter and one uppercase letter, NO special characters!!!");

            }
        });
    });

    function validatePhone(inputParola) {
        var a = document.getElementById(inputParola).value;
        var filter1 = /^(?=.*\d)/;  //for at least one digit
        var filter2 = /(?=.*[a-z])/; //at least one letter
        var filter3 = /(?=.*[A-Z])/; //uppercase letters
        var filter4 = /(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])/; //special characters 

        if (filter1.test(a) && (filter2.test(a)) && (filter3.test(a)) && ((filter4.test(a) == 0))) {
            return true;
        }
        else {
            return false;
        }
    }
</script>
<script>
    //products
    $(function () {
        $('.bxslider').bxSlider({
            mode: 'horizontal',
            moveSlides: 1,
            slideMargin: 40,
            infiniteLoop: true,
            slideWidth: 660,
            minSlides: 3,
            maxSlides: 3,
            speed: 800,
        });

        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        });

        $(document).on('click', '.custom-menu .target', function (e) {
            $('.custom-menu').find('.active').removeClass('active');
            $(this).addClass('active');
        });
    });
</script>
<script>
    //form validation
    function validateForm() {
        var x_name = document.forms["form_adddata"]["name"].value;
        var x_details = document.forms["form_adddata"]["details"].value;
        var x_price = document.forms["form_adddata"]["price"].value;
        var x_favorite_product = document.forms["form_adddata"]["favorite_product"].value;
        var x_user_job = document.forms["form_adddata"]["user_job"].value;
        var x_add_image = document.forms["form_adddata"]["image"].value;
        
        if (x_name == "") {
            alert("Product name must be filled out");
            return false;
        }
        if (x_details == "") {
            alert("Product details must be filled out");
            return false;
        }
        if (x_price == "") {
            alert("Price must be filled out");
            return false;
        }
        if (x_favorite_product == "") {
            alert("Favorite field must be filled out");
            return false;
        }
        if (x_user_job == "") {
            alert("Category field must be filled out");
            return false;
        }
         if (x_add_image == "") {
            alert("Please add an image");
            return false;
        }
    }
</script>
