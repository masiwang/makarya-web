@extends('app')
@section('content')
    <div class="auth-container shadow bg-white" style="height: 35rem; width: 70rem; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); padding: 20px; border-radius: 5px">
        <div class="row">
            <div class="col-12">
                <img src="{{asset('image/makarya-dark-160x48.png')}}" style="height: 48px" alt="" srcset="">
            </div>
        </div>
        <div class="row">
            <div class="col-7 text-center" style="border-right: #ddd 1px solid; height: 28rem;">
                <img src="{{asset('image/makarya-farmer.png')}}" style="height: 100%;" alt="" srcset="">
            </div>
            <div class="col-5">
                <h1>Selamat Datang</h1>
                <p>Untuk menggunakan layanan kami, harap autentikasi dengan email dan password Anda.</p>
                <div class="row mt-3">
                    <form action="">
                        <input type="hidden" name="isLogin" value="1">
                        <div class="input-group mt-3">
                            <span class="input-group-text" id="basic-addon1">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                </svg>
                            </span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-3">
                            <span class="input-group-text" id="basic-addon1">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-3" id="password2" style="display:none">
                            <span class="input-group-text" id="basic-addon1">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-key" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z"/>
                                    <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>
                            </span>
                            <input type="password" class="form-control" placeholder="Konfirmasi password" aria-label="Password" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mt-4 row">
                            <div class="col-12 d-flex justify-content-between">
                                <button class="btn btn-success" type="submit" id="submitForm">Masuk</button>
                                <a href="" class="btn btn-link text-decoration-none">Lupa kata sandi?</a>
                            </div>
                        </div>
                    </form>
                    <div class="row mt-3">
                        <div class="col-12">
                           <span id="txtChangeForm">Belum</span> memiliki akun? <button id="changeForm" class="btn btn-link btn-sm text-decoration-none">Registrasi</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        var btnChangeForm = document.querySelector('#changeForm');
        var btnSubmitForm = document.querySelector('#submitForm');
        var txtChangeForm = document.querySelector('#txtChangeForm');
        var formStatus = document.querySelector('input[name="isLogin"]');
        var inputConfirmPass = document.querySelector('#password2')
        btnChangeForm.addEventListener('click', function changeForm(){
            if(formStatus.value === "1"){
                btnSubmitForm.innerHTML = "Registrasi"
                btnChangeForm.innerHTML = "Masuk"
                txtChangeForm.innerHTML = "Sudah"
                inputConfirmPass.style.display = "flex"
                formStatus.value = "0"
            }else{
                btnSubmitForm.innerHTML = "Masuk"
                btnChangeForm.innerHTML = "Registrasi"
                txtChangeForm.innerHTML = "Belum"
                inputConfirmPass.style.display = "none"
                formStatus.value = "1"
            }
        });
    </script>
@endsection