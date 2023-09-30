@extends('layouts.main.app')
@section('style')
@endsection
@section('content')

<section class="tf-section project-info pt60 pb60">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('odl.regist') }}">
                    @csrf
                    <h3 class="my-5 text-center">Formulir One Day Lecture Umum</h3>
                    <div class="project-info-form">
                        <h6 class="title">Step 1 : Identitas Diri</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Nama Peserta 1
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Peserta 1
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Peserta 2
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Peserta 2
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Peserta 3
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Peserta 3
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Peserta 4
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Peserta 4
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Peserta 5
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Peserta 5
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa[]" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Asal Sekolah
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Asal Sekolah Anda..." name="asal_sekolah" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama Guru Pendamping
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Guru Pendamping Anda..." name="nama_guru" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp Guru Pendamping
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Guru Pendamping Anda..." name="wa_guru" required>
                            </fieldset>
                        </div> 
                    </div>

                    <div class="project-info-form style">
                        <h6 class="title mb30">Step 2 : Upload Document</h6>
                        <div class="form-inner">
                            <div class="upload-img mb22">
                                <div class="col img_1"> 
                                    <div class="box"> 
                                        <input type="file" name="image_ig" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                        <label for="file-1">
                                            <img src="./assets/images/common/upload.png" alt="">
                                            <span>Drag and drop <br> images</span>
                                            <span class="file"></span>
                                        </label>
                                    </div>
                                    <p>Bukti Follow Instagram Infest <br>(@infest.its)</p>
                                </div>
                                <div class="col img_2">
                                    <div class="box"> 
                                        <input type="file" name="image_ic" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                        <label for="file-2">
                                            <img src="./assets/images/common/upload.png" alt="">
                                            <span>Drag and drop <br> images</span>
                                            <span class="file"></span>
                                        </label>
                                    </div>
                                    <p>Bukti Follow Instagram Laboratorium IC (@iclab_its)</p>
                                </div>
                            </div>
                            <div class="upload-img mb22">
                                        <div class="col img_3">
                                            <div class="box"> 
                                                <input type="file" name="image_sis" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                                <label for="file-3">
                                                    <img src="./assets/images/common/upload.png" alt="">
                                                    <span>Drag and drop <br> images</span>
                                                    <span class="file"></span>
                                                </label>
                                            </div>
                                            <p>Bukti Follow Instagram Laboratorium SIS (@labsis.its)</p>
                                        </div>
                                        <div class="col img_3">
                                            <div class="box"> 
                                                <input type="file" name="image_milab" id="file-4" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                                <label for="file-4">
                                                    <img src="./assets/images/common/upload.png" alt="">
                                                    <span>Drag and drop <br> images</span>
                                                    <span class="file"></span>
                                                </label>
                                            </div>
                                            <p>Bukti Follow Instagram Laboratorium Pengukuran (@milabits_)</p>
                                        </div>
                                
                            </div>

                            <p class="note">Note: Kita Hanya Mendukung File PNG/JPG dengan Max. 25 MB</p>
                        </div>
                    </div>  

                    <div class="wrap-btn">
                        <button type="submit" class="tf-button style2" onclick="berhasil()">
                            Kirim
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(".dropdown img.flag").addClass("flagvisibility");
    $(".dropdown dt a").click(function() {
        $(".dropdown dd ul").toggle();
    });
                
    $(".dropdown dd ul li a").click(function() {
        var text = $(this).html();
        $(".dropdown dt a span").html(text);
        $(".dropdown dd ul").hide(); 
    });
                
    function getSelectedValue(id) {
        return $("#" + id).find("dt a span.value").html();
    }

    $(document).bind('click', function(e) {
        var $clicked = $(e.target);
        if (! $clicked.parents().hasClass("dropdown"))
            $(".dropdown dd ul").hide();
    });

    $(".dropdown img.flag").toggleClass("flagvisibility");
</script>
<script>
        var no_link = function(){
            $('a.nolink').on('click', function(e){
            e.preventDefault();
        });
        }
</script> 
<script>
    function berhasil() {
        Swal.fire({
  iconHtml: '<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50" style="fill:#40C057;"> <path d="M 25 2 C 12.317 2 2 12.317 2 25 C 2 37.683 12.317 48 25 48 C 37.683 48 48 37.683 48 25 C 48 20.44 46.660281 16.189328 44.363281 12.611328 L 42.994141 14.228516 C 44.889141 17.382516 46 21.06 46 25 C 46 36.579 36.579 46 25 46 C 13.421 46 4 36.579 4 25 C 4 13.421 13.421 4 25 4 C 30.443 4 35.393906 6.0997656 39.128906 9.5097656 L 40.4375 7.9648438 C 36.3525 4.2598437 30.935 2 25 2 z M 43.236328 7.7539062 L 23.914062 30.554688 L 15.78125 22.96875 L 14.417969 24.431641 L 24.083984 33.447266 L 44.763672 9.046875 L 43.236328 7.7539062 z"></path> </svg>',
  title: 'Berhasil!',
  allowOutsideClick: false,
  showConfirmButton: false,
  html: '<p>Pengiriman Formulir Berhasil! Silahkan Masuk Kedalam Grup WhatsApp</p> <br> <a class="tf-button style2 me-md-2" href="https://chat.whatsapp.com/BSWhe5kHZK56COBGbFaSWy">Masuk Grup WhatsApp</a>'
})
    }
</script>
 <script src="{{ asset('assets/main/app/js/input-file.js') }}"></script>  
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
@endsection
