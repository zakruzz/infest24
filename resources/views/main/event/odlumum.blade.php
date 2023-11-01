@extends('layouts.main.app')
@section('style')
@endsection
@section('content')

<section class="tf-section project-info pt60 pb60">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('odl.regist') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tipe_pendaftaran" value="umum">
                    <h3 class="my-5 text-center">Formulir One Day Lecture Umum</h3>
                    <div class="project-info-form">
                        <h6 class="title">Step 1 : Identitas Diri</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Nama
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda..." name="nama" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nomor WhatsApp
                                </label>
                                <input type="tel" placeholder="Silahkan Isi Dengan Nomor WhatsApp Anda..." name="no_wa" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Asal Sekolah
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Asal Sekolah Anda..." name="asal_sekolah" required>
                            </fieldset>
                        </div>
                    </div>

                    <div class="project-info-form style">
                        <h6 class="title mb30">Step 2 : Upload Document </h6>
                        <div class="form-inner">
                        
                                <label for="pilihan">Pilih Opsi:</label>
                                    <select id="pilihan">
                                        <option value="-">Pilih Opsi</option>
                                        <option value="option1">Upload Dokumen dengan Drag and Drop</option>
                                        <option value="option2">Link Drive</option>
                                    </select>
                        <br>
                        
                        <div id="pengisian" style="display: none;">
                            <div class="upload-img mb22" id="input0">
                                <div class="col img_1"> 
                                    <div class="box"> 
                                        <input type="file" name="image_ig" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                        <label for="file-1">
                                            <img src="{{asset('public/assets/images/common/upload.png')}}" alt="">
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
                                            <img src="{{asset('public/assets/images/common/upload.png')}}" alt="">
                                            <span>Drag and drop <br> images</span>
                                            <span class="file"></span>
                                        </label>
                                    </div>
                                    <p>Bukti Follow Instagram Laboratorium IC (@iclab_its)</p>
                                </div>
                            </div>
                            <div class="upload-img mb22" id="input1">
                                        <div class="col img_3">
                                            <div class="box"> 
                                                <input type="file" name="image_sis" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                                <label for="file-3">
                                                    <img src="{{asset('public/assets/images/common/upload.png')}}" alt="">
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
                                                    <img src="{{asset('public/assets/images/common/upload.png')}}" alt="">
                                                    <span>Drag and drop <br> images</span>
                                                    <span class="file"></span>
                                                </label>
                                            </div>
                                            <p>Bukti Follow Instagram Laboratorium Pengukuran (@milabits_)</p>
                                        </div>
                                    </div>
                            <p class="note" id="inputnote">Note: Kita Hanya Mendukung File JPEG, PNG, dan JPG dengan Max. 25 MB</p>
                            <fieldset id="input2">
                                <label >
                                    Link Drive
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Link Drive Anda..." name="link_drive">
                            </fieldset>
                        </div>

                        <h6 class="subtitle mb30 text-danger">pilih opsi terlebih dahulu, dapat menggunakan fitur drag and drop atau mencantumkan link gdrive yang berisikan required document.</h6>
                            
                    <!--<div class="project-info-form">-->
                    <!--    <div class="form-inner">-->
                    <!--    </div>-->
                    <!--</div>-->
                        </div>
                    </div>  


                    <div class="wrap-btn">
                        <button type="submit" class="tf-button style2">
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
// Ambil elemen-elemen yang diperlukan dari HTML
const pilihan = document.getElementById('pilihan');
const pengisian = document.getElementById('pengisian');
const input0 = document.getElementById('input0');
const input1 = document.getElementById('input1');
const input2 = document.getElementById('input2');
const inputnote = document.getElementById('inputnote');

// Tambahkan event listener untuk perubahan pilihan
pilihan.addEventListener('change', function () {
    // Dapatkan nilai yang dipilih
    const selectedOption = pilihan.value;

    // Sembunyikan semua pengisian
    input0.style.display = 'none';
    input1.style.display = 'none';
    input2.style.display = 'none';
    inputnote.style.display = 'none';

    // Tampilkan pengisian yang sesuai dengan pilihan
    if (selectedOption === 'option1') {
        input0.style.display = 'flex';
        input1.style.display = 'flex';
        inputnote.style.display = 'block';
    } else if (selectedOption === 'option2') {
        input2.style.display = 'block';
    }

    // Atur tampilan pengisian
    pengisian.style.display = 'block';
});

</script>
 <script src="{{ asset('public/assets/main/app/js/input-file.js') }}"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>  
@endsection
