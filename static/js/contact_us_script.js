$(document).ready(()=>{
    $("#contact-form").on("submit", (e)=>{

        data = {
            "sender_name": $('#sender_name').val(),
            "sender_email": $('#sender_email').val(),
            "sender_phone_no": $('#sender_phone_no').val(),
            "sender_service_interested": $('#sender_service_interested').val(),
            "sender_body": $('#sender_body').val() 
        }
        $('#contact-form')[0].reset();

        e.preventDefault()  
        $.ajax({
            type: "POST",
            url: "/handle-email-requests",
            data: JSON.stringify(data),
            contentType: 'application/json',
            dataType: 'json'
        }).done((data)=>{
            if(data == 200){                
                console.log()
                return
            }

            alert('Your email cannot be sent!')
        })
    })
})