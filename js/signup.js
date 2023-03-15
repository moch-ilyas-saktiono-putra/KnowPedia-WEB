function validation() {
    var name = document.getElementById('nama').value;
    var lastname = document.getElementById('LastName').value;
    var email = document.getElementById('email').value;
    var pass = document.getElementById('password').value;
    var repass = document.getElementById('repassword').value;

    if(name == "" || lastname == "" || email == "" || pass == "" || repass == "") {
        Swal.fire("Data tidak lengkap", "Lengkapi semua data!", "info");
    } else if(pass != repass) {
        Swal.fire("Password tidak sama", "Sesuaikan password!", "warning");
    } else if(emailvalidator() == false){
        Swal.fire("Email tidak valid", "Masukkan email yang valid", "warning");
    }else {

        var txt = 
        "Nama      : " + name + " " + lastname +
        "\nEmail       : " + email;

        Swal.fire({
            title: "Data berhasil disimpan", 
            html: `<pre>` + txt + `</pre>` ,
            type: "success",
            icon: "success",
            footer: "Happy Writing!",
            customClass: {
                title: 'format-title',
                popup: 'format-pre',
              }
        })
    }
}

function emailvalidator(){
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat)){
        return true;
    } else {
        return false;
    }
}