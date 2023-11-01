<?php

namespace App\Http\Controllers;

use App\Models\ODL\SubeventODLUmum;
use App\Models\ODL\SubeventODLUndangan;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class ODLController extends Controller
{
    public function save(Request $request) {

        if ($request->image_sis) {
            $image = $request->file('image_sis');
            $imageSIS = "IMAGESIS" . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('ODL/Image/SIS/', $imageSIS); // Simpan gambar ke direktori penyimpanan
        }else{
            $imageSIS = "";
        }
        

        if ($request->image_ic) {
            $image = $request->file('image_ic');
            $imageIC = "IMAGEIC" . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('ODL/Image/IC/', $imageIC); // Simpan gambar ke direktori penyimpanan
        }else{
            $imageIC = "";
        }
        

        if ($request->image_milab) {
            $image = $request->file('image_milab');
            $imageMILAB = "IMAGEMILAB" . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('ODL/Image/MILAB/', $imageMILAB); // Simpan gambar ke direktori penyimpanan
        }else{
            $imageMILAB = "";
        }
        

        if ($request->image_ig) {
            $image = $request->file('image_ig');
            $imageIG = "IMAGEIG" . time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('ODL/Image/IG/', $imageIG); // Simpan gambar ke direktori penyimpanan
        }else{
            $imageIG = "";
        }
        
        if ($request->link_drive) {
            $link_drive = $request->link_drive;
        }else {
            $link_drive = "";
        }

        if($request->tipe_pendaftaran == "umum") {
            $request->validate([
                "nama" => "required",
                "no_wa" => "required",
                "asal_sekolah" => "required",
            ]);
            
    
            SubeventODLUmum::create([
                "nama" => $request->nama,
                "no_wa" => $request->no_wa,
                "asal_sekolah" => $request->asal_sekolah,
                "link_drive" => $link_drive,
                "image_ig" => $imageIG,
                "image_ic" => $imageIC,
                "image_sis" => $imageSIS,
                "image_milab" => $imageMILAB,
            ]);

            return redirect()->away('https://chat.whatsapp.com/Cjl087nTIpc8eECZ6G5vI7');
        }elseif($request->tipe_pendaftaran == "undangan") {
            $daftar_nama = [];
            $daftar_wa = [];

            foreach($request->nama as $nama){
                $daftar_nama[] = $nama;
            }

            foreach($request->no_wa as $no){
                $daftar_wa[] = $no;
            }

            SubeventODLUndangan::create([
                "nama" => json_encode($daftar_nama),
                "no_wa" => json_encode($daftar_wa),
                "asal_sekolah" => $request->asal_sekolah,
                "nama_guru" => $request->nama_guru,
                "wa_guru" => $request->wa_guru,
                "link_drive" => $link_drive,
                "image_ig" => $imageIG,
                "image_ic" => $imageIC,
                "image_sis" => $imageSIS,
                "image_milab" => $imageMILAB,
            ]);

            return redirect()->away('https://chat.whatsapp.com/BSWhe5kHZK56COBGbFaSWy');
        }

    }

    public function exportUmum()
    {
        // Ambil data yang akan diekspor (dalam contoh ini, data dari tabel "users")
        $umum = SubeventODLUmum::all();

        // Inisialisasi objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menambahkan header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Peserta');
        $sheet->setCellValue('C1', 'Nomor Whatsapp');
        $sheet->setCellValue('D1', 'Asal Sekolah');

        // Mengisi data ke dalam spreadsheet
        $row = 2;
        $number = 1;
        foreach ($umum as $item) {
            $sheet->setCellValue('A' . $row, $number);
            $sheet->setCellValue('B' . $row, $item->nama);
            $sheet->setCellValue('C' . $row, $item->no_wa);
            $sheet->setCellValue('D' . $row, $item->asal_sekolah);
            $row++;
            $number++;
        }

        // Konfigurasi objek Writer untuk format Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);

        // Simpan file Excel ke dalam storage atau Anda bisa mengirimkannya sebagai respons HTTP langsung
        $filename = 'Daftar Umum.xlsx';
        $writer->save(storage_path('app/public/' . $filename));

        return response()->download(storage_path('app/public/' . $filename))->deleteFileAfterSend(true);
    }

    public function exportUndangan()
    {
        // Ambil data yang akan diekspor (dalam contoh ini, data dari tabel "users")
        $undangan = SubeventODLUndangan::all();

        // Inisialisasi objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menambahkan header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Peserta');
        $sheet->setCellValue('C1', 'Nomor Whatsapp');
        $sheet->setCellValue('D1', 'Asal Sekolah');
        $sheet->setCellValue('E1', 'Nama Guru');
        $sheet->setCellValue('F1', 'Nomor Guru');

        // Mengisi data ke dalam spreadsheet
        $row = 2;
        $number = 1;
        foreach ($undangan as $item) {
            foreach(json_decode($item->nama) as $key => $peserta) {
                $sheet->setCellValue('A' . $row, $number);
                $sheet->setCellValue('B' . $row, $peserta);
                $sheet->setCellValue('C' . $row, json_decode($item->no_wa)[$key]);
                $sheet->setCellValue('D' . $row, $item->asal_sekolah);
                $sheet->setCellValue('E' . $row, $item->nama_guru);
                $sheet->setCellValue('F' . $row, $item->wa_guru);
                $row++;
                $number++;
            } 
        }

        // Konfigurasi objek Writer untuk format Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);

        // Simpan file Excel ke dalam storage atau Anda bisa mengirimkannya sebagai respons HTTP langsung
        $filename = 'Daftar Undangan.xlsx';
        $writer->save(storage_path('app/public/' . $filename));

        return response()->download(storage_path('app/public/' . $filename))->deleteFileAfterSend(true);
    }
}
