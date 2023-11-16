@extends('layouts.main.app')
@section('style')
@endsection
@section('content')

<section class="tf-section project-info pt60 pb60">
    <div class="container"> 
        <div class="row">
            <div class="col-md-12">
                <form action="{{ route('income.regist') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <h3 class="my-5 text-center">Formulir Register</h3>
                    <div class="project-info-form style">
                        <h6 class="title">Pilih Jenis Lomba</h6>
                            <div class="form-inner">
                                <label for="pilihan1">Jenis Lomba:</label>
                                <select id="pilihan1" name="type" onchange="showHideSections()">
                                    <option value="-">Pilih Opsi</option>
                                    <option value="Inspection">INSPECTION</option>
                                    <option value="Inskill">INSKILL</option>
                                </select>
                                <br>
                            </div>
                    </div>
                    
                    <div class="project-info-form style" style="display: none" id="inputsubtema">
                        <h6 class="title mb30">Pilih Subtema-mu</h6>
                        <div class="form-inner">
                            <label for="pilihansubtema">Subtema:</label>
                            <select id="pilihansubtema" name="tema" onchange="showInput1()">
                                <option value="-">Pilih Opsi</option>
                                <option value="Lingkungan">Lingkungan</option>
                                <option value="Teknologi">Teknologi</option>
                                <option value="Renewable Energy">Renewable Energy</option>
                                <option value="Keselamatan dan Kesehatan Kerja (K3)">Keselamatan dan Kesehatan Kerja (K3)</option>
                                <option value="Kesehatan">Kesehatan</option>
                                <option value="Agrikultur">Agrikultur</option>
                                <option value="Pengolahan Limbah">Pengolahan Limbah</option>
                            </select>
                            <br>
                        </div>
                    </div>

                    <div class="project-info-form" style="display: none" id="inputnamatim">
                        <h6 class="title">Nama Tim</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Nama Tim
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Tim Anda..." name="nama_tim" required>
                            </fieldset>
                        </div>
                    </div>
                    
                    <div class="project-info-form" style="display: none" id="inputbiodataketua">
                        <h6 class="title">Identitas Diri Ketua</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Email
                                </label>
                                <input type="email" placeholder="Masukkan Emailmu..." name="email" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Password
                                </label>
                                <input type="password" placeholder="Masukkan Passwordmu..." name="password" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Confirm Password
                                </label>
                                <input type="password" placeholder="Masukkan Ulang Passwordmu..." name="confirm_password" required>
                            </fieldset>
                            <fieldset>
                                <label >
                                    Nama
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda... " name="nama_anggota[]">
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
                                <input type="text" placeholder="Silahkan Isi Dengan Asal Sekolah Anda..." name="institusi[]" required>
                            </fieldset>
                            <div style="display: flex;">
                                <a onclick="toggleFormulir()" class="add tf-button style2">Tambah Anggota</a>
                                <a onclick="hideFormulir()" class="remove tf-button style2" style="display: none;">Kurangi Anggota</a>
                            </div>
                        </div>
                    </div>

                    <div class="project-info-form formulirFieldSet" style="display: none" id="inputbiodataanggota">
                        <h6 class="title">Identitas Diri Anggota</h6>
                        <div class="form-inner">
                            <fieldset>
                                <label >
                                    Nama
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Nama Anda... " name="nama_anggota[]">
                            </fieldset>
                            <fieldset>
                                <label >
                                    Asal Sekolah
                                </label>
                                <input type="text" placeholder="Silahkan Isi Dengan Asal Sekolah Anda... " name="institusi[]">
                            </fieldset>
                        </div>
                    </div>

                    <div class="project-info-form style" style="display: none" id="inputdokumen">
                        <h6 class="title mb30">Upload Document </h6>
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
                                        <input type="file" name="ss_infest" id="file-1" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                        <label for="file-1">
                                            <img src="{{asset('assets/images/common/upload.png')}}" alt="">
                                            <span>Drag and drop <br> images</span>
                                            <span class="file"></span>
                                        </label>
                                    </div>
                                    <p>Bukti Follow Instagram Infest <br>(@infest.its)</p>
                                </div>
                                <div class="col img_2">
                                    <div class="box"> 
                                        <input type="file" name="ss_twibbon" id="file-2" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                        <label for="file-2">
                                            <img src="{{asset('assets/images/common/upload.png')}}" alt="">
                                            <span>Drag and drop <br> images</span>
                                            <span class="file"></span>
                                        </label>
                                    </div>
                                    <p>Bukti Screenshot  <br> Twibbon</p>
                                </div>
                            </div>
                            <div class="upload-img mb22" id="input1">
                                        <div class="col img_3">
                                            <div class="box"> 
                                                <input type="file" name="ss_poster" id="file-3" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                                <label for="file-3">
                                                    <img src="{{asset('assets/images/common/upload.png')}}" alt="">
                                                    <span>Drag and drop <br> images</span>
                                                    <span class="file"></span>
                                                </label>
                                            </div>
                                            <p>Bukti Screenshot <br> Share Poster</p>
                                        </div>
                                        <div class="col img_3">
                                            <div class="box"> 
                                                <input type="file" name="ss_instastory" id="file-4" class="inputfile inputfile-1" data-multiple-caption="{count} files selected" accept="image/*">
                                                <label for="file-4">
                                                    <img src="{{asset('assets/images/common/upload.png')}}" alt="">
                                                    <span>Drag and drop <br> images</span>
                                                    <span class="file"></span>
                                                </label>
                                            </div>
                                            <p>Bukti Screenshot <br> Instagram Story</p>
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

                        <h6 class="subtitle mb30 text-danger" id="notemerah">pilih opsi terlebih dahulu, dapat menggunakan fitur drag and drop atau mencantumkan link gdrive yang berisikan required document.</h6>
                            
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
    function toggleFormulir() {
        var formulirFieldset = document.querySelector('.formulirFieldSet');
        var tambahButton = document.querySelector('.add');
        var kurangiButton = document.querySelector('.remove');

        if (formulirFieldset.style.display === 'none') {
            formulirFieldset.style.display = 'block';
            tambahButton.style.display = 'none';
            kurangiButton.style.display = 'block';
        } else {
            formulirFieldset.style.display = 'none';
            tambahButton.style.display = 'block';
            kurangiButton.style.display = 'none';
        }
    }

    function hideFormulir() {
        var formulirFieldset = document.querySelector('.formulirFieldSet');
        var tambahButton = document.querySelector('.add');
        var kurangiButton = document.querySelector('.remove');

        formulirFieldset.style.display = 'none';
        tambahButton.style.display = 'block';
        kurangiButton.style.display = 'none';
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
    const notemerah = document.getElementById('notemerah');
    
    // Tambahkan event listener untuk perubahan pilihan
    pilihan.addEventListener('change', function () {
        // Dapatkan nilai yang dipilih
        const selectedOption = pilihan.value;
    
        // Sembunyikan semua pengisian
        input0.style.display = 'none';
        input1.style.display = 'none';
        input2.style.display = 'none';
        inputnote.style.display = 'none';
        notemerah.style.display = 'block';
    
        // Tampilkan pengisian yang sesuai dengan pilihan
        if (selectedOption === 'option1') {
            input0.style.display = 'flex';
            input1.style.display = 'flex';
            inputnote.style.display = 'block';
            notemerah.style.display = 'none';
        } else if (selectedOption === 'option2') {
            input2.style.display = 'block';
            notemerah.style.display = 'none';
        }
    
        // Atur tampilan pengisian
        pengisian.style.display = 'block';
    });
    
    </script>

<script>
    function showHideSections() {
        var pilihan = document.getElementById('pilihan1');
        var subtema = document.getElementById('inputsubtema');
        var namatim = document.getElementById('inputnamatim');
        var biodataketua = document.getElementById('inputbiodataketua');
        var biodatadokumen = document.getElementById('inputdokumen');

        if (pilihan.value === 'Inspection') {
            subtema.style.display = 'block';
            namatim.style.display = 'none';
            biodataketua.style.display = 'none';
            biodatadokumen.style.display = 'none';
        } else if (pilihan.value === 'Inskill') {
            subtema.style.display = 'none';
            namatim.style.display = 'block';
            biodataketua.style.display = 'block';
            biodatadokumen.style.display = 'block';
        } else {
            subtema.style.display = 'none';
            biodataketua.style.display = 'none';
            biodataanggota.style.display = 'none';
            biodatadokumen.style.display = 'none';
        }
    }
    
    function showInput1() {
            var subtema = document.getElementById('inputsubtema');
            var namatim = document.getElementById('inputnamatim');
            var biodataketua = document.getElementById('inputbiodataketua');
            var biodatadokumen = document.getElementById('inputdokumen');
            biodataketua.style.display = 'block';
            biodatadokumen.style.display = 'block';
            namatim.style.display = 'block';
        }
</script>

 <script src="{{ asset('assets/main/app/js/input-file.js') }}"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>  
@endsection
