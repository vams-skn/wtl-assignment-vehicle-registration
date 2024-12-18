$(document).ready(function(){
    var d = new Date();
    var month = d.getMonth();
    var month_actual = month + 1;

    if (month_actual < 10) {
        month_actual = "0"+month_actual; 
    }

    var day_val = d.getDate();
    if (day_val < 10) {
        day_val = "0"+day_val; 
    }

    var year = d.getFullYear();
    var todayDate = year + "-" + month_actual + "-" + day_val;

    $('input[type="date"]').val(todayDate);
    
    $("#submit").on('click', function(event){
        event.preventDefault();
        const form = document.getElementById('form');
        const phoneNumber = $('#number').val();
        if (!(phoneNumber.length === 10 && /^\d+$/.test(phoneNumber)))
        {
            alert("Invalid phone number");
            return;
        }

        if (form.checkValidity()) {
            $.ajax({
                type: "POST",
                url: "submit.php",
                data: $(form).serialize(),
                success: function(response) {
                    const jsonResponse = JSON.parse(response);
                    if (jsonResponse.success) {
                        window.open('table.php', "_blank");
                    } else {
                        console.log(3);
                        alert('Error inserting: ' + jsonResponse.error);
                    }
                },
                error: function(xhr, status, error) {
                    console.log(error);
                    alert("An error occurred :" + xhr.error);
                }
            });
        } else {
            alert("Fill all required fields before submitting the form.");
        }
    })
});