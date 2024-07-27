<!-- Modal -->
<div wire:ignore.self class="modal fade" id="formModal" data-backdrop="static" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel"> {{ $id ? 'Form Edit Training' : 'Form Add Training' }}</h5>
                <button type="button" wire:click.prevent="cancel()" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <input type="hidden" wire:model.defer="id">
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput1"><b>Demam</b></label>
                            <select class="form-control" wire:model.defer="demam" id="exampleFormControlInput1"
                                data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Rendah">Rendah</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Tinggi">Tinggi</option>
                                <option value="Sangat Tinggi">Sangat Tinggi</option>
                            </select>
                            @error('demam')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput2"><b>Sakit Kepala</b></label>
                            <select class="form-control" wire:model.defer="sakit_kepala" id="exampleFormControlInput2"
                                data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Ringan">Ringan</option>
                                <option value="Sedang">Sedang</option>
                                <option value="Berat">Berat</option>
                            </select>
                            @error('sakit_kepala')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput3"><b>Mengigil</b></label>
                            <select class="form-control" wire:model.defer="mengigil" id="exampleFormControlInput3"
                                data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Iya">Iya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                            @error('mengigil')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput4"><b>Berkeringat</b></label>
                            <select class="form-control" wire:model.defer="berkeringat"
                                id="exampleFormControlInput4" data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Iya">Iya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                            @error('berkeringat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput5"><b>Mual</b></label>
                            <select class="form-control" wire:model.defer="mual"
                                id="exampleFormControlInput5" data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Sering">Sering</option>
                                <option value="Tidak Sering">Tidak Sering</option>
                            </select>
                            @error('mual')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="exampleFormControlInput6"><b>Diagnosa</b></label>
                            <select class="form-control" wire:model.defer="diagnosa"
                                id="exampleFormControlInput6" data-placeholder="Pilih" required>
                                <option value=""></option>
                                <option value="Positif">Positif</option>
                                <option value="Negatif">Negatif</option>
                            </select>
                            @error('diagnosa')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary"
                    data-dismiss="modal">Close</button>
                <button type="submit" wire:click.prevent="store()" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>
