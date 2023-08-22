<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;
use App\Models\JobTitle;

class CareerController extends Controller
{
    
    public function getVacancy(Request $req){

        $model = \DB::table('jobs')
        ->leftjoin('job_titles', 'jobs.job_id', '=', 'job_titles.id')
        ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
        ->select('jobs.*', 'job_titles.job_title_name', 'company_regions.region_city')  
        ->where('jobs.status', '=', 0)      
        ->get();

        // $lokasi = \DB::table('company_regions')
        // ->select('company_regions.region_city')
        // ->get();

        $lokasi = \DB::table('jobs')
        ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
        ->select('company_regions.region_city')
        ->where('jobs.status', '=', 0)
        ->get();

        $lokasiCari = \DB::table('jobs')
        ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
        ->select('company_regions.region_city')
        ->distinct('company_regions.region_city')
        ->where('jobs.status', '=', 0)
        ->get();
        
        
        if($req->cariNama){
            $model= \DB::table('jobs')
            ->leftjoin('job_titles', 'jobs.job_id', '=', 'job_titles.id')
            ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
            ->select('jobs.*', 'job_titles.job_title_name', 'company_regions.region_city') 
            ->where('job_titles.job_title_name', 'LIKE', '%'.$req->cariNama.'%')   
            ->where('jobs.status', '=', 0)   
            ->get();
        }
        else if($req->cariLokasi){
            $model= \DB::table('jobs')
            ->leftjoin('job_titles', 'jobs.job_id', '=', 'job_titles.id')
            ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
            ->select('jobs.*', 'job_titles.job_title_name', 'company_regions.region_city') 
            ->where('company_regions.region_city', '=', $req->cariLokasi)  
            ->where('jobs.status', '=', 0)    
            ->get();

           
        }
        if( $req->cariLokasi && $req->cariNama){
            $model= \DB::table('jobs')
            ->leftjoin('job_titles', 'jobs.job_id', '=', 'job_titles.id')
            ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
            ->select('jobs.*', 'job_titles.job_title_name', 'company_regions.region_city') 
            ->where('company_regions.region_city', '=', $req->cariLokasi)  
            ->where('job_titles.job_title_name', 'LIKE', '%'.$req->cariNama.'%') 
            ->where('jobs.status', '=', 0)   
            ->get();     

        }
      
        
        return view ('career.index', compact('model', 'lokasi', 'lokasiCari'));

    }

    public function desc(Request $req){


        $req=$req->id;


        $desk=\DB::table('job_description')
        ->leftjoin('jobs', 'job_description.ReqId', '=', 'jobs.id')
        ->select('jobs.id', 'job_description.JobDesc')
        ->where('job_description.ReqId', $req)
        ->where('job_description.JobDesc', '<>', NULL)
        ->get();

        $syar=\DB::table('job_requirments')
        ->leftjoin('jobs', 'job_requirments.ReqId', '=', 'jobs.id')
        ->select('jobs.id', 'job_requirments.JobReq' )
        ->where('job_requirments.ReqId', $req)
        ->where('job_requirments.JobReq', '<>', NULL)
        ->get();

        $spek=\DB::table('job_spesialis')
        ->leftjoin('jobs', 'job_spesialis.ReqId', '=', 'jobs.id')
        ->select('jobs.id', 'job_spesialis.JobSpec')
        ->where('job_spesialis.ReqId', $req)
        ->where('job_spesialis.JobSpec', '<>', NULL)
        ->get();


        $name=\DB::table('jobs')
        ->leftjoin('job_titles', 'jobs.job_id', '=', 'job_titles.id')
        ->select('job_titles.job_title_name', 'jobs.id')
        ->where('jobs.id', $req)
        ->get();

        $lokasi=\DB::table('jobs')
        ->leftjoin('company_regions', 'jobs.region_id', '=', 'company_regions.id')
        ->select('jobs.id', 'company_regions.region_city')
        ->where('jobs.id', $req)
        ->get();

        // return $lokasi;

        return view('career.job_desc', compact('desk', 'syar','spek', 'name', 'lokasi', 'req')) ;
    }


    public function input(Request $req){

        
        $req=$req->id;

        // return $req;
        

        return view('career.input', compact('req'));
    }

    public function selesai(Request $req){

        $input = $req-> salary;


        $str = str_replace(".", "", $input);


        $req->validate([
            'file' => 'required|mimes:pdf'
        ]);

        // $file_name = $req->file->getClientOriginalExtension();
        $file_name = $req->file->getClientOriginalName();
        $req->file->move('uploads/jobportal/', $file_name);

        // $req->file->storeAs('uploads/jobportal/', $file_name);
        

        \DB::table('applier')
        ->insert([
            'id_job' => $req -> idJob,
            'fullname' => $req -> fName,
            'email' => $req -> email,
            'address' => $req -> alamat,
            'rt' => $req -> rt,
            'rw' => $req -> rw,
            'kelurahan' => $req -> lurah,
            'kecamatan' => $req -> camat,
            'kabupaten' => $req -> kabupaten,
            'phone' => $req -> phone,
            'kontak_keluarga' => $req -> noKeluarga,
            'hubungan_keluarga' => $req -> hubungan,
            'hubungan_keluarga' => $req -> hubungan2,
            'ktp' => $req -> noKtp,
            'kk' => $req -> noKk,
            'npwp' => $req -> npwp,
            'place' => $req -> pob,
            'dob' => $req -> dob,
            'gender' => $req -> gender,
            'martial' => $req -> martial,
            'sim' => $req -> sim,
            'religion' => $req -> religion,
            'lastedu' => $req -> lastedu,
            'yearedu' => $req -> yearedu,
            'edufocus' => $req -> edufocus,
            'eduname' => $req -> eduname,
            'companyname1' => $req -> companyname1,
            'lastpostion1' => $req -> lastpostion1,
            'sdate1' => $req -> sdate1,
            'edate1' => $req -> edate1,
            'reason1' => $req -> reason1,
            'companyname2' => $req -> companyname2,
            'lastpostion2' => $req -> lastpostion2,
            'sdate2' => $req -> sdate2,
            'edate2' => $req -> edate2,
            'reason2' => $req -> reason2,
            'companyname3' => $req -> companyname3,
            'lastpostion3' => $req -> lastpostion3,
            'sdate3' => $req -> sdate3,
            'edate3' => $req -> edate3,
            'reason3' => $req -> reason3,
            'prestasi' => $req -> prestasi,
            'salary' => $str,
            'workstart' => $req -> workstart,
            'file_name' => $file_name,
            'noBpjs' => $req -> bpjs,
            'noBpjsTk' => $req -> bpjsTk,
        ]);


        return redirect()->to('/')->with('message', [
            'type' => 'success',
            'msg' => 'Berhasil!',
        ]);
    }



}
