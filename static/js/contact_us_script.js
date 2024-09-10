$(document).ready(()=>{
    $("#contact-form").on("submit", (e)=>{
        e.preventDefault()  
        $.ajax({
            type: "POST",
            url: "/handle-email-requests"
        }).done((data)=>{
            console.log(data.message)
        })
    })
})