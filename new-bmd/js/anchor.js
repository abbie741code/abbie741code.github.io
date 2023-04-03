// $(function () {

//            $('a[href*=#]:not([href=#])').click(function() {

//                var target = $(this.hash);

//                $('html,body').animate({

//                    scrollTop: target.offset().top

//                }, 900);

//                return false;

//            });

 

//        });


    //    $(function () {

    //     $("a[href*=\\#]:not([href=\\#])").click(function() {

    //         var target = $(this.hash);

    //         $("html,body").animate({

    //             scrollTop: target.offset().top

    //         }, 900);

    //         return false;

    //     });



    // });

    
    // chatGPT
    $(function () {

        $('a[href*="#"]:not([href="#"])').click(function() {

            var target = $(this.hash);

            $('html,body').animate({

                scrollTop: target.offset().top

            }, 900);

            return false;

        });



    });