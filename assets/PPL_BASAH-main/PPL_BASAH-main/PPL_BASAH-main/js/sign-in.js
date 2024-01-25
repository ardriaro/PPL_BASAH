function change() {
    
    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
    var x = document.getElementById('password').type;
    var myElement = document.getElementById("togglePassword");
    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {

        //ubah form input password menjadi text
        document.getElementById('password').type = 'text';

        //ubah icon mata terbuka menjadi tertutup
        myElement.classList.remove("bi-eye-slash");
        myElement.classList.add("bi-eye");
    }else {

        //ubah form input password menjadi text
        document.getElementById('password').type = 'password';
        
        //ubah icon mata terbuka menjadi tertutup
        myElement.classList.remove("bi-eye");
        myElement.classList.add("bi-eye-slash");
    }
}