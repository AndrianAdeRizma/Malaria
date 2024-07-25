{{-- <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                    unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div> --}}


<!-- Modal -->
<div wire:ignore.self class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="hidden" wire:model="id">
                                <label for="exampleFormControlInput1"><b>Demam</b></label>
                                <input type="text" class="form-control" wire:model="demam" id="exampleFormControlInput1" placeholder="Enter demam">
                                @error('demam') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput2"><b>Sakit Kepala</b></label>
                                <input type="text" class="form-control" wire:model="sakit_kepala" id="exampleFormControlInput2" placeholder="Enter sakit kepala">
                                @error('sakit_kepala') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput3"><b>Mengigil</b></label>
                                <input type="text" class="form-control" wire:model="mengigil" id="exampleFormControlInput3" placeholder="Enter mengigil">
                                @error('mengigil') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput4"><b>Berkeringat</b></label>
                                <input type="text" class="form-control" wire:model="berkeringat" id="exampleFormControlInput4" placeholder="Enter berkeringat">
                                @error('berkeringat') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput5"><b>Mual</b></label>
                                <input type="text" class="form-control" wire:model="mual" id="exampleFormControlInput5" placeholder="Enter mual">
                                @error('mual') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlInput6"><b>Diagnosa</b></label>
                                <input type="text" class="form-control" wire:model="diagnosa" id="exampleFormControlInput6" placeholder="Enter diagnosa">
                                @error('diagnosa') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Simpan</button>
            </div>
       </div>
    </div>
</div>
