
//cart-payment-select
$(function() {
    $('select').material_select();
    $('ul.tabs').tabs();
    $('.modal-trigger').leanModal();
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 15 // Creates a dropdown of 15 years to control year
    });
    
    //Header fixed on scroll
    $(window).bind("scroll", function(){ //when the user is scrolling...
        if ($(window).scrollTop() >= 20) { //header hide by scroll
            $('#header').addClass('overflow');
        } else {
            $('#header').removeClass('overflow');
        }
        if ($(window).scrollTop() >= 40) { //header is show past 400px
            $('#header').addClass('fixed');
        } else {
            $('#header').removeClass('fixed');
        }
    });
    
    $(window).scroll(function () {

        if ($(this).scrollTop() > 50) {
            $('#back-top').fadeIn();
        } else {
            $('#back-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-top').click(function () {
        $('#back-top a').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-top').tooltip('hide');
    
    //    checkout
    $('#cash-payment').click(function(){
        $('#bank-payment-condation').hide('') ;
        $('#cash-payment-condation').show('');
    });
    $('#bank-account').click(function(){
        $('#cash-payment-condation').hide('');
        $(' #bank-payment-condation').show('');
    });
   
         
    $("#cart").click(function(){
        $(".shopping-cart1").toggle();
    });
    $("#item-name-icon").click(function(){
        $(".de ").eq(0).remove();
    });
          
    
    $('#main-slider').sliderPro({
        width: 659,
        height: 275,
        orientation: 'vertical',
        loop: false,
        arrows: true,
        buttons: false,
        thumbnailsPosition: 'right',
        thumbnailPointer: true,
        thumbnailWidth: 257,
        thumbnailHeight: 65,
        breakpoints: {
         
            500: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 120,
                thumbnailHeight: 50
            },
            320: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 100,
                thumbnailHeight: 50,
                width: 277,
                height: 250
            },
            360: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 100,
                thumbnailHeight: 50,
                width: 277,
                height: 250
            },
//            768: {
//                thumbnailsPosition: 'bottom',
//                thumbnailWidth: 100,
//                thumbnailHeight: 50,
//                width: 300,
//                height: 250
//            },
            800: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 100,
                thumbnailHeight: 50,
                width: 800,
                height: 370
            },
            980: {
                thumbnailsPosition: 'bottom',
                thumbnailWidth: 100,
                thumbnailHeight: 40,
                width: 900,
                height: 300
            }
        }
    });
    
    $( '.slider_vedio' ).sliderPro({
        width: 960,
        height: 500,
        fade: true,
        arrows: true,
        buttons: false,
        fullScreen: true,
        shuffle: true,
        smallSize: 500,
        mediumSize: 1000,
        largeSize: 3000,
        thumbnailArrows: true,
        autoplay: false
    });
    $('#menu-list5').slicknav({
        closeOnClick:'false',
        prependTo:'.main-menu5'
    });
    $('.slicknav_menu').prepend('<a href="index.html" class=""><img  src="webassets/image/logo-n.png""</a>');
    //    $('.slicknav_menu').prepend('<a herf="" class=""><img src="Assets/image/mobile-citymail-logo.png""</a>');

    //    
    //         fashion
    var fashion=$(".owl-fashion").owlCarousel({
        autoPlay: false,
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-fashion').click(function (e) {
        e.preventDefault();
        fashion.trigger('owl.prev');

    });
    $('.nav-next-fashion').click(function (e) {
        e.preventDefault();
        fashion.trigger('owl.next');
    });
    
    //         household
    var household=$(".owl-household").owlCarousel({
        autoPlay: false,
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-household').click(function (e) {
        e.preventDefault();
        household.trigger('owl.prev');

    });
    $('.nav-next-household').click(function (e) {
        e.preventDefault();
        household.trigger('owl.next');
    });
    //         decorator
    var decorator=$(".owl-decorator").owlCarousel({
        autoPlay: false,
        items : 4,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-decorator').click(function (e) {
        e.preventDefault();
        decorator.trigger('owl.prev');

    });
    $('.nav-next-decorator').click(function (e) {
        e.preventDefault();
        decorator.trigger('owl.next');
    });

    //         hotel
    var hotel=$(".owl-hotel").owlCarousel({
        autoPlay: false,
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-hotel').click(function (e) {
        e.preventDefault();
        hotel.trigger('owl.prev');

    });
    $('.nav-next-hotel').click(function (e) {
        e.preventDefault();
        hotel.trigger('owl.next');
    });
 
    
    //        owl-related-fashion
    var fashionrel=$(".owl-related-fashion").owlCarousel({
        autoPlay: false,
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-fashion').click(function (e) {
        e.preventDefault();
        fashionrel.trigger('owl.prev');

    });
    $('.nav-next-fashion').click(function (e) {
        e.preventDefault();
        fashionrel.trigger('owl.next');
    });
    
    //        owl-related
    var tourism=$(".owl-tourism").owlCarousel({
        autoPlay: false,
        items : 2,
        itemsCustom : false,
        itemsDesktop : [1199,2],
        itemsDesktopSmall : [980,3],
        itemsTablet: [768,2],
        itemsTabletSmall: false,
        itemsMobile : [479,1],
        singleItem : false,
        itemsScaleUp : false,
        pagination : false
    });
        
    $('.nav-prev-tourism').click(function (e) {
        e.preventDefault();
        tourism.trigger('owl.prev');

    });
    $('.nav-next-tourism').click(function (e) {
        e.preventDefault();
        tourism.trigger('owl.next');
    });
    
    /* =================================
         ===  Quantity Input                 ====
         =================================== */
    $('.minus-btn').click(function(e) {
        e.preventDefault();
        var input = $(this).parent().find('input');
        var currentVal = parseInt(input.val());
        if (currentVal > 1) {
            input.val(currentVal - 1).change();
        }
    }
    );
    $('.plus-btn').click(function(e) {
        e.preventDefault();
        var input = $(this).parent().find('input');
        var currentVal = parseInt(input.val());
        input.val(currentVal + 1).change();
    }
    );
    $('.quantity input').focusin(function() {
        $(this).data('oldValue', $(this).val());
    }
    );
                   
    $("#zoom_09").elevateZoom({
        gallery : "gallery_09", 
        galleryActiveClass: "active"
    });
   
   
    //   checkout wized
    var navListItems = $('div.setup-panel div a'),
    allWells = $('.setup-content'),
    allNextBtn = $('.nextBtn'),
    allPrevBtn = $('.prevBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
        $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('.btn-add').addClass('.btn-add');
            $item.addClass('yellow-co');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });
  
    allPrevBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        prevStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().prev().children("a");

        prevStepWizard.removeAttr('disabled').trigger('click');
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
        curStepBtn = curStep.attr("id"),
        nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
        curInputs = curStep.find("input[type='text'],input[type='url']"),
        isValid = true;

        //                    $(".form-group").removeClass("has-error");
        //                    for(var i=0; i<curInputs.length; i++){
        //                        if (!curInputs[i].validity.valid){
        //                            isValid = false;
        //                            $(curInputs[i]).closest(".form-group").addClass("has-error");
        //                        }
        //                    }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
    //    end checkout wized
    $('.collapse-btn').on('click', function () {

        $('.collapse-btn').not(this).removeClass('fa-minus');
       
        $(this).toggleClass('fa-minus');      
    });
    $('.accordion-toggle').on('click', function () {

        $('.collapse-btn').not($(this).next()).removeClass('fa-minus');
       
        $(this).next().toggleClass('fa-minus');      
    });  
    
    //    cart
    $('.removeItemheader').click(function(){
        $(this).closest('li').remove();
    });
    $('.removeItem').click(function(){
        $(this).closest('tr').remove();
    });
    //    lazy-image
    $('.lazy-image').lazyImage();
    

   
});


$(function() {
  

    });