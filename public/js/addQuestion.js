$(() => {
    
    console.log("add question ready");

    // dialoge control

        $(".ask_question_btn").on("click", function(){
            $("#new_question_background").fadeIn();
            console.log("fade in");
        });

        $(".close_icon").on("click", function(){
            $("#new_question_background").fadeOut();
            console.log("fade out");
        });

        $(".post_btn").on("click", function(){
            $("#new_question_background").fadeOut();
            console.log("fade out");
        });

});
