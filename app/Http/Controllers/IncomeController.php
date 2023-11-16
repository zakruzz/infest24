<?php

namespace App\Http\Controllers;

use App\Models\Auth\User;
use App\Models\BuktiFollow;
use App\Models\Participant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class IncomeController extends Controller
{
    public function save(Request $request) {

        if($request->password === $request->confirm_password) {
            $user = User::create([
                'name'              => $request->nama_tim,
                'email'             => $request->email,
                'password'          => Hash::make($request->password),
                'image'             => 'default.png',
                'type'              => 'superadmin',
                'is_darkmode'       => 0,
            ]);

            $daftar_nama = [];
            $daftar_institusi = [];

            foreach($request->nama_anggota as $nama) {
                $daftar_nama[] = $nama;
            }

            foreach($request->institusi as $institusi) {
                $daftar_institusi[] = $institusi;
            }

            $file = $request->ss_twibbon;
            $ss_twibbon = 'Twibbon_' . $request->nama_tim . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/bukti_follow/twibbon', $ss_twibbon);

            $file = $request->ss_infest;
            $ss_infest = 'Infest_' . $request->nama_tim . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/bukti_follow/infest', $ss_infest);

            $file = $request->ss_poster;
            $ss_poster = 'Poster_' . $request->nama_tim . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/bukti_follow/poster', $ss_poster);

            $file = $request->ss_instastory;
            $ss_instastory = 'Instastory_' . $request->nama_tim .'.' . $file->getClientOriginalExtension();
            $file->storeAs('public/bukti_follow/instastory', $ss_instastory);

            $participant = Participant::create([
                "user_id" => $user->id,
                "name" => json_encode($daftar_nama),
                "no_wa" => $request->no_wa,
                "institusi" => json_encode($daftar_institusi),
                "type" => $request->type,
                "tema" => $request->tema,
            ]);

            BuktiFollow::create([
                "user_id" => $user->id,
                "participant_id" => $participant->id,
                "ss_infest" => $ss_infest,
                "ss_twibbon" => $ss_twibbon,
                "ss_poster" => $ss_poster,
                "ss_instastory" => $ss_instastory,
                "link_drive" => $request->link_drive,
            ]);

            $user->assignRole($request->type);
        }

        if($request->type == 'Inspection') {
            return redirect()->away('https://chat.whatsapp.com/FgxOCl6eA3PLOcq0stnE2r');
        }elseif($request->type == 'Inskill') {
            return redirect()->away('https://chat.whatsapp.com/E7dYjQJbqjaL3U0hTF3aSu');
        }
    }

    public function exportPendaftarInspection()
    {
        // Ambil data yang akan diekspor (dalam contoh ini, data dari tabel "users")
        $participant = Participant::where('type', 'Inspection')->get();

        // Inisialisasi objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menambahkan header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Tim');
        $sheet->setCellValue('C1', 'Anggota');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Nomor Whatsapp');
        $sheet->setCellValue('F1', 'Asal Sekolah');
        $sheet->setCellValue('G1', 'Tema yang dipilih');

        // Mengisi data ke dalam spreadsheet
        $row = 2;
        $number = 1;
        foreach ($participant as $item) {
            if(json_decode($item->name)[1] != null) {
                $anggota = json_decode($item->name)[0] . ' & ' . json_decode($item->name)[1];
            }else {
                $anggota = json_decode($item->name)[0];
            }
            $sheet->setCellValue('A' . $row, $number);
            $sheet->setCellValue('B' . $row, $item->user->name);
            $sheet->setCellValue('C' . $row, $anggota);
            $sheet->setCellValue('D' . $row, $item->user->email);
            $sheet->setCellValue('E' . $row, $item->no_wa);
            $sheet->setCellValue('F' . $row, $item->institusi);
            $sheet->setCellValue('G' . $row, $item->tema);
            $row++;
            $number++;
        }

        // Konfigurasi objek Writer untuk format Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);

        // Simpan file Excel ke dalam storage atau Anda bisa mengirimkannya sebagai respons HTTP langsung
        $filename = 'Pendaftar Inspection.xlsx';
        $writer->save(storage_path('app/public/' . $filename));

        return response()->download(storage_path('app/public/' . $filename))->deleteFileAfterSend(true);
    }

    public function exportPendaftarInskill()
    {
        // Ambil data yang akan diekspor (dalam contoh ini, data dari tabel "users")
        $participant = Participant::where('type', 'Inskill')->get();

        // Inisialisasi objek Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Menambahkan header kolom
        $sheet->setCellValue('A1', 'No');
        $sheet->setCellValue('B1', 'Nama Tim');
        $sheet->setCellValue('C1', 'Anggota');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Nomor Whatsapp');
        $sheet->setCellValue('F1', 'Asal Sekolah');

        // Mengisi data ke dalam spreadsheet
        $row = 2;
        $number = 1;
        foreach ($participant as $item) {
            if(json_decode($item->name)[1] != null) {
                $anggota = json_decode($item->name)[0] . ' & ' . json_decode($item->name)[1];
            }else {
                $anggota = json_decode($item->name)[0];
            }
            $sheet->setCellValue('A' . $row, $number);
            $sheet->setCellValue('B' . $row, $item->user->name);
            $sheet->setCellValue('C' . $row, $anggota);
            $sheet->setCellValue('D' . $row, $item->user->email);
            $sheet->setCellValue('E' . $row, $item->no_wa);
            $sheet->setCellValue('F' . $row, $item->institusi);
            $row++;
            $number++;
        }

        // Konfigurasi objek Writer untuk format Excel (Xlsx)
        $writer = new Xlsx($spreadsheet);

        // Simpan file Excel ke dalam storage atau Anda bisa mengirimkannya sebagai respons HTTP langsung
        $filename = 'Pendaftar Inskill.xlsx';
        $writer->save(storage_path('app/public/' . $filename));

        return response()->download(storage_path('app/public/' . $filename))->deleteFileAfterSend(true);
    }

}
