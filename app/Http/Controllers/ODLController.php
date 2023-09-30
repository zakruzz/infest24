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

        if($request->tipe_pendaftaran == "umum") {
            $request->validate([
                "nama" => "required",
                "no_wa" => "required",
                "asal_sekolah" => "required",
                "image_ig" => "mimes:jpeg,jpg,png|max:5000",
                "image_ic" => "mimes:jpeg,jpg,png|max:5000",
                "image_sis" => "mimes:jpeg,jpg,png|max:5000",
                "image_milab" => "mimes:jpeg,jpg,png|max:5000",
            ]);
    
            SubeventODLUmum::create([
                "nama" => $request->nama,
                "no_wa" => $request->no_wa,
                "asal_sekolah" => $request->asal_sekolah,
                "image_ig" => "abc",
                "image_ic" => "abc",
                "image_sis" => "abc",
                "image_milab" => "abc",
            ]);

            return redirect()->away('https://wa.me/085251497372');
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
                "image_ig" => "abc",
                "image_ic" => "abc",
                "image_sis" => "abc",
                "image_milab" => "abc",
            ]);

            return redirect()->away('https://wa.me/085251497372');
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
