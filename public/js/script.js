let menu = document.querySelector("#menu-icon");
let navbar = document.querySelector(".navbar");
menu.addEventListener("click", function(){
    navbar.classList.toggle("active");
});

window.onscroll = () => {
    navbar.classList.remove("active");
}

$(function () {
    $(document).on("click", "#logout", function(event) {
        $.ajax({
            type: "POST",
            url: "/logout",
            data: {},
            dataType: "text",
            success: function (data) {
                window.location='/';
            },
            error: function (error) {
                alert ("something went wrong");
            }
        });
    })
});