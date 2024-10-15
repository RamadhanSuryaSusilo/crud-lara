<?php
namespace App\Http\Controllers;
use App\Models\Surya;
use Illuminate\Http\Request;
use function Ramsey\Uuid\v1;
class SuryaController extends Controller
{
    public function tampil(){   
        $surya = Surya::get();
        return view('siswa.tampil', compact('surya'));
    }

    public function tambah(){   
        return view('siswa.tambah');
    }

    public function submit(Request $request){   
        $surya = new Surya();
        $surya->nis = $request->nis;
        $surya->nama = $request->nama;
        $surya->alamat = $request->alamat;
        $surya->jenis_kelamin = $request->jenis_kelamin;
        $surya->hobi = $request->hobi;
        $surya->asal_sekolah = $request->asal_sekolah;
        $surya->save();
        return redirect()->route('siswa.tampil');
    }

    public function edit($id){
        $surya = Surya::find($id);
        return view('siswa.edit', compact('surya'));
    }

    public function update(Request $request, $id){
        $surya = Surya::find($id);
        $surya->nis = $request->nis;
        $surya->nama = $request->nama;
        $surya->alamat = $request->alamat;
        $surya->jenis_kelamin = $request->jenis_kelamin;
        $surya->hobi = $request->hobi;
        $surya->asal_sekolah = $request->asal_sekolah;
        $surya->update();
        return redirect()->route('siswa.tampil');
    }

    public function delete($id)
{
    $surya = Surya::find($id);

    if ($surya) {
        $surya->delete();
        return response()->json(['message' => 'Data berhasil dihapus']);
    }

    return response()->json(['message' => 'Data tidak ditemukan'], 404);
}

//     public function delete($id){
//     $surya = Surya::find($id);
//     if ($surya) {
//         $surya->delete();
//         return response()->json(['message' => 'Berhasil menghapus data']);
//     }
//     return response()->json(['message' => 'Data tidak ditemukan'], 404);
// }
    // public function delete($id){
    //     $surya = Surya::find($id);
    //     $surya->delete();
    //     return redirect()->route('siswa.tampil');
    // }
}
