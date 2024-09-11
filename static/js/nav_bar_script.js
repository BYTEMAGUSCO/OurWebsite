$(document).ready(()=>{
    let carret_clicked = false

    $("#carret-btn").on("click", (e)=>{
        e.preventDefault();
        carret_clicked = !carret_clicked
        if(!carret_clicked){
            $("#nav-dropdown").addClass("hidden")
            return
        }
        $("#nav-dropdown").removeClass("hidden")
    })
})