var Script = function () {

    $().ready(function() {
        // validate the comment form when it is submitted
        $("#commentForm").validate();

        // validate signup form on keyup and submit
        $("#signupForm").validate({
            rules: {
                mainCategory: "required",
                mainManu: "required",
                SubCategory: "required",
                CompanyName:"required",
                areaName:"required",
                locationName: "required",
                imageTitle:"required",
                shoppingMohol:"required",
                phoneNumber:"required",
                contactPersonNumber:"required",
                cityName:"required",
                pickUpAddress:"required",
                commission:"required",
                price: "required",
                roomNumber: "required",
                title: "required",
                startDate: "required",
                EndDate: "required",
                urlLink: "required",

                productName:"required",
                codeNumber: "required",
                productId:"required",
                supplierName:"required",
                productQuentity:"required",
                buyingPrice:"required",
                sellingPrice:"required",

                discount:"required",
                productDetails:"required",

                subject:"required",
                //lastname: "required",
                username: {
                    required: true,
                    minlength: 10
                },
                password: {
                    required: true,
                    minlength: 5
                },
                confirm_password: {
                    required: true,
                    minlength: 5,
                    equalTo: "#password"
                },
                email: {
                    required: true,
                    email: true
                },
                topic: {
                    required: "#newsletter:checked",
                    minlength: 2
                },
                agree: "required"
            },
            messages: {
                mainCategory: "Please enter Main category",
                mainManu: "Please enter main manu name",
                SubCategory: "Please enter sub category",
                areaName: "Please selected area",
                locationName: "please selected location",
                CompanyName:"please enter company name",
                imageTitle:"Please enter image title",
                shoppingMohol:"Please enter Shopping mohol",
                phoneNumber:"Please enter phone number",
                contactPersonNumber:"Please enter contact person number",
                cityName:"Please enter city name",
                pickUpAddress:"Please enter pick up address",
                commission:"please enter commission",
                price: "please enter price",
                roomNumber: "please enter room number",
                title: "please enter title",
                startDate: "please select start date",
                EndDate: "please select end date",
                urlLink: "Please enter slider link",



                productName:"Please enter your product name",
                codeNumber: "please enter your product code number",
                productQuentity:"please enter your product quantity",
                productCode:"Please enter your product code",
                supplierName:"please enter supplier name",
                buyingPrice:"please enter buying price",
                sellingPrice:"please enter selling price",
                discount:"please enter discount",
                productDetails:"please enter product details",


                subject:"Please enter Subject",
                //lastname: "Please enter your lastname",
                username: {
                    required: "Please enter a username",
                    minlength: "Your username must consist of at least 10 characters"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                confirm_password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long",
                    equalTo: "Please enter the same password as above"
                },
                email: "Please enter a valid email address",
                agree: "Please accept our policy"
            }
        });

        // propose username by combining first- and lastname
        $("#username").focus(function() {
            var firstname = $("#firstname").val();
            var lastname = $("#lastname").val();
            if(firstname && lastname && !this.value) {
                this.value = firstname + "." + lastname;
            }
        });

        //code to hide topic selection, disable for demo
        var newsletter = $("#newsletter");
        // newsletter topics are optional, hide at first
        var inital = newsletter.is(":checked");
        var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
        var topicInputs = topics.find("input").attr("disabled", !inital);
        // show when newsletter is checked
        newsletter.click(function() {
            topics[this.checked ? "removeClass" : "addClass"]("gray");
            topicInputs.attr("disabled", !this.checked);
        });
    });


}();