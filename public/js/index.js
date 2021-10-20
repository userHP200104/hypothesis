$(() => {
    
    console.log("ready");

    $(".close").on("click", function(){

        $(".large-container-overlay").fadeOut();
        
    });
});
