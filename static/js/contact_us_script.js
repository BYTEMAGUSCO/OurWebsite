$(document).ready(()=>{
    $("#contact-form").on("submit", (e)=>{
        e.preventDefault()  
        $.ajax({
            type: "POST",
            url: "/handle-email-requests",
            data: JSON.stringify({
                "sender_name": $('#sender_name').val(),
                "sender_email": $('#sender_email').val(),
                "sender_phone_no": $('#sender_phone_no').val(),
                "sender_service_interested": $('#sender_service_interested').val(),
                "sender_body": $('#sender_body').val() 
            }),
            contentType: 'application/json',
            dataType: 'json'
        }).done((data)=>{
            console.log(data)
        })
    })
})