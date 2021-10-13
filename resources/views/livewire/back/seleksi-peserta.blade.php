<div>
     <!-- Begin Page Content -->
 <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Seleksi Peserta</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
</div>
<hr>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Pilih Loker</label>
                            <select wire:model="pilih_loker" class="form-control">
                                    <option class="bg-primary text-white" value="">Pilih</option>
                                @foreach($vacancy as $vac)
                                    <option value="{{$vac->id}}">{{$vac->title_vacancy}}</option>
                                @endforeach
                            </select>
                            <br>
                            <btn wire:click="show_peserta" class="btn btn-secondary"></btm>
                        </div>
                    </div>
                </div>
                {{$pilih_loker}}
                <hr>
                @if($pilih_loker == null)
                <p class="text-danger">Pilih Loker Terlebih Dulu</p>
                @else
                    <livewire:seleksi.table>
                @endif
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->

<!-- /.container-fluid -->
</div>
